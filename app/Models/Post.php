<?php

namespace App\Models;

use App\helpers\Relationship\HasTags;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory, HasTags;

    const TABLE = 'posts';
    protected $fillable = [
        'body', 'title',
    ];

    public function comments(): \Illuminate\Database\Eloquent\Relations\MorphMany
    {
        return $this->morphMany(Comment::class, 'commentable');
    }
}
