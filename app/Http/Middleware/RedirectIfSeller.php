<?php
/**
 * Created by PhpStorm.
 * User: tanderson
 * Date: 1/20/17
 * Time: 7:44 AM
 */

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;
use App\Models\Eloquent\Seller;
class RedirectIfSeller
{

    /**
     * @param Request $request
     * @param Closure $next
     * @return mixed
     */
    public function handle($request, Closure $next){

        //check if the user is a seller, and if so, hold the phones!
        $seller = new Seller();
        if ($seller->newQuery()->where('user_id', '=', Auth::user()['attributes']['id'])->applyScopes()->exists()):
            return redirect('/account/seller');
        endif;

        return $next($request);
    }
}