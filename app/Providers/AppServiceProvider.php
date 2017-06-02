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
            'user'         => 'App\Model\User',
            'organization' => 'App\Model\Organization',
            'project'      => 'App\Model\Project',
            'user_story'   => 'App\Model\UserStory',
            'task'         => 'App\Model\Task',
            'sprint'       => 'App\Model\Sprint',
            'tag'          => 'App\Model\Tag',
            'comment'      => 'App\Model\Comment',
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
