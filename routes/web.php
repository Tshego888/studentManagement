<?php

use App\Models\Teachers;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TestController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\TeachersController;

Route::get('home', function(){
    //$name = 'tester2';
    //$email = 'tester2@gmail.com';
    //return view('aboutUs')->with('name', $name)->with('email', $email);

    //return view('aboutUs', compact('name', 'email'));

    //return view('aboutUs', ['name'=>$name, 'email'=>$email]);

    return view('home');
});

/*Route::view('contact-us', 'contactUs');

Route::controller(StudentController::class)->group(function(){
    Route::get('students/{id}/{name}', 'replace');
    Route::get('teachers', 'replace');
});

Route::get('invoke', TestController::class); */


// Route::get('teachers', function(){
//     return Teachers::all();
// });


// Route::get('teachers', [TeachersController::class, 'getAll']);
// Route::get('add-teacher', [TeachersController::class, 'add']);
// Route::get('show-teacher/{id}', [TeachersController::class, 'show']);
// Route::get('update-teacher/{id}', [TeachersController::class, 'update']);
// Route::get('delete-teacher/{id}', [TeachersController::class, 'delete']);

Route::get('add-students', [StudentController::class, 'addData']);
Route::get('get-students', [StudentController::class, 'getData']);
Route::get('update-students', [StudentController::class, 'updateData']);
Route::get('delete-students', [StudentController::class, 'deleteData']);

Route::get('where-conditions', [StudentController::class, 'whereConditions']);

Route::get('queryScope', [StudentController::class, 'queryScope']);
Route::get('secondQueryScope', [StudentController::class, 'secondQueryScope']);

Route::prefix('student')->controller(StudentController::class)->group(function(){
    Route::get('/','index');
    Route::view('add', 'students.add');
    Route::post('create', 'create');
    Route::get('edit/{id}', 'edit');
    Route::post('update/{id}', 'update');
    Route::delete('delete/{id}', 'destroy');
});





