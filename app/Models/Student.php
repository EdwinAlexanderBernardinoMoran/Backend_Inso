<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;

    public function getPublishedAtAttribute(){
        return $this->created_at->format('d/m/Y');
    }

    // RELACION UNO A MUCHOS (INVERSA)
    // **********************************
    public function nationality(){
        return $this->belongsTo(Nationality::class, 'nacionality_id');
    }

    public function departmentBirth()
    {
        return $this->belongsTo(Department::class, 'departmentBirth_id');
    }

    public function  municipalityBirth()
    {
        return $this->belongsTo(Municipality::class, 'municipalityBirth_id');
    }

    public function specialty()
    {
        return $this->belongsTo(Specialty::class, 'incomeSpecialty_id');
    }

    public function shoolCenter()
    {
        return $this->belongsTo(SchoolCenter::class, 'providencisShoolCenters_id');
    }

    public function zone()
    {
        return $this->belongsTo(Zone::class, 'zone_id');
    }

    public function departmentResidence()
    {
        return $this->belongsTo(Department::class, 'departmentResidence_id');
    }

    public function municipalityResident()
    {
        return $this->belongsTo(Municipality::class, 'municipalityResidence_id');
    }

    public function cantonResidence()
    {
        return $this->belongsTo(Canton::class, 'cantonResidence_id');
    }

    public function hamletResidence()
    {
        return $this->belongsTo(Hamlet::class, 'hamletResidence_id');
    }

    public function zoneReponsible()
    {
        return $this->belongsTo(Zone::class, 'zoneReponsible_id');
    }

    public function departmentReponsible()
    {
        return $this->belongsTo(Department::class, 'departmentReponsible_id');
    }

    public function municipalityReponsible()
    {
        return $this->belongsTo(Municipality::class, 'municipalityReponsible_id');
    }

    public function cantonReponsible()
    {
        return $this->belongsTo(Canton::class, 'cantonReponsible_id');
    }

    public function hamletReponsible()
    {
        return $this->belongsTo(Hamlet::class, 'hamletReponsible_id');
    }

    public function teacher()
    {
        return $this->belongsTo(Teacher::class, 'teacher_id');
    }

    // RELACION UNO A MUCHOS
    // **********************************

    public function attendances()
    {
        return $this->hasMany(Attendance::class);
    }

    public function registrations()
    {
        return $this->hasMany(Registration::class, 'student_id');
    }
}
