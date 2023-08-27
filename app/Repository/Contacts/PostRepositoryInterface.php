<?php

namespace App\Repository\Contacts;

interface PostRepositoryInterface
{
    public function index();
    public function store($request);
    public function edit(int $id);
    public function update(int $id, $request);
    public function destroy(int $id);
}