<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;

    public static function search($search){

       return empty($search) ? static::query():
        static::query()->where('name','like','%' . $search . '%')
                       ->orWhere('email','like','%' . $search . '%');
     }

    public function shift(){
        return $this->hasOne(Shift::class,'id','shift_id');
    }
    public function campus(){
        return $this->hasOne(Campus::class,'id','campus_id');
    }
}