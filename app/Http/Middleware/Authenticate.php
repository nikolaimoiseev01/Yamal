<?php

namespace App\Http\Middleware;

use Illuminate\Auth\Middleware\Authenticate as Middleware;
use Illuminate\Http\Request;
use Closure;

class Authenticate extends Middleware
{
    /**
     * Get the path the user should be redirected to when they are not authenticated.
     */

    public function handle($request, Closure $next, ...$guards)
    {
        // Пропускаем авторизацию для загрузки файлов Livewire
        if ($request->is('livewire/upload-file')) {
            return $next($request);
        }

        return parent::handle($request, $next, ...$guards);
    }

    protected function redirectTo(Request $request): ?string
    {
        return $request->expectsJson() ? null : route('login');
    }
}
