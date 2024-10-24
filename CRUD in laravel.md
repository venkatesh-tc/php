CRUD in Laravel refers to the four fundamental operations used for managing database records: Create, Read, Update, and Delete.

Create: It involves adding new data records to the database.
Read: This operation is about retrieving data from the database for viewing.
Update: It allows you to modify existing database records.
Delete: This operation is used to remove data records from the database.
Laravel provides convenient methods and tools to perform these actions easily, making managing and interacting with your application's database simpler.

Step 1: First of all, we will create a laravel project named tccrud. To create this project, run the following command in the xampp/htdocs directory.
          If you have installed WAMP then your folder location will be www

          composer create-project laravel/laravel tccrud

Step 2: Now, we will create a database in the phpMyAdmin. The name of the database is product.

Step 3: In this step, we will make a database configuration for the example database name, username, password, etc., 
for our crud application. We will modify the .env file and fill in all the required details, as shown below: 

APP_NAME=Laravel
APP_ENV=local
APP_KEY=base64:RSgr2sXreFtQ7lcD46f/bQQR/VoA0eD+laWsW6pGIaE=
APP_DEBUG=true
APP_URL=http://localhost

LOG_CHANNEL=stack
LOG_DEPRECATIONS_CHANNEL=null
LOG_LEVEL=debug

DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=product
DB_USERNAME=root
DB_PASSWORD=


keep the password blank 

We have set the DB_DATABASE as product, DB_USERNAME as root and left the DB_PASSWORD blank.

Step 4: Now, we will create a migration to create a table named product_items.  

The command to create migration and a table is the following:

php artisan make:migration create_product_table --create="product_items"



The migration 2022_11_20_184138_create_product_table.php contains the following code:

<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
    * Run the migrations.
    *
    * @return void
    */
    public function up()
    {
        Schema::create('product_items', function (Blueprint $table) {
            $table->id();
            $table->prod_name();
            $table->prod_price();
            $table->prod_brand();
            $table->timestamps();
        });
    }

    /**
    * Reverse the migrations.
    *
    * @return void
    */
    public function down()
    {
        Schema::dropIfExists('product_items');
    }
};

In the above table, we have added three new columns, prod_name, prod_price, and prod_brand.

Step 5: Now, we will migrate the changes in the table into our database product. 
To migrate the above changes, run the following command.

php artisan migrate


After migrating the changes to the product database. The Product model will be created.

The Product.php file contains the following code. And also, we have added two attributes i.e., $table and $fillable. 

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $table='product_items';  
    protected $fillable=['prod_name','prod_price','prod_brand'];  
}


Step 6: Now, we will create a controller ProductController to implement all the CRUD operations. 

To create a controller, run the following command.

php artisan make:controller ProductController -r

After running the above command, the controller will be created successfully.

The ProductController.php will contain the following code:

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
    * Display a listing of the resource.
    *
    * @return \Illuminate\Http\Response
    */
    public function index(){
    }

    /**
    * Show the form for creating a new resource.
    *
    * @return \Illuminate\Http\Response
    */
    public function create(){
    }

    /**
    * Store a newly created resource in storage.
    *
    * @param  \Illuminate\Http\Request  $request
    * @return \Illuminate\Http\Response
    */
    public function store(Request $request){
    }

    /**
    * Display the specified resource.
    *
    * @param  int  $id
    * @return \Illuminate\Http\Response
    */
    public function show($id){
    }

    /**
    * Show the form for editing the specified resource.
    *
    * @param  int  $id
    * @return \Illuminate\Http\Response
    */
    public function edit($id){
    }

    /**
    * Update the specified resource in storage.
    *
    * @param  \Illuminate\Http\Request  $request
    * @param  int  $id
    * @return \Illuminate\Http\Response
    */
    public function update(Request $request, $id){
    }

    /**
    * Remove the specified resource from storage.
    *
    * @param  int  $id
    * @return \Illuminate\Http\Response
    */
    public function destroy($id){
    }
}

In the above code, we can see that the ProductController contains inbuilt methods like
index(), create(), store(), show(), edit(), update(), and destroy(). 
We will use these methods to implement Laravel Crud.
