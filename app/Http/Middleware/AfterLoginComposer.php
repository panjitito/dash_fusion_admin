<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use App\Models\Menus;

class AfterLoginComposer
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        if($request->is('app/*')) {
            $menus = Menus::whereNull('parent_id')->with('children.children')->get();
            view()->share('menus', $menus);
        }

        return $next($request);
    }
}
