<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AboutYou extends Model
{
    use HasFactory;

    protected $table = 'about_yous';
    protected $primarykey = 'id';
    protected $fillable = ['user_id','about_you'];

    public function users(){
        return $this->belongsTo(User::class);
    }
}
