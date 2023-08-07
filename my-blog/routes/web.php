<?php
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\ChirpController;
use Illuminate\Support\Facades\Route;


// Route::get('/', function () {
//     return view('welcome');
// });





Route::get('/', [PostController::class, 'index'])
    ->name('posts.index');
    
Route::get('/posts/show{post}', [PostController::class, 'show'])
->name('posts.show');

Route::get('/dashboard', function () {
    return view('/dashboard');
})
->middleware(['auth', 'verified'])->name('dashboard');

  


Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});
// La route-ressource => Les routes "post.*"

// route('posts.show', ['post' => $post->id]);
Route::resource("posts", PostController::class)
->only([ 'store', 'edit', 'create','update', 'destroy'])
    ->middleware(['auth', 'verified']);


Route::resource('chirps', ChirpController::class)
->only(['index', 'edit', 'update', 'destroy'])
    ->middleware(['auth', 'verified']);
Route::post('/posts/{post}/chirps', [ChirpController::class, 'store'])->name('chirps.store');


require __DIR__.'/auth.php';