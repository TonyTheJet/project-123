<?php
/**
 * Created by PhpStorm.
 * User: bulga
 * Date: 1/29/2017
 * Time: 4:35 PM
 */

namespace App\Http\Controllers\Seller;

use App\Models\Eloquent\DigitalProduct;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Eloquent\DigitalProductType;

class SubmitProductController extends Controller
{

    /**
     * displays the submission form
     * @param DigitalProduct|null $product
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function showSubmissionForm(DigitalProduct $product = null){

        $product_types = DigitalProductType::all()->where('active', true);

        return view('account.seller.products.submit-product', ['product' => $product, 'product_types' => $product_types, 'title' => 'Submit New Product']);
    }

    /**
     * @param Request $request
     */
    public function submit(Request $request){
        print_r($request->all());
        exit();
    }
}