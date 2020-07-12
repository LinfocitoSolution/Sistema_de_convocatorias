<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Curriculum extends Model
{
    public $table='curriculums';    
    protected $fillable = [
        'id',
        'user_id',
        'name',
    ];
    public function user()
    {
        return $this->belongsTo('User');
    }
}
