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

use App\Models\Product;

use App\Models\Employee;
use App\Models\Buyer;
use App\Models\Item;
use App\Models\Order;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;


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



// -------------------------------------------------------------------------

Route::get('/', function () {
    return view('welcome');
});


Route::get('/products', function () {
    return Product::all();
});

// 1️⃣ Only active employees
Route::get('/employees/active', function () {
    return Employee::active()->get();
});

// 2️⃣ Active employees from IT department
Route::get('/employees/it', function () {
    return Employee::active()
        ->department('HR')
        ->get();
});

// 3️⃣ Active employees with high salary
Route::get('/employees/high-salary', function () {
    return Employee::active()
        ->highSalary(50000)
        ->get();
});

use App\Models\Student;

// Route::get('/students/{course}', function($course){
//     // Get all students of the given course (any status)
//     $students = Student::whereHas('course', function($q) use ($course){
//         $q->where('name', $course);
//     })->get();

//     return $students; // returns JSON in browser
// });

Route::get('/check-students', function () {
    return Student::with('course')->get();
});
Route::get('/students/high-marks/{marks}', function ($marks) {
    return Student::highMarks($marks)->get();
});
use App\Models\Category;

Route::get('/categories', function () {
    return Category::with('posts')->get();
});

// -------------------------------

Route::get('/register', fn () => view('register'));

Route::post('/register', function (Request $request) {
    Buyer::create([
        'name' => $request->name,
        'email' => $request->email,
        'password' => Hash::make($request->password),
    ]);

    return redirect('/login');
});
Route::get('/login', fn () => view('login'));

Route::post('/login', function (Request $request) {
    $buyer = Buyer::where('email', $request->email)->first();

    if ($buyer && Hash::check($request->password, $buyer->password)) {
        session(['buyer_id' => $buyer->id]);
        return redirect('/items');
    }

    return back()->with('error', 'Invalid login');
});
Route::get('/logout', function () {
    session()->forget('buyer_id');
    return redirect('/login');
});
Route::get('/items', function () {
    if (!session('buyer_id')) return redirect('/login');

    return view('items', [
        'items' => Item::with('category')->get()
    ]);
});
Route::post('/buy/{item}', function (Item $item) {
    if (!session('buyer_id')) return redirect('/login');

    Order::create([
        'buyer_id' => session('buyer_id'),
        'item_id' => $item->id,
    ]);

    return back()->with('success', 'Order placed!');
});

Route::get('/orders', function () {
    if (!session('buyer_id')) return redirect('/login');

    $orders = Order::with('item.category')
        ->where('buyer_id', session('buyer_id'))
        ->get();

    return view('orders', compact('orders'));
});


?>
