<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class WorkExperience extends Model
{
    const string TABLE = "work_experience";
    protected $table = self::TABLE;
    protected $fillable = [
        "company_name", "project_link", "job_desc",
        "start_date", "end_date", "is_current"
    ];
}
