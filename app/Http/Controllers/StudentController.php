<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use App\Http\Requests\StudentAddRequest;

class StudentController extends Controller
{
    public function index(Request $request){
        $students = Student::when($request->search, function($query) use ($request){
            return $query->whereAny([
                'name',
                'date_of_birth',
            ], 'like', '%' . $request->search . '%');
        })->paginate(10);
        return view('students.index', compact('students'));
    }

    public function create(StudentAddRequest $request){
        $imagePath=null;

        if($request->hasFile('image')){
            $imagePath=$request->file('image')->store('photos','public');
        }

        $student = new Student();
        $student->name = $request->name;
        $student->email = $request->email;
        $student->age = $request->age;
        $student->gender = $request->gender;
        $student->score = $request->score;
        $student->image = $imagePath;
        $student->save();

        return redirect('student');
    }

    public function edit($id){
        $student = Student::findOrFail($id);

        return view('students.edit', compact('student'));
    }

    public function update(Request $request, $id){
        $student = Student::findOrFail($id);
        $student->name = $request->name;
        $student->email = $request->email;
        $student->age = $request->age;
        $student->gender = $request->gender;
        $student->score = $request->score;
        $student->update();

        return redirect('student'); 
    }

    public function destroy(Request $request, $id){
        $student= Student::findOrFail($id);
        if($student->image){
            Storage::disk('public')->delete($student->image);
        }

        $student->delete();

        return redirect('student');
    }
}






