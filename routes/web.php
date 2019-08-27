
<?php
use App\products;
use App\catagory;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

/*Route::get('/', function () {
    return view('welcome');
});

Route::get('/index',function(){

	return view('dashboard.pages.index');
});
*/

Route::resource('catagory' , 'catagoryController');
Route::resource('product' , 'productController');
Route::resource('user' , 'usersController');
//Auth::routes();
  // Route::get('register', 'Auth\RegisterController@showRegistrationForm')->name('register');
   // Route::post('register', 'Auth\RegisterController@register');

//Route::get('/home', 'HomeController@index')->name('home');

Route::get('/index','frontendController@index');
Route::get('/products','frontendController@products');
//Route::get('/products/{catagory}','frontendcontroller@product');
//Route::get('/products/ajax/{id}','productpageController@filter');

//Route::get('/products/{id?}','productpageController@filter')->name('filter');



/*Route::get('/products', function () {
	$cat_id = Input::get('cat_id');
	$products = products::where('catagory_id','=',$cat_id);
    return Response::json($products);
});*/

/*Route::get('/products', function(){
  $input = Input::get('option');

	$catagory = catagory::find($input);
	if($catagory != null){
	$products = $catagory->products();
	return Response::eloquent($products->get(['id','title']));}
});*/


Route::get('/productdetail/{id}', 'frontendController@show');


//auth route for custom users (normal)
//Route::get('/login/customusers', 'Auth\LoginController@showcustomusersLoginForm')->name('customlogin');
//Route::post('/login/customusers', 'Auth\LoginController@customusersLogin')->name('customlogin');


    //Route::get('/register/customusers', 'Auth\RegisterController@showCustomUserRegisterForm');
  //Route::post('/register/customusers', 'Auth\RegisterController@createCustomUsers')->name('customregister');
   //Route::view('/customusers', 'customusers');

   //Route::get('logout', 'Auth\LoginController@logoutcustomuser')->name('logoutcustomuser')->name('customuserslogout');


   Route::get('/productdetail/writereview1/{id}','frontendController@reviewWhenLoggedIn');
   Route::get('/productdetail/writereview2/{id}','frontendController@reviewWhenNotLoggedIn');

    Route::post('/productdetail/writereview1/{id}','frontendController@store');
   Route::post('/productdetail/writereview2/{id}','frontendController@login');