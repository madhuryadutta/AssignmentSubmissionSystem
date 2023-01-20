<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\questions;
use App\Models\Assignments;
class AssignmentController extends Controller
{
    //
    public function index(){
        return view('create_assignment');
    }
    public function store(Request $request)
    {
        $request->validate([
            'addMoreInputFields.*.subject' => 'required'
        ]);
     
        foreach ($request->addMoreInputFields as $key => $value) {
            questions::create($value);
        }
     
        return back()->with('success', 'New subject has been added.');
    }
}
