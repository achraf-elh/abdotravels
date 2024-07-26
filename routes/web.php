<?php

use App\Http\Controllers\Admin\IndexController;
use App\Http\Controllers\Admin\PermissionController;
use App\Http\Controllers\Admin\RoleController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\UtilisateurController;
use App\Http\Controllers\VilleController;
use App\Http\Controllers\VoyageController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('/', function () {
//     return view('dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');

// Route::get('/travel/booking', function () {
//     return view('travel.booking');
// });
use App\Http\Controllers\PassagerController;
use App\Http\Controllers\ReservationController;
use App\Models\Voyage;

Route::get('/travel/booking', [PassagerController::class, 'create'])->name('travel.booking');
Route::post('/travel/booking/store', [PassagerController::class, 'store'])->name('travel.booking.store');
Route::get('/travel/booking/success', function () {
    return view('travel.booking.success');
})->name('travel.booking.success');
Route::post('/travel/booking/search', [VoyageController::class, 'search'])->name('travel.voyages.search');
Route::get('/travel/Offres', [VoyageController::class, 'showOffres'])->name('travel.offres');
Route::get('/travel/book/{id}', [VoyageController::class, 'show'])->name('travel.book');
Route::get('/travel/home', [VilleController::class, 'showvilles'])->name('travel.home');
Route::get('/travel/reserve/{id}', [ReservationController::class, 'create'])->name('travel.reserve');
Route::post('/travel/reserve', [ReservationController::class, 'store'])->name('travel.reserve.store');
// Route::post('/reserve', [ReservationController::class, 'store'])->name('reserve.store');

// Route pour afficher et télécharger le ticket PDF
Route::get('/pdf/ticket/{id}', [ReservationController::class, 'showTicket'])->name('pdf.ticket');

Route::middleware(['role:admin'])->group(function () {
    Route::get('/dashboard', [ReservationController::class, 'dashboard'])->name('dashboard');
});


Route::get('/travel/services', function () {
    return view('travel.services');
});
// Route::get('/travel/Offres', function () {
//     return view('travel.Offres');
// });
Route::get('/travel/contact', function () {
    return view('travel.contact');
});
Route::post('/travel/contact', [ContactController::class, 'sendContactMail'])->name('contact.send');

Route::middleware(['auth', 'role:admin'])->name('villes.')->prefix('villes')->group(function(){
    // Routes pour Ville
    Route::get('/create', [VilleController::class, 'create'])->name('villes');
    Route::get('/index', [VilleController::class, 'index'])->name('index');
    Route::post('/store', [VilleController::class, 'store'])->name('store');
    Route::get('/edit/{id}', [VilleController::class, 'edit'])->name('edit');
    Route::put('/update/{id}', [VilleController::class, 'update'])->name('update');
    Route::delete('/delete/{id}', [VilleController::class, 'delete'])->name('delete');
});

Route::middleware(['auth', 'role:admin'])->name('utilisateurs.')->prefix('utilisateurs')->group(function(){
    // Routes pour Utilisateur
    Route::get('/index', [UtilisateurController::class, 'index'])->name('index');
    Route::get('/create', [UtilisateurController::class, 'create'])->name('create');
    Route::post('/store', [UtilisateurController::class, 'store'])->name('store');
    Route::get('/edit/{id}', [UtilisateurController::class, 'edit'])->name('edit');
    Route::put('/update/{id}', [UtilisateurController::class, 'update'])->name('update');
    Route::delete('/delete/{id}', [UtilisateurController::class, 'delete'])->name('delete');
});

Route::middleware(['auth', 'role:admin'])->name('voyages.')->prefix('voyages')->group(function(){
    // Routes pour Voyage
    Route::get('/index', [VoyageController::class, 'index'])->name('index');
    Route::get('/create', [VoyageController::class, 'create'])->name('create');
    Route::post('/store', [VoyageController::class, 'store'])->name('store');
    Route::get('/edit/{id}', [VoyageController::class, 'edit'])->name('edit');
    Route::put('/update/{id}', [VoyageController::class, 'update'])->name('update');
    Route::delete('/delete/{id}', [VoyageController::class, 'destroy'])->name('delete');
});

Route::middleware(['auth', 'role:admin'])->name('admin.')->prefix('admin')->group(function(){
    // Route::get('/', [IndexController::class,'index'])->name('index');
    Route::resource('/roles', RoleController::class);
    Route::post('/roles/{role}/permissions', [RoleController::class,'givePermission'])->name('roles.permissions');
    Route::delete('/roles/{role}/permissions/{permission}', [RoleController::class,'revokePermission'])->name('roles.permissions.revoke');
    Route::resource('/permissions', PermissionController::class);
    Route::post('/permissions/{permission}/roles',[PermissionController::class,'assignRole'])->name('permissions.roles');
    Route::delete('/permissions/{permission}/roles/{role}',[PermissionController::class,'removeRole'])->name('permissions.roles.remove');
    Route::get('/users',[UserController::class,'index'])->name('users.index');
    Route::get('/users/{user}', [UserController::class, 'show'])->name('users.show');
    Route::delete('/users/{user}',[UserController::class,'destroy'])->name('users.destroy');
    Route::post('/users/{user}/roles', [UserController::class, 'assignRole'])->name('users.roles');
    Route::delete('/users/{user}/roles/{role}', [UserController::class, 'removeRole'])->name('users.roles.remove');
    Route::post('/users/{user}/permissions', [UserController::class, 'givePermission'])->name('users.permissions');
    Route::delete('/users/{user}/permissions/{permission}', [UserController::class, 'revokePermission'])->name('users.permissions.revoke');

});

Route::middleware('auth')->group(function () {
    Route::get('/', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
