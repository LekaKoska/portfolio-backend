<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Education extends Model
{
    const string TABLE = "education";
    protected $table = self::TABLE;
    protected $fillable = ["school_name", "course", "description"];
}
