<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class LocationController extends Controller
{
    public function detail(Request $request) {
    	$data = json_decode($request->data);

    	$locationDetail = array(
    						'thumbnail' => isset($data->icon) ? $data->icon : null,
    						'name' => isset($data->name) ? $data->name : 'No Name',
    						'address' => isset($data->formatted_address) ? $data->formatted_address : 'No Address',
    						'contact' => isset($data->formatted_phone_number) ? $data->formatted_phone_number : 'No Contact Info',
    						'reviews' => isset($data->reviews) ? $data->reviews : []
    					);

    	return view('frontend.locationDetail')->with('place', $locationDetail);
    }
}
