<?php

use App\Enums\Category;
use Illuminate\Support\Facades\Route;
use App\Providers\AppServiceProvider;
use App\Http\Controllers\FileController;
use App\Http\Controllers\ImageController;
use App\Http\Controllers\UserController;

use App\Http\Controllers\StudentController;
use App\Http\Controllers\EmployeeController;
use App\Http\Requests\StorePostRequest;



// Route::get('/', function () {
//     return view('welcome');
// });
// Route::get('/home', function () {
//     return view('home');
// });
// Route::post('/abc', function () {
//     return view('welcome');
// });
// Route::view('/welcome', 'test');
 
// Route::view('/home', 'test', ['name' => 'Taylor']);

// Route::get('/user/{id}', function (string $id) {
//     return 'User '.$id;
// });

// Route::get('/posts/{post}/comments/{comment}', function (string $postId, string $commentId) {
//     return 'post is '.$postId.' comments is '.$commentId;
// });
// Route::get('/user/{name?}', function (?string $name = null) {
//     return $name;
// });

// Route::get('/user/{name?}', function (?string $name = 'John') {
//     return $name;
// });

// Route::get('/user/{name}', function (string $name) {
//    return $name;
// })->where('name', '[A-Za-z]+');

// Route::get('/search/{search}', function (string $search) {
//     return $search;
// })->where('search', '.*');
// Route::get('/user/profile', function () {
//    return 'hello';
// })->name('profile');
// Route::get('/profile', function () {
//   return redirect()->route('profile');
//   return to_route('profile');

// });
// Route::prefix('admin')->group(function () {
//     Route::get('/users', function () {
//         return 'heloo'; 
//     });
// });
// Route::get('/categories/{category}', function (Category $category) {
//     return $category->value;
// });
// Route::fallback(function () {
//     return "not found";
// });

// Route::get('/one', function () {
//     return 'first page';
// });
// Route::get('/two', function () {
//     return 'second page';
// });
// Route::redirect('/one', '/two',301);

// Route::get('/user/{id}', function (string $id) {
//     return $id;
// })->whereUlid('id');
// Route::get('/category/{category}', function (string $category) {
//     return $category;
// })->whereIn('category', ['movie', 'song', 'painting']);

// Route::get('/user/{id}', function ($id) {
//     return "User ID: $id";
// });

// Route::get('/search/{search}', function (string $search) {
//     return $search;
// })->where('search', '.*');
// Route::get('/go/{search}', function (string $search) {
//     return $search;
// });

// Route::controller(userController::class)->group(function(){
//     Route::get('/user',show);
// }

// Route::get('/upload', function () {
//     return view('upload');
// });

// Route::post('/upload', [FileController::class, 'store']);


// Route::get('/image/upload', [ImageController::class, 'create']);
// Route::post('/image/upload', [ImageController::class, 'store']);
// Route::get('/image/download/{filename}', [ImageController::class, 'download']);

// Route::get('/token', function (Request $request) {
//     return csrf_token();
// });

// Route::get('/token', function (Request $request) {
//     return csrf_token();
// });
// Route::get('/test',function(){
//     return view('test');
// });
// Route::post('/register', [UserControler::class, 'store'])->name('register.store');
// Route::get('/go',function(){
//     return view('register');
// } );

// Route::get('/student', function () {
//     return view('student');
// });

// Route::post('/student', [StudentController::class, 'store'])->name('student.store');

// Route::get('/user-form', [UserController::class, 'create']);
// Route::post('/user-form', [UserController::class, 'store'])->name('user.store');


// Route::get('/employee/create', [EmployeeController::class, 'create']);
// Route::post('/employee/store', [EmployeeController::class, 'store'])->name('employee.store');
// Route::post('/employee/store', [EmployeeController::class, 'store']);

Route::get('/student/create', function () {
    return view('components.create');
});
Route::get('/comp', function () {
    return view('comp');
});

Route::get('/user/{name?}', function (?string $name = 'John') {
    return $name;
});