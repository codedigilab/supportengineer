<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class LaptopController extends Controller
{
    public function showJsonData()
{

    $json = file_get_contents(public_path('laptop.json'));

    // Convert JSON to array
    $data = json_decode($json, true);

    return view("admin/laptop", compact("data"));
}
}






