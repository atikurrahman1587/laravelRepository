<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;
    private static $post;
    public static function saveBasicInfo($post, $request): object
    {
        $post->title = $request->title;
        $post->description = $request->description;
        $post->save();
        return $post;
    }
    public static function newPost($request): object
    {
        return self::saveBasicInfo(new self(), $request);
    }
    public static function updatePost($request, $id): object
    {
        return self::saveBasicInfo(self::query()->find($id), $request);
    }
}
