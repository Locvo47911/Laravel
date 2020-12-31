<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Comment;
use App\Post;
use App\User;
use Faker\Generator as Faker;

$factory->define(Comment::class, function (Faker $faker) {
	$listUserID = User::pluck('id');
	$listPostID = Post::pluck('id');
	return [
		'content' => $faker->text,
        'user_id' => $faker->randomElement($listUserID),
        'post_id' => $faker->randomElement($listPostID)
	];
});
