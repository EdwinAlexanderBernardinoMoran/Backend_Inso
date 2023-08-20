<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Section extends Model
{
    use HasFactory;

    public function getPublishedAtAttribute(){
        return $this->created_at->format('d/m/Y');
    }

    public function registrations()
    {
        return $this->hasMany(Registration::class);
    }
}
