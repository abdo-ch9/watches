<?php

namespace App\Http\Controllers;

use App\Models\watch;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class WatchController extends Controller
{
    public function index()
    {
        $watches = Watch::all();
        return view("watches.index", compact("watches")); // Corrected way to pass data
    }

    public function create()
    {
        return view("watches.create"); // Updated to remove unnecessary variable
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255', // Ensure name is provided and is a string
            'description' => 'nullable|string',
            'price' => 'required|numeric|min:0',  // Ensure price is provided and is a positive number
            'stock' => 'required|integer|min:0',  // Ensure stock is a positive integer
            'image' => 'nullable|image|max:2048', // Ensure image is a valid file if provided
        ]);

        // Handle the image upload
        if ($request->hasFile('image')) {
            
            $imagePath = $request->file('image')->store('images', 'public'); 
            $test =  Storage::url($imagePath); // Store the image in the public/images directory
           // Store the image in the public/images directory
        }

        // Create a new watch record
        $watch = Watch::create(array_merge($request->all(), ['image' => $test ?? null]));

        // Redirect to the watches index page with a success message
        return redirect()->route('watches.index')->with('success', 'Watch added successfully!');
    }

    public function show($id)
    {
        $watch = Watch::findOrFail($id);
        return view("watches.show", compact("watch")); // Return watch details to view
    }

    public function edit($id)
    {
        $watch = Watch::findOrFail($id);
        return view("watches.edit", compact("watch")); // Return edit form with watch data
    }

    public function update(Request $request, $id)
    {
        $watch = Watch::findOrFail($id);
        $watch->update($request->all());
        return redirect()->route('watches.index')->with('success', 'Watch updated successfully!');
    }

    public function destroy($id)
    {
        $watch = Watch::findOrFail($id);
        $watch->delete();
        return redirect()->route('watches.index')->with('success', 'Watch deleted successfully!');
    }
}
