<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TechSkill extends Model
{
    use HasFactory;

    protected $table = 'tech_skills';
    protected $primarykey = 'id';
    protected $fillable = ['user_id','tech_skill'];

    public function users(){
        return $this->belongsTo(User::class);
    }
}
