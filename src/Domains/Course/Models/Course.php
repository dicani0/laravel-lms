<?php

namespace Domains\Course\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    use HasFactory;

    protected $fillable = [
        "name",
        "description",
        "author_id",
        "starts_at",
        "ends_at",
        "published_at",
    ];
}
