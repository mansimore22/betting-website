<?php

namespace App\Http\Controllers;

use id;
use App\Models\Deposit;
use App\Models\Withdrawal;
use Illuminate\Http\Request;

class WithdrawalController extends Controller
{
    // Show the withdrawal form
    // public function showWithdrawForm()
    // {
    //     // Assuming you want to use `otp_id` to identify the user
    //     $otpId = auth()->id(); // Replace this with the correct logic to fetch `otp_id` if needed

    //     // Calculate the total deposited coins for the user
    //     $depositedCoins = Deposit::where('deposite_id', $otpId)->sum('deposit_coins');

    //     // Calculate the total withdrawn coins for the user
    //     $withdrawnCoins = Withdrawal::where('deposite_id', $otpId)->sum('withdraw_coins');

    //     // Calculate the available balance
    //     $availableBalance = $depositedCoins - $withdrawnCoins;

    //     // Return the view with the calculated balance
    //     return view('withdraw', compact('availableBalance'));
    // }

    // Process the withdrawal request
    // public function withdraw(Request $request)
    // {
    //     // Validate the withdrawal amount
    //     $request->validate([
    //         'withdraw_coins' => 'required|numeric|min:100',
    //     ]);

    //     // Get the user ID (or OTP ID if applicable)
    //     $otpId = auth()->id(); // Replace with your `otp_id` logic

    //     // Calculate the available balance
    //     $depositedCoins = Deposit::where('deposite_id', $otpId)->sum('deposit_coins');
    //     $withdrawnCoins = Withdrawal::where('deposite_id', $otpId)->sum('withdraw_coins');
    //     $availableBalance = $depositedCoins - $withdrawnCoins;

    //     // Check if the user has sufficient balance
    //     if ($request->withdraw_coins > $availableBalance) {
    //         return back()->withErrors(['error' => 'Insufficient balance for withdrawal.']);
    //     }

    //     // Create a new withdrawal record
    //     Withdrawal::create([
    //         'deposite_id' => $otpId,
    //         'withdraw_coins' => $request->withdraw_coins,
    //     ]);

    //     return back()->with('success', 'Withdrawal successful!');
    // }
}
