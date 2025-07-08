<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Student extends Model
{
    use HasFactory;
    use SoftDeletes;

    // protected $hidden = [
    //     'name',
    // ];

    public function scopeNdoda($query, $age){
        return $query->where('gender', 'm')->where('age', '>', $age);
    }

    public function scopeMedi($query, $age){
        return $query->where('gender', 'f')->where('age', '>', $age);
    }

}
