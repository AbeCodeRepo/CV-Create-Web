<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Interest extends Model
{
    use HasFactory;

    protected $table = 'interests';
    protected $primarykey = 'id';
    protected $fillable = ['user_id','interest'];

    public function users(){
        return $this->belongsTo(User::class);
    }
}
