<?php

namespace App\Providers;

use Illuminate\Database\Eloquent\Relations\Relation;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Relation::morphMap([
            'User'         => 'App\Models\User',
            'Organization' => 'App\Models\Organization',
            'Project'      => 'App\Models\Project',
            'User_story'   => 'App\Models\UserStory',
            'Task'         => 'App\Models\Task',
            'Sprint'       => 'App\Models\Sprint',
            'Tag'          => 'App\Models\Tag',
            'Comment'      => 'App\Models\Comment',
        ]);
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
