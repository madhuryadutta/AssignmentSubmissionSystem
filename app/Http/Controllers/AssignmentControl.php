<?php

namespace App\Http\Controllers;
use App\models\StuRegModel;
use App\models\department;
use App\models\Assignments;
use App\models\assignment_status;
use Illuminate\Support\Facades\Hash;
use Session;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

use Illuminate\Http\Request;

class AssignmentControl extends Controller
{
    public function marksObtain(){
                if (Session::has('loginId')) {
                $sid =  Session::get('loginId');  
                $data = StuRegModel::all()->where('id', "=", $sid)->first();
                $data1 = department::where('d_id', "=",$data->d_id)->first();
                $data2 = Assignments::all()->where('d_id', "=",$data->d_id)->where('semester', '=',$data->semester);
                $data3 = assignment_status::all()->where('student_id', '=',$sid);
                return view('submittedAssignments', compact('data','data1','data2','data3'));
            }else{
                return redirect('/');
            } 
        } 
    }
