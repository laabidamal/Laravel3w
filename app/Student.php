<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Student extends Model
{
   use SoftDeletes;

    /**
     * The attributes that are mass assignable.
     *
     * @var array


     */
    protected $table='student';
    protected $fillable = [
        'email', 'name','password','classroom_id'
    ];
    public function classroom()    

{        


    return $this->hasOne('App\Classroom', 'id', 'classroom_id');  

      }
}
