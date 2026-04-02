<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    const TABLE = "contact";
    protected $table = self::TABLE;
    protected $fillable = ["name", "email", "message"];
}
