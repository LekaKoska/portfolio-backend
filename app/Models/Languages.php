<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Languages extends Model
{
    const string TABLE = "languages";
    protected $table = self::TABLE;
    protected $fillable = ["name"];
}
