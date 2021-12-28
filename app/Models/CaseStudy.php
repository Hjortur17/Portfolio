<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CaseStudy extends Model
{
    public function tools()
    {
        return $this->belongsToMany(Tool::class);
    }
}
