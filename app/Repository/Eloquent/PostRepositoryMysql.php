<?php

namespace App\Repository\Eloquent;

use App\Models\Post;
use App\Repository\Contacts\PostRepositoryInterface;

class PostRepositoryMysql implements PostRepositoryInterface
{
    public function index(): object
    {
        // TODO: Implement index() method.
        return Post::all();
    }
    public function store($request): object
    {
        // TODO: Implement store() method.
        return Post::newPost($request);
    }

    public function edit(int $id): object
    {
        // TODO: Implement edit() method.
        return Post::query()->find($id);
    }

    public function update(int $id, $request): object
    {
        // TODO: Implement update() method.
        return Post::updatePost($request, $id);
    }

    public function destroy(int $id): void
    {
        // TODO: Implement destroy() method.
        Post::destroy($id);
    }
}