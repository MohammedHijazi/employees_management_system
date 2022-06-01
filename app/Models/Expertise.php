<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Expertise extends Model
{
    use HasFactory;

    protected $fillable=[
        'employee_id',
        'place_of_work',
        'job_title',
        'salary',
         'currency',
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
