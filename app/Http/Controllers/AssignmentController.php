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

        $assignments = new Assignments();
        $assignments->id = $request->input('id');
        $assignments->assignment_name = $request->input('assignment_name');
        $assignments->t_id = $request->input('t_id');
        $assignments->d_id = $request->input('d_id');
        $assignments->semester = $request->input('semester');
        $assignments->submission_d_t = $request->input('submission_d_t');
        $assignments->save();


        $questions = new questions();
            $questions->a_id = $request->input('id');
            $questions->marks_contain = $request->input(101);
        foreach ($request->addMoreInputFields as $key => $questions) {
            $questions = new questions();
            $questions->a_id = $request->input('id');
            $questions->question = $key;
            $questions->marks_contain = '0';
            $questions->save();
            // questions::create($questions);
           
        }
     
        // return back()->with('success', 'New subject has been added.');
    }
}
