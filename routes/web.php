<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\LivreController;
use App\Http\Controllers\RayonController;
use App\Http\Controllers\CategorieController;

// Routes pour les catégories
Route::resource('categories', CategorieController::class)->only([
    'index', 'show'
]);

// Routes protégées pour les catégories
Route::middleware(['auth'])->group(function () {
    Route::resource('categories', CategorieController::class)->except([
        'index', 'show'
    ]);
});

// Routes pour les rayons
Route::resource('rayons', RayonController::class)->only([
    'index', 'show'
]);

// Routes protégées pour les rayons
Route::middleware(['auth'])->group(function () {
    Route::resource('rayons', RayonController::class)->except([
        'index', 'show'
    ]);
});

// Routes pour les livres
Route::resource('livres', LivreController::class)->only([
    'index', 'show'
]);

// Routes protégées pour les livres
Route::middleware(['auth'])->group(function () {
    Route::resource('livres', LivreController::class)->except([
        'index', 'show'
    ]);
});

// Routes d'authentification
Route::get('/login', [AuthController::class, 'getLogin'])->name('auth.getLogin');
Route::post('/login', [AuthController::class, 'postLogin'])->name('auth.postLogin');
Route::get('/register', [AuthController::class, 'getRegister'])->name('auth.getRegister');
Route::post('/register', [AuthController::class, 'postRegister'])->name('auth.postRegister');
Route::get('/logout', [AuthController::class, 'logout'])->name('auth.logout');





// use Illuminate\Support\Facades\Route;
// use App\Http\Controllers\AuthController;
// use App\Http\Controllers\LivreController;
// use App\Http\Controllers\RayonController;
// use App\Http\Controllers\CategorieController;

// // Routes pour les catégories
// Route::get('categories', [CategorieController::class, 'index'])->name('categories.index');
// Route::get('categories/{categorie}', [CategorieController::class, 'show'])->name('categories.show');

// // Routes protégées pour les catégories
// Route::middleware(['auth'])->group(function () {
//     Route::get('categories/create', [CategorieController::class, 'create'])->name('categories.create');
//     Route::post('categories', [CategorieController::class, 'store'])->name('categories.store');
//     Route::get('categories/{categorie}/edit', [CategorieController::class, 'edit'])->name('categories.edit');
//     Route::put('categories/{categorie}', [CategorieController::class, 'update'])->name('categories.update');
//     Route::delete('categories/{categorie}', [CategorieController::class, 'destroy'])->name('categories.destroy');
// });

// // Routes pour les rayons
// Route::get('rayons', [RayonController::class, 'index'])->name('rayons.index');
// Route::get('rayons/{rayon}', [RayonController::class, 'show'])->name('rayons.show');

// // Routes protégées pour les rayons
// Route::middleware(['auth'])->group(function () {
//     Route::get('rayons/create', [RayonController::class, 'create'])->name('rayons.create');
//     Route::post('rayons', [RayonController::class, 'store'])->name('rayons.store');
//     Route::get('rayons/{rayon}/edit', [RayonController::class, 'edit'])->name('rayons.edit');
//     Route::put('rayons/{rayon}', [RayonController::class, 'update'])->name('rayons.update');
//     Route::delete('rayons/{rayon}', [RayonController::class, 'destroy'])->name('rayons.destroy');
// });

// // Routes pour les livres
// Route::get('/livres', [LivreController::class, 'index'])->name('livres.index');
// Route::get('/livres/{livre}', [LivreController::class, 'show'])->name('livres.show');

// // Routes protégées pour les livres
// Route::middleware(['auth'])->group(function () {
//     // Route::get('/livres/create', [LivreController::class, 'create'])->name('livres.create');
//     Route::get('/livres/create', [LivreController::class, 'create'])->name('livres.create');
//     Route::post('/livres', [LivreController::class, 'store'])->name('livres.store');
//     Route::get('/livres/{livre}/edit', [LivreController::class, 'edit'])->name('livres.edit');
//     Route::put('/livres/{livre}', [LivreController::class, 'update'])->name('livres.update');
//     Route::delete('/livres/{livre}', [LivreController::class, 'destroy'])->name('livres.destroy');
// });


// // Routes d'authentification
// Route::get('/login', [AuthController::class, 'getLogin'])->name('auth.getLogin');
// Route::post('/login', [AuthController::class, 'postLogin'])->name('auth.postLogin');
// Route::get('/register', [AuthController::class, 'getRegister'])->name('auth.getRegister');
// Route::post('/register', [AuthController::class, 'postRegister'])->name('auth.postRegister');
// Route::get('/logout', [AuthController::class, 'logout'])->name('auth.logout');
 