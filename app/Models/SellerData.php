<?php
/**
 * Created by PhpStorm.
 * User: tanderson
 * Date: 1/15/17
 * Time: 9:27 PM
 */

namespace App;


class SellerData
{

    //constants
    const DEFAULT_COMMISSION_RATE = .50;
    const DEFAULT_NUM_MONTHLY_SUBMISSIONS = 50;

    private $approval_date;
    private $commission_rate = self::DEFAULT_COMMISSION_RATE;
    private $num_monthly_submissions = self::DEFAULT_NUM_MONTHLY_SUBMISSIONS;
    private $seller_name;
}