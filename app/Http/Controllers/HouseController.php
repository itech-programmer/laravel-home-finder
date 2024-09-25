<?php

namespace App\Http\Controllers;

use App\Models\House;
use Illuminate\Http\Request;

class HouseController extends Controller
{
    public function search(Request $request)
    {
        $query = House::query();

        if ($request->filled('name')) {
            $query->where('name', 'like', '%' . $request->name . '%');
        }
        if ($request->filled('price')) {
            $query->where('price', $request->price);
        }
        if ($request->filled('bedrooms')) {
            $query->where('bedrooms', $request->bedrooms);
        }
        if ($request->filled('bathrooms')) {
            $query->where('bathrooms', $request->bathrooms);
        }
        if ($request->filled('storeys')) {
            $query->where('storeys', $request->storeys);
        }
        if ($request->filled('garages')) {
            $query->where('garages', $request->garages);
        }

        $houses = $query->get();
        return response()->json($houses);
    }
}
