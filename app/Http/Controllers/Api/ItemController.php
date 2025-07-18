<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Item;
use Illuminate\Http\Request;

class ItemController extends Controller
{
      public function index()
    {
        return response()->json([
            'success' => true,
            'data' => Item::all(),
        ]);
    }

    public function show($id)
    {
        $item = Item::where('tyunit', $id)->first();

        if (!$item) {
            return response()->json(['success' => false, 'message' => 'Item not found'], 404);
        }

        return response()->json(['success' => true, 'data' => $item]);
    }
}
