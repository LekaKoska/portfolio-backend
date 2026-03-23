<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TechnicalSkills extends Model
{
    const string TABLE = "technical_skills";
    protected $table = self::TABLE;
    protected $fillable = ["name"]; 
}
