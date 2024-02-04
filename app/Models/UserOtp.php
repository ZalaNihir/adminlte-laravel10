<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Twilio\Rest\Client;

class UserOtp extends Model
{
    use HasFactory;

    protected $fillable = ['user_id', 'otp', 'expire_at'];
    public function sendSMS($recieverNumber)
    {
        $message = 'HaMoj Login otp is ' . $this->otp . ' Will Expire in 10 mins Do not to share with anyone. ';
        try {
            $account_id = getenv('TWILIO_SID');
            $auth_token = getenv('TWILIO_TOKEN');
            $twilio_number = getenv('TWILIO_FROM');
            $client = new Client($account_id, $auth_token);
            $client->messages->create($recieverNumber, [
                'from' => $twilio_number,
                'body' => $message,
            ]);
            info('Login OTP sent successfully.');
        } catch (\Throwable $e) {
            info('Error:' . $e->getMessage());
        }
    }
}
