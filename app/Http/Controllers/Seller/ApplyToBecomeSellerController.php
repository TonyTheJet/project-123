<?php
/**
 * Created by PhpStorm.
 * User: tanderson
 * Date: 1/20/17
 * Time: 6:16 AM
 */

namespace App\Http\Controllers\Seller;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\User;

class ApplyToBecomeSellerController extends Controller
{

    /**
     * processes the application to become a seller
     *
     * @param Request $request
     */
    public function apply(Request $request){
        //print_r($request);

        return null;
    }

    public function showApplicationForm(Request $request){
        return view('account.seller.become-a-seller', ['title' => 'Become a Seller']);
    }
}