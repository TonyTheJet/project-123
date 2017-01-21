<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;
use App\Models\Eloquent\Seller;

class CheckIsSeller
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        $seller = new Seller();
        if (!$seller->newQuery()->where('user_id', '=', Auth::user()['attributes']['id'])->applyScopes()->exists()):
            return redirect('/account/become-a-seller');
        endif;

        return $next($request);
    }
}
