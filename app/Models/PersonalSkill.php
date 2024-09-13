<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PersonalSkill extends Model
{
    use HasFactory;

    protected $table = 'personal_skills';
    protected $primarykey = 'id';
    protected $fillable = ['user_id','personal_skill'];

    public function users(){
        return $this->belongsTo(User::class);
    }
}
