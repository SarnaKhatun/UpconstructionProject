<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Front\HomeController;

use App\Http\Controllers\Admin\DashboardController;

use App\Http\Controllers\Admin\SliderController;

use App\Http\Controllers\Admin\BlogCategoryController;

use App\Http\Controllers\Admin\BlogController;

use App\Http\Controllers\Admin\ServiceCategoryController;

use App\Http\Controllers\Admin\ServiceController;

use App\Http\Controllers\Admin\ProjectCategoryController;

use App\Http\Controllers\Admin\ProjectController;

use App\Http\Controllers\Admin\ConstructionController;






Route::get('/', [HomeController::class, 'home'])->name('/');
Route::get('/about', [HomeController::class, 'about'])->name('about');
Route::get('/contact', [HomeController::class, 'contact'])->name('contact');
Route::get('/service-details/{id}', [HomeController::class, 'serviceDetails'])->name('service.details');
Route::get('/project-details/{id}', [HomeController::class, 'projectDetails'])->name('project.details');
Route::get('/blog-details/{id}', [HomeController::class, 'blogDetails'])->name('blog.details');
Route::get('/service-all', [HomeController::class, 'serviceAll'])->name('service.all');
Route::get('/project-all', [HomeController::class, 'projectAll'])->name('project.all');
Route::get('/blog-all', [HomeController::class, 'blogAll'])->name('blog.all');

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard',[DashboardController::class, 'dashboard'])->name('dashboard');


    Route::get('/add-slider', [SliderController::class, 'addSlider'])->name('add-slider');
    Route::post('/new-slider', [SliderController::class, 'newSlider'])->name('new-slider');
    Route::post('/update-slider/{id}', [SliderController::class, 'updateSlider'])->name('update-slider');
    Route::get('/manage-slider', [SliderController::class, 'manageSlider'])->name('manage-slider');
    Route::get('/edit-slider/{id}', [SliderController::class, 'editSlider'])->name('edit-slider');
    Route::get('/delete-slider/{id}', [SliderController::class, 'deleteSlider'])->name('delete-slider');

    Route::resource('blogCategories', BlogCategoryController::class);
    Route::resource('serviceCategories', ServiceCategoryController::class);
    Route::resource('projectCategories', ProjectCategoryController::class);
    Route::resource('blogs', BlogController::class);
    Route::resource('services', ServiceController::class);
    Route::resource('projects', ProjectController::class);
    Route::resource('constructions', ConstructionController::class);
});
