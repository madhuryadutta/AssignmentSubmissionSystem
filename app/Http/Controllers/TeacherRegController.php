<?php

namespace App\Http\Controllers;

use App\models\TeacherRegModel;
use App\models\department;
use App\models\Assignments;
use App\models\assignment_status;
use Illuminate\Support\Facades\Hash;
use Session;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;
use Illuminate\Http\Request;

class TeacherRegController extends Controller
{
    //
    public function index(){
        return view ('teacher_login');
    }
    public function register(){
        $data['department']=DB::table('department')->orderBy('d_name','asc')->get();
        return view('teacher_reg',$data);
    }
    public function teacherreg(Request $request)
    {
        $request->validate(
            [
                'name' => 'required|regex:/^[a-zA-Z\s]*$/',
                'email' => 'required|unique:students,email',
                'password' => 'required|min:3',
                'confirmpassword' => 'required|same:password',

            ]
        );
        $teachers = new TeacherRegModel();
        $teachers->t_name = $request->input('name');
        $teachers->t_email = $request->input('email');
        $teachers->t_d_id = $request->input('department');
        $teachers->t_gender = $request->input('gender');
        $teachers->t_address = $request->input('address');
        $teachers->t_password = Hash::make($request->input('password'));
        $teachers->dob = $request->input('dob');
        $teachers->save();
        return redirect('/teacher')->with('status', "Account Created Successfully.");
    }
    public function logout(){
        if (Session::has('loginId')) {
            Session::pull('loginId');
            return redirect('/teacher');
        }
    }
}
