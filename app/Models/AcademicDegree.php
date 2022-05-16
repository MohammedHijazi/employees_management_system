<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AcademicDegree extends Model
{
    use HasFactory;

    protected $table ='academic_degrees';

    protected $fillable=[
        'educational_qualification',
        'college',
        'college_major',
        'graduation_date',
        'details'
    ];

    protected $hidden=[
        'created_at','updated_at'
    ];

    public function employee(){
        return $this->belongsTo(Employee::class);
    }

}
