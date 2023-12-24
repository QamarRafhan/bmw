<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserSubscriptionsController;
use App\Models\BrandModel;
use App\Models\product\ProductModel;

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



// Route::fallback(function () {
//     return redirect()->route('login');
// });

// Route::prefix('admin')->group(function () {

require_once __DIR__ . '/auth.php';
require_once __DIR__ . '/admin.php';
require_once __DIR__ . '/vendor.php';
require_once __DIR__ . '/profile.php';
require_once __DIR__ . '/user.php';
require_once __DIR__ . '/brand.php';
require_once __DIR__ . '/category.php';
require_once __DIR__ . '/product.php';
require_once __DIR__ . '/notifications.php';
require_once __DIR__ . '/socialite.php';
// });

Route::get('/dashboard', function () {
    return view('index');
});
Route::get('/', function () {
    $brands = BrandModel::All();
    $products = ProductModel::All();

    return view('frontend.pages.index', ['brands' => $brands, 'products' => $products]);
})->name('home');


Route::get('subscriptions', [UserSubscriptionsController::class, 'index'])->name('subscriptions');
