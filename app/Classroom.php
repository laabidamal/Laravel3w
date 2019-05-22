<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Classroom extends Model
{


protected $table="classroom";
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'title', 'photo'
    ]; 

public function students()

    {

        return $this->hasMany('App\Student','classroom_id', 'id');

    }

    public function classroom()    

    {        


    return $this->hasOne('App\Classroom', 'id', 'classroom_id');  

      }



}
