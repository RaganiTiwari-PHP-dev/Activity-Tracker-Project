<?php


use App\Http\Controllers\DashboardController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\ResourceController;
use App\Http\Controllers\TaskController;
use App\Http\Controllers\TeamController;

use Illuminate\Support\Facades\Route;
use App\Models\Student;
use App\Models\Post;

use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;
use SebastianBergmann\CodeCoverage\Report\Xml\Project;

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
//Route to view Binding
//Default Route
Route::get('/', function () {
    return view('pages.home');
});


Route::get('/index', [HomeController::class, 'index']);
Route::get('/gallery', [HomeController::class, 'gallery']);
Route::get('/contact', [HomeController::class, 'contact']);

//Type Hinting 
Route::get('/students', function (Student $student) {

    $StudentData = $student->getAll();
    return response()->json([
        'code' => 200,
        'message' => 'Student Record Found',
        'status' => true,
        'error' => false,
        'data' => $StudentData
    ]);
});

Route::get('/posts', function (Post $post) {

    $postData = $post->getAll();
    return response()->json([
        'code' => 200,
        'message' => 'Post Record Found',
        'status' => true,
        'error' => false,
        'data' => $postData
    ]);
});

// Register and Login Complete

Route::get('/register', [UserController::class, 'registerform']);
Route::post('/user/save', [UserController::class, 'save']);
Route::get('/login', [UserController::class, 'loginform']);
Route::post('/user/login', [UserController::class, 'login']);
Route::get('/user/logout', [UserController::class, 'logout']);
Route::get('/about', [UserController::class, 'aboutform']);
Route::get('/license', [UserController::class, 'licenseform']);
Route::get('/contact', [UserController::class, 'contactform']);


Route::get('/task/add', function () {
    return view('user/AddTask');
});


//Dashboard
Route::get('/dashboard/user', [DashboardController::class, 'index']);
Route::get('/dashboard/admin', [DashboardController::class, 'admin']);

//Admin Route
Route::prefix('/admin')->group(function(){
    Route::get('/manage-project/', [ProjectController::class, 'index']);
    Route::get('/manage-role/', [RoleController::class, 'index']);
    Route::get('/manage-role/add', [RoleController::class, 'create']);
    Route::post('/manage-role/add', [RoleController::class, 'store']);
    Route::delete('/manage-role/{id}',[RoleController::class,'destroy']);
    Route::get('/manage-role/edit/{id}',[RoleController::class,'edit']);
    Route::PUT('/manage-role/update/{id}',[RoleController::class,'update']);

    Route::get('/manage-resource/', [ResourceController::class, 'index']);
    Route::get('/manage-team/', [TeamController::class, 'index']);
    Route::get('/manage-task/', [TaskController::class, 'index']);
});
