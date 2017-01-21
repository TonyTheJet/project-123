<?php
/**
 * Created by PhpStorm.
 * User: tanderson
 * Date: 1/19/17
 * Time: 1:56 PM
 */

namespace App;


abstract class CreditCardPaymentGateway
{
    //properties
    protected $credit_card = null;
    protected $errors_arr = [];
    protected $success = false;
    protected $transaction_id = null;

    public function __construct(CreditCard $credit_card){
        $this->credit_card = $credit_card;
    }

    abstract public function charge_card(float $amount);
    abstract public function refund_card(float $amount, string $transaction_id);
}