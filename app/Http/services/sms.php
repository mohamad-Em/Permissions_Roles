<?php
namespace App\Http\services;

use App\Models\CustomerVerification;

class sms
{
    public function sendSMSCode($data)
    {
        $code = mt_rand(100000 , 999999);
        $data['code'] = $code;
        CustomerVerification::whereNotNull('customer_id')->where(['customer_id' => $data['customer_id']])->delete();
        CustomerVerification::create($data);
    }
}
