<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\questions;
use App\Models\Assignments;
use App\Models\StuRegModel;
use App\Models\subAns;
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
//  echo "<pre>";
//         print_r($request->all());
        $assignments = new Assignments();
        $assignments->id = $request->input('id');
        $assignments->assignment_name = $request->input('assignment_name');
        $assignments->t_id = $request->input('t_id');
        $assignments->d_id = $request->input('d_id');
        $assignments->semester = $request->input('semester');
        $assignments->submission_d_t = $request->input('submission_d_t');
        $assignments->save();

        foreach ($request->addmore as $key => $value) {
        $questions = new questions();
            $questions->a_id = $request->input('id');
            $questions->marks_contain = $request->input(101);
            $questions = new questions();
            $questions->a_id = $request->input('id');
            $questions->question =$value['name'];
            $questions->marks_contain = $value['qty'];
            $questions->save();
            
        //     // questions::create($questions);
           
        }
     return redirect('teacher_view_assignment');
        // return back()->with('success', 'New subject has been added.');
    }
    public function view(){
        $assignments = Assignments::all();
        $data = compact('assignments');
        return view('view_assignments')->with($data);
    }
    public function view_submission($id){
        $submission = subAns::all()->where('s_id', "=", $id);;
        // $students = StuRegModel::all();
        // $questions = questions::all()->where('assignment_id', "=", $id);;
        // return view('view_submission')->with($data);
        return view('view_submission', compact('submission',));        
        // return view('viewQuestion', compact('data', 'id1', 'id'));

    }

}
