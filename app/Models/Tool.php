<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tool extends Model
{
    use HasFactory;

    public function caseStudies()
    {
        return $this->belongsToMany(CaseStudy::class);
    }
}
