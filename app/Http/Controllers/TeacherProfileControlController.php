<?php

namespace App\Http\Controllers;

use App\Models\TeacherRegModel;
use Illuminate\Http\Request;
use App\Models\department;
use Illuminate\Support\Facades\DB;

class TeacherProfileControlController extends Controller
{
    //

    public function dex($t_id)
    {
        $student = TeacherRegModel::find($t_id);
        if (is_null($student)) {
            return redirect('dashboard');
        } else {
            $data = array();
            $data1 = array();
            $data = TeacherRegModel::where('t_id', "=", $t_id)->first();
            $data1 = department::where('t_d_id', "=", $data->t_d_id)->first();
            $data2 = DB::table('department')->orderBy('d_name', 'asc')->get();
            return view('t_profileupdate', compact('data', 'data1', 'data2'));
        }
    }











    public function makeChange($t_id, Request $request)
    {
        $students = TeacherRegModel::find($t_id);
        $students->name = $request->input('user_name');
        $students->email = $request->input('user_email');
        $students->d_id = $request->input('department');
        $students->gender = $request->input('gender');
        $students->Address = $request->input('address');
        $students->dob = $request->input('dateofbirth');
        $students->save();
        return redirect(route('updatedetails', ['t_id' => $t_id]))->with('status1', "Your Details Updated Successfully");
    }
}
