<?php

namespace App\Providers;

use App\Models\Product;
use App\Models\User;
use App\Policies\ProductPolicy;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Facades\Log;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;

class AuthServiceProvider extends ServiceProvider
{
    protected $policies = [
        Product::class => ProductPolicy::class,
    ];

    public function boot(): void
    {
        $this->registerPolicies();

        // Define gate for admin panel access
        Gate::define('access-admin-panel', function (User $user) {
            if ($user->is_admin) {
                return true;
            }
            
            Log::warning('Unauthorized access attempt to admin panel by user: ' . $user->id);
            return false;
        });
    }
}