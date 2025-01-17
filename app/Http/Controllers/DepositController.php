<?php

namespace App\Http\Controllers;

use App\Models\Deposit;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;


class DepositController extends Controller
{
    public function store(Request $request)
    {
        // Validate inputs
        $validated = $request->validate([
            'deposit_coins' => 'required|numeric|min:500',
            'screenshot_path' => 'required|image|mimes:jpeg,png,jpg|max:2048',
        ]);

        try {
            // Store screenshot
            $screenshotPath = $request->file('screenshot_path')->store('client/uploads/', 'public');

            // Log screenshot path for debugging
            Log::info('Screenshot uploaded to: ' . $screenshotPath);

            // Save deposit record
            Deposit::create([

                'deposit_coins' => $validated['deposit_coins'],
                'screenshot_path' => $screenshotPath,
            ]);

            return response()->json(['success' => true, 'message' => 'Deposit submitted successfully.']);
        } catch (\Exception $e) {
            return response()->json(['success' => false, 'message' => 'An error occurred: ' . $e->getMessage()]);
        }
    }



}


