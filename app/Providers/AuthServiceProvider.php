<?php

namespace App\Providers;

use App\Policies\UserPolicy;
use App\Policies\ProductPolicy;
use App\User;
use App\Product;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Gate;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The policy mappings for the application.
     *
     * @var array
     */
    protected $policies = [
        User::class => UserPolicy::class,
        Product::class => ProductPolicy::class, 
    ];

    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot()
    {
        $this->registerPolicies();

        Gate::define('can-destroy', 'App\Policies\ProductPolicy@forceDelete');
        Gate::define('can-restore', 'App\Policies\ProductPolicy@restore');
    }
}
