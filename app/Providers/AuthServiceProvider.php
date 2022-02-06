<?php

namespace App\Providers;

use App\Models\workspace;
use App\Policies\WorkspacePolicy;
use App\Models\board;
use App\Policies\BoardPolicy;
use App\Models\column;
use App\Policies\ColumnPolicy;
use App\Models\card;
use App\Policies\CardPolicy;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Gate;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The policy mappings for the application.
     *
     * @var array<class-string, class-string>
     */
    protected $policies = [
        Workspace::class => WorkspacePolicy::class,
        Board::class => BoardPolicy::class,
        Column::class => ColumnPolicy::class,
        Card::class => CardPolicy::class
    ];

    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot()
    {
        $this->registerPolicies();
    }
}
