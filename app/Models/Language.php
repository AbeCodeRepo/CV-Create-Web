<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Language extends Model
{
    use HasFactory;

    protected $table = 'languages';
    protected $primarykey = 'id';
    protected $fillable = ['user_id','language'];

    public function users(){
        return $this->belongsTo(User::class);
    }
}
