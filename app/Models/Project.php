<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    use HasFactory;

    protected $fillable = ["title", "link", "date", "description"];

    protected function getDateAttribute($value) {
        return date('d/m/Y', strtotime($value));
    }

}