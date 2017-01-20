<?php
/**
 * Created by PhpStorm.
 * User: tanderson
 * Date: 1/20/17
 * Time: 7:44 AM
 */

namespace App\Http\Middleware;

use Closure;
class RedirectIfSeller
{

    /**
     * @param Request $request
     * @param Closure $next
     * @return mixed
     */
    public function handle($request, Closure $next){

        //check if the user is a seller, and if so, hold the phones!
        echo "checking if seller!\n";

        return $next($request);
    }
}