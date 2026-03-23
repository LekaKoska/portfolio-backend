<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Interests extends Model
{
    const string TABLE = "interests";
    protected $table = self::TABLE;
    protected $fillable = ["name"];
}
