<?php

namespace Fantata\LaravelSimpleBlog\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{

  use HasFactory;

  protected $guarded = [];
  protected $table = 'fantata_blog_posts';

    public function author()
    {
        return $this->belongsTo(config('auth.providers.users.model'));
    }

}
