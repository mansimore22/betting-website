<?php

namespace App\Http\Controllers;

use App\Models\Otp;
use App\Models\CommonModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator; // Import Validator
use Illuminate\Support\Facades\Session; // Import Session
use Illuminate\Support\Facades\Log; // Import Log for logging messages

class LoginController extends Controller
{
    public function create()
    {
        return view('client.inc.login');
    }

    public function sendOtp(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:255',
            'country_code' => 'required|string',
            'mobile_number' => 'required|string|max:10',
            'via' => 'required|in:sms,whatsapp',
        ]);

        if ($validator->fails()) {
            return response()->json([
                'success' => false,
                'errors' => $validator->errors(),
            ], 422);
        }

        // Generate a 6-digit OTP
        $otp = rand(100000, 999999);
        $expiresAt = now()->addMinutes(5);

        // Store the OTP in the database
        Otp::create([
            'name' => $request->name,
            'mobile_number' => $request->mobile_number,
            'country_code' => $request->country_code,
            'otp' => $otp,
            'expires_at' => $expiresAt,
        ]);

        Log::info("OTP sent via {$request->via}: {$otp}");

        // Simulate sending OTP
        if ($request->via == 'sms') {
            Log::info("Sending OTP to {$request->country_code}{$request->mobile_number} via SMS: {$otp}");
        } else if ($request->via == 'whatsapp') {
            Log::info("Sending OTP to {$request->country_code}{$request->mobile_number} via WhatsApp: {$otp}");
        }

        return response()->json([
            'success' => true,
            'message' => 'OTP sent successfully.',
        ]);
    }

}
