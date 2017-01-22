<?php
/**
 * Created by PhpStorm.
 * User: tanderson
 * Date: 1/20/17
 * Time: 1:54 AM
 */

namespace App\Models\Payments;


class CreditCardPaymentGatewayAuthorizeNet extends CreditCardPaymentGateway
{
    public function charge_card(float $amount)
    {
        // TODO: Implement charge_card() method.
    }

    public function refund_card(float $amount, string $transaction_id)
    {
        // TODO: Implement refund_card() method.
    }
}