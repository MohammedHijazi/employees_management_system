<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    use HasFactory;

    protected $primaryKey = 'employee_id';

    public $incrementing = false;

    protected $fillable=[
        'employee_id',
        'first_name',
        'second_name',
        'third_name',
        'last_name',
        'specialization',
        'social_status',
        'gender',
        'mobile_number',
        'phone_number',
        'email',
        'hiring_date',
        'birth_date',
        'address',
        'image_path'
    ];


    public function getfullNameAttribute(){
        return $this->attributes['first_name'].' '.$this->attributes['second_name'].' '.$this->attributes['third_name'].' '.$this->attributes['last_name'];
    }


    public function academic_degrees(){
        return $this->hasMany(AcademicDegree::class);
    }

    public function courses(){
        return $this->hasMany(Course::class);
    }

    public function expertises(){
        return $this->hasMany(Expertise::class);
    }

    public function families(){
        return$this->hasMany(Family::class);
    }


}
