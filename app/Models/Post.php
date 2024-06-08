<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;
    /* $table->text("description");
    $table->string("title");
    $table->string("image"); */

protected $fillable=[
"title",
"description",
"categories",
"show",
"tags",
"image"
];
}
