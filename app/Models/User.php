<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
    ];

    public function personal_details()
    {
        return $this->hasOne(PersonalDetail::class, 'user_id','id');
    }

    public function about_yous()
    {
        return $this->hasOne(AboutYou::class, 'user_id','id');
    }

    public function work_experiences()
    {
        return $this->hasMany(WorkExperience::class, 'user_id','id');
    }

    public function educational_qualifications()
    {
        return $this->hasMany(EducationalQualification::class, 'user_id','id');
    }

    public function languages()
    {
        return $this->hasMany(Language::class, 'user_id','id');
    }

    public function personal_skills()
    {
        return $this->hasMany(PersonalSkill::class, 'user_id','id');
    }

    public function tech_skills()
    {
        return $this->hasMany(TechSkill::class, 'user_id','id');
    }

    public function interests()
    {
        return $this->hasMany(Interest::class, 'user_id','id');
    }

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
}
