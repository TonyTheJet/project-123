<?php

/**
 * Created by PhpStorm.
 * User: tanderson
 * Date: 1/22/17
 * Time: 2:21 PM
 */


    namespace App\Models\Mail;

    use App\Models\Eloquent\CreditsOrder;
    use Illuminate\Bus\Queueable;
    use Illuminate\Mail\Mailable;
    use Illuminate\Queue\SerializesModels;



    class CreditsOrderReceipt extends Mailable{

        //properties
        protected $credits_order;

        public function __construct(CreditsOrder $order){
            $this->credits_order = $order;
        }

        public function build(){

            //STUB

            return $this->view('mail.credits-order-receipt');
        }
    }