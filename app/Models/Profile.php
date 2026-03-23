<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    const string TABLE = "profile";
    protected $table = self::TABLE;
    protected $fillable = [
        "name", "title", "city", "about_me",
        "profile_img", "cv_pdf", "github_link",
        "gmail", "linkedin_link"
    ];
}
