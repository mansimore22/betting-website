<?php

namespace App\Http\Controllers;

use App\Models\Banner;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class BannerController extends Controller
{
    public function index()
    {
        $banners = Banner::all();  // Fetch all banners from the database
        return view('admin.pages.banner.index', compact('banners'));  // Pass to a view
    }
    public function create()
    {
        return view('admin.pages.banner.banner');
    }

    // Store a new banner
    public function store(Request $request)
    {
        $request->validate([
            'image_path' => 'required|image|mimes:jpeg,png,jpg,gif,webp,png|', // Validation
        ]);

        // Define the custom upload path
        $destinationPath = public_path('admin/uploads'); // Public folder path
        $imageName = time() . '.' . $request->file('image_path')->getClientOriginalExtension();

        // Move the uploaded file to the destination folder
        $request->file('image_path')->move($destinationPath, $imageName);

        // Save the relative path in the database
        Banner::create([
            'image_path' => 'admin/uploads/' . $imageName,
        ]);

        return redirect()->route('banner.List')->with('success', 'Banner uploaded successfully!');
    }



    // Edit a banner
    public function edit($id)
    {
        $banner = Banner::findOrFail($id); // Fetch the banner by ID or throw a 404 if not found
        return view('admin.pages.banner.edit', compact('banner')); // Pass banner data to the view
    }

    // Update a banner
    public function update(Request $request, $id)
    {
        $request->validate([
            'image_path' => 'nullable|image|mimes:jpeg,png,jpg,gif,webp,png|',
        ]);

        $banner = Banner::findOrFail($id);

        if ($request->hasFile('image_path')) {
            if (file_exists(public_path($banner->image_path))) {
                unlink(public_path($banner->image_path)); // Delete the old image
            }

            $imageName = time() . '.' . $request->file('image_path')->getClientOriginalExtension();
            $request->file('image_path')->move(public_path('admin/uploads'), $imageName);

            $banner->image_path = 'admin/uploads/' . $imageName;
        }

        $banner->save();

        return redirect()->route('banner.List')->with('success', 'Banner updated successfully!');
    }

    public function destroy($id)
    {
        $banner = Banner::findOrFail($id);
        Storage::delete($banner->image_path);  // Delete the image from storage
        $banner->delete();  // Delete the banner record

        return redirect()->route('banner.List')->with('success', 'Banner deleted successfully!');
    }

}
