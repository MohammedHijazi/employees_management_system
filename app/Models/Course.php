<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    use HasFactory;

    protected $fillable=[
        'employee_id',
        'name',
        'place',
        'details',
        'start_date',
        'end_date'
    ];

    protected $hidden=[
        'created_at','updated_at'
    ];

    public function employee(){
        return $this->belongsTo(Employee::class,'employee_id','employee_id');
    }
}
