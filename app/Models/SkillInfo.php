<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SkillInfo extends Model
{
    use HasFactory;
    protected $table = 'skill_infos';


    public function user(){
        return $this->belongsTo('App\Models\User','user_id');
    }
}
