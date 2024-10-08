<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\DramaController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\NewsletterController;
use App\Http\Controllers\PerformerController;
use App\Http\Controllers\SettingController;
use App\Http\Controllers\StatementController;
use App\Http\Controllers\TeamController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\GalleryController;
use App\Http\Controllers\VideoController;
use App\Http\Controllers\FestivalsController;
use App\Http\Controllers\TeamsConditionsController;
use App\Http\Controllers\WorkshopController;
use App\Models\RoleRoute;
use App\Http\Controllers\BookingController;
use App\Http\Controllers\WorkPrangonmor;
use App\Http\Controllers\WorkPrangonmorController;

function getRoleName($routeName)
{
    $routesData = RoleRoute::where('route_name', $routeName)->get();
    $result = [];
    foreach ($routesData as $routeData) {
        array_push($result, $routeData->role_name);
    }
    return $result;
}

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

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/statement', [HomeController::class, 'statement'])->name('statement');
Route::get('/about', [HomeController::class, 'about'])->name('about');
Route::get('/drama', [HomeController::class, 'drama'])->name('drama');
Route::get('/founder', [HomeController::class, 'founder'])->name('founder');
Route::get('/work-prangonemor', [HomeController::class, 'workPrangonemor'])->name('work-prangonemor');

Route::get('/show-booking-form/{id}', [BookingController::class, 'index'])->name('show-booking-form');
Route::post('/booking-store', [BookingController::class, 'store'])->name('booking-store');

Route::get('/all-production', [HomeController::class, 'production'])->name('all-production');
Route::get('/production-detail/{id}', [HomeController::class, 'productionDetail'])->name('production-detail');

Route::get('/all-workshop', [HomeController::class, 'workshop'])->name('all-workshop');
Route::get('/workshop-detail/{id}', [HomeController::class, 'workshopDetail'])->name('workshop-detail');

Route::get('/all-festival', [HomeController::class, 'festival'])->name('all-festival');
Route::get('/festival-detail/{id}', [HomeController::class, 'festivalDetail'])->name('festival-detail');

Route::get('/all-team', [HomeController::class, 'team'])->name('all-team');
Route::get('/team-detail/{id}', [HomeController::class, 'teamDetail'])->name('team-detail');
Route::get('/contact', [HomeController::class, 'contact'])->name('contact');

Route::get('/post/add', [PostController::class, 'index'])->name('post.add')->middleware('roles');
Route::post('/post/new', [PostController::class, 'create'])->name('post.new');
Route::get('/post/manage', [PostController::class, 'manage'])->name('post.manage');
Route::get('/post/edit/{id}', [PostController::class, 'edit'])->name('post.edit');
Route::post('/post/update/{id}', [PostController::class, 'edit'])->name('post.update');
Route::post('/post/delete/{id}', [PostController::class, 'delete'])->name('post.delete');


Route::middleware(['auth:sanctum',  config('jetstream.auth_session'), 'verified'])->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

    Route::get('/role/add', [RoleController::class, 'index'])->name('role.add');
    Route::post('/role/new', [RoleController::class, 'create'])->name('role.new');
    Route::get('/role/manage', [RoleController::class, 'manage'])->name('role.manage');
    Route::get('/role/edit/{id}', [RoleController::class, 'edit'])->name('role.edit');
    Route::post('/role/update/{id}', [RoleController::class, 'update'])->name('role.update');
    Route::get('/role/delete/{id}', [RoleController::class, 'delete'])->name('role.delete');

    Route::get('/user/add', [UserController::class, 'index', ])->name('user.add');
    Route::post('/user/new', [UserController::class, 'create'])->name('user.new');
    Route::get('/user/manage', [UserController::class, 'manage'])->name('user.manage');
    Route::get('/user/edit/{id}', [UserController::class, 'edit'])->name('user.edit');
    Route::post('/user/update/{id}', [UserController::class, 'update'])->name('user.update');
    Route::get('/user/delete/{id}', [UserController::class, 'delete'])->name('user.delete');

    Route::resource('dramas',DramaController::class);
    Route::resource('teams',TeamController::class);
    Route::resource('galleries',GalleryController::class);
    Route::resource('videos',VideoController::class);
    Route::resource('festivals',FestivalsController::class);
    Route::resource('workshops',WorkshopController::class);
    Route::resource('teams-conditions',TeamsConditionsController::class);
    Route::resource('statements',StatementController::class);
    Route::resource('performers',PerformerController::class);
    Route::resource('newsletters',NewsletterController::class);
    Route::resource('contacts',ContactController::class);
    Route::resource('settings',SettingController::class);
    Route::resource('abouts',AboutController::class);
    Route::resource('workPrangonmors',WorkPrangonmorController::class);
    Route::get('bookings', [BookingController::class, 'bookingAdmin'])->name('bookings');
    Route::get('bookings-edit/{id}', [BookingController::class, 'edit'])->name('bookings-edit');
    Route::post('bookings-update/{id}', [BookingController::class, 'update'])->name('bookings-update');
    
});