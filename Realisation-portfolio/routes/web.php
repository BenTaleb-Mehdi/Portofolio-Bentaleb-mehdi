
<?php 
use App\Http\Controllers\pageController;
use App\Http\Controllers\ProjectController;

Route::get('/', [PageController::class, 'home'])->name('home');
Route::get('/about', [PageController::class, 'about'])->name('about');
Route::get('/project', [PageController::class, 'projects'])->name('project');
Route::get('/projects/{id}', [ProjectController::class, 'show'])->name('project.show');
