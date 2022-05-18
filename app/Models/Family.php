<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Family extends Model
{
    use HasFactory;

    protected $fillable=[
      'employee_id',
      'full_name',
      'id_number',
      'relation',
      'birth_date',
      'social_status',
      'study',
      'works',
      'id_image_path'
    ];

    protected $hidden=[
        'created_at','updates_at'
    ];

    public function employee(){
        return $this->belongsTo(Employee::class);
    }
}
