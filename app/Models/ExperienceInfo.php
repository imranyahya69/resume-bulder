<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ExperienceInfo extends Model
{
    use HasFactory;
    protected $table = 'experience_infos';


    public function user(){
        return $this->belongsTo('App\Models\User','user_id');
    }
}
