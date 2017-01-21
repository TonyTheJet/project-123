<?php
/**
 * Created by PhpStorm.
 * User: tanderson
 * Date: 1/20/17
 * Time: 8:13 AM
 */

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class CheckIsAdmin
{
    /**
     * @param $request
     * @param Closure $next
     * @return mixed
     */
    public function handle($request, Closure $next){


        if (!Auth::user()['is_admin']):
            return redirect('/account');
        endif;

        return $next($request);
    }
}