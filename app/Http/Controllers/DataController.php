<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\CombinedData;

class DataController extends Controller
{
    public function storeData(Request $request){
        $data = json_decode($request->getContent(), true);
        $data['data'] = json_encode($data['data']);
        CombinedData::create($data);
        return response()->json(['message' => 'Data stored successfully']);
    }

    public function viewData(){
        $data = CombinedData::all(); 
        $data = $data->map(function ($item) {
            $r['data'] = $item->data; unset($item->data); $response = $item->getAttributesWithoutNull();
            return array_merge($response,$r);
        });
        return response()->json($data); //for postman 
        //return view('data.view', ['data' => $data]); // Return the data to a view in a standardized format
    }
}
