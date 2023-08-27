<?php

namespace App\Repository;
use App\Repository\Contacts\PostRepositoryInterface;
use App\Repository\Eloquent\PostRepositoryMysql;
use Illuminate\Support\ServiceProvider;

class RepositoryServiceProvider extends ServiceProvider
{
    public function register()
    {
        $this->app->bind(
            PostRepositoryInterface::class,
            PostRepositoryMysql::class,
        );
    }
}