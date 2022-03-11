<?php

namespace Database\Factories;

use App\Models\Comment;
use App\Models\Post;
use App\Models\Video;
use Illuminate\Database\Eloquent\Factories\Factory;

class CommentFactory extends Factory
{
    protected $model = Comment::class;

    public function definition(): array
    {
        return [
            'body'             => $this->faker->sentence,
            'commentable_id'   => $this->faker->randomDigitNotNull,
            'commentable_type' => Post::TABLE,
//          'commentable_type' => Video::TABLE,
        ];
    }
}
