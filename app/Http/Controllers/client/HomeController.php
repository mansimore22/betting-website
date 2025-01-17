<?php

namespace App\Http\Controllers\client;

use App\Models\Banner;
use App\Http\Controllers\Controller;


class HomeController extends Controller
{
    public function index()
    {
        // Fetch all banners from the database
        $banners = Banner::all();
        // Pass the banners to the view
        return view('client.pages.home', compact('banners'));
    }
    public function id()
    {
        return view("client.pages.id");
    }
    public function profile()
    {
        return view("client.pages.profile");
    }
    public function withdrawal()
    {
        return view("client.pages.withdrawal");
    }
    public function passbook()
    {
        return view("client.pages.passbook");
    }
}
