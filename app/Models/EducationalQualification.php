<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EducationalQualification extends Model
{
    use HasFactory;

    protected $table = 'educational_qualifications';
    protected $primarykey = 'id';
    protected $fillable = ['user_id','qualification','institute_name','description','started_date','end_date'];

    public function users(){
        return $this->belongsTo(User::class);
    }
}
