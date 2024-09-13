<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class WorkExperience extends Model
{
    use HasFactory;

    protected $table = 'work_experiences';
    protected $primarykey = 'id';
    protected $fillable = ['user_id','designation','company_name','description','started_date','end_date'];

    public function users(){
        return $this->belongsTo(User::class);
    }
}
