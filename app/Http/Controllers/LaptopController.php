<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;

class LaptopController extends Controller
{
    public function showJsonData()
{

    $json = file_get_contents(storage_path('app/laptop.json'));

    // Convert JSON to array
    $data = json_decode($json, true);

    return view("admin/laptop", compact("data"));
}

// Display the


// Handle form submission
public function handleForm(Request $request)
{
    // Validation
    $request->validate([
        'EmployName' => 'required|string',
        'EmployNumber' => 'required|string'
    ]);

    // Read the existing JSON data from storage
    //$jsonPath = storage_path('public\laptop.json');
    //$jsonPath= storage_path(public_path('laptop.json'));
    $jsonPath = storage_path('app/laptop.json');
    $data = json_decode(File::get($jsonPath), true);

    // Append new data to the array
    $data[] = [
        'EmployName' => $request->input('EmployName'),
        'EmployNumber' => $request->input('EmployNumber')
    ];

    // Write the updated data back to the JSON file
    File::put($jsonPath, json_encode($data, JSON_PRETTY_PRINT));

    // Redirect or return a success message
    return redirect('/admin/laptop')->with('success', 'Data saved successfully!');
}
}






