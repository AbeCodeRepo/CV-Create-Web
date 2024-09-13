<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PersonalDetail extends Model
{
    use HasFactory;

    protected $table = 'personal_details';
    protected $primarykey = 'id';
    protected $fillable = ['user_id', 'name', 'designation', 'cv_img', 'address', 'marital_status', 'gender', 'email', 'mobile_no', 'birthday'];

    public function users(){
        return $this->belongsTo(User::class);
    }
}
