<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Flow;
use App\Point;

class PublicController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    
    public function show($id)
    {
        $flow = Flow::where('id', $id)->first();
       
    	if($flow) {
            $points = Point::where('flow_id', $flow->id)->get();
            $flows = Flow::all();
        	return view('pages.points.show', compact('points', 'flows', 'flow'));
    	}
     	
     	abort(404);   
    }
}
