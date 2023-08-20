<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Specialty extends Model
{
    use HasFactory;

    public function getPublishedAtAttribute(){
        return $this->created_at->format('d/m/Y');
    }

    // RELACION UNO A MUCHOS
    // **********************************

    public function registrations()
    {
        return $this->hasMany(Registration::class);
    }

    public function students()
    {
        return $this->hasMany(Student::class, 'incomeSpecialty_id');
    }
}
