<?php

namespace App\Http\Controllers;

use App\Models\Teachers;
use Illuminate\Http\Request;

class TeachersController extends Controller
{
    public function getAll(){
        return Teachers::all();
    }

    public function add(){
        $item = new Teachers();
        $item->name = 'Tshegofatso';
        $item->save();
        return "Item added successfully";
    }

    public function show($id){
        $item = Teachers::findOrFail($id);

        return $item;
    }

    public function update($id){
        $item = Teachers::findOrFail($id);
        $item->name = 'updated name';
        $item->save();

        return 'Update was successfull';
    }

    public function delete($id){
        $item = Teachers::findOrFail($id);
        $item->delete();

        return 'Account successfully deleted';
    }
}
