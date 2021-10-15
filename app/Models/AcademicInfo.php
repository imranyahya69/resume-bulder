<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AcademicInfo extends Model
{
    use HasFactory;
    protected $table = 'academic_infos';

    public function user(){
        return $this->belongsTo('App\Models\User','user_id');
    }
}
