<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Teacher extends Model
{
    use HasFactory;

    public function getPublishedAtAttribute(){
        return $this->created_at->format('d/m/Y');
    }

    // RELACION UNO A MUCHOS (INVERSA)
    public function career()
    {
        return $this->belongsTo(Career::class);
    }

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function position()
    {
        return $this->belongsTo(Position::class);
    }
}
