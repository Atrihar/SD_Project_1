<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
// use Illuminate\Support\Facades\Auth;
use App\Models\Teacher;
use App\Models\Group;
use App\Models\Student;
use App\Models\Group_member;

class AdminController extends Controller
{
    public function dashboard()
    {
        // $user_id = Auth::teachers()->id;
        // dd($user_id);
        return view('admin.pages.dashboard');
    }

    public function all_user()
    {
        $users = Teacher::all();
        return view('admin.pages.all_user', compact('users'));
    }

    // ---------------------->>>>Group crud operation<<<<----------------------


    public function all_groups()
    {
        $users = Group::all();
        return view('admin.pages.all_groups', compact('users'));
    }

    // public function group_info($id, Request $req, $group , $std_detailes)
    public function group_info($id, Request $req)
    {
        // get the group id
        $group = Group::find($id);
        // get the student id belogning to that group
        $std_id = Group_member::where('group_id', '=', $id)->get('s_id');
        // removing special caracters to only get the id
        $student_id = str_replace(
            ['"', '[', ']', '{', '}', ':', '(', ')', 's', '_', 'i', 'd'],
            "",
            $std_id
        );
        // $member = count($student_id);
        // dd(gettype($student_id));
        //the student id's are in form of string so creating an array with thoes id's
        $arr = str_split($student_id);
        // removing uncessery , from the array
        $array = \array_filter($arr, static function ($element) {
            return $element !== ",";
            //                   ↑
            // Array value which you want to delete
        });
        // $member = count($array);
        // forming a string with the values
        $array = implode('', $array);
        // spliting the array again and finally getting the student id in desired form
        $arr2 = str_split($array);

        $x = count($arr2);
        // for ($i=0; $i < $x; $i++) {
        // }

        $std_detailes = Student::where('id', '=', $arr2)->get();
        // dd($std_detailes);
        return view('admin.pages.group_info', compact('group','std_detailes'));
        // return view('admin.pages.group_info', compact('group'));
    }


    public function group_approval($userId)
    {
        $user = Group::find($userId);
        $user->is_approved = 1;
        if ($user->save()) {
            return redirect()->back();
        }
    }

    public function update_group($id, Request $req)
    {
        $obj = Group::find($id);
        $obj->name = $req->name;
        $obj->grade = $req->grade;
        $obj->project_name = $req->project_name;
        $obj->instructor_id = $req->instructor_id;

        if ($obj->save()) {
            return redirect('admin/all_groups');
        }
    }


    // ---------------------->>>>teacher crud operation<<<<----------------------


    public function instructor()
    {
        $users = Teacher::all();
        return view('admin.pages.instructor', compact('users'));
    }

    public function approve($userId)
    {
        $user = Teacher::find($userId);
        $user->is_approved = 1;
        if ($user->save()) {
            return redirect()->back();
        }
    }

    public function delete_instructor($id)
    {
        Teacher::find($id)->delete();
        return redirect('admin/instructor');
    }

    public function edit_instructor($id)
    {
        $instructor = Teacher::find($id);
        return view('admin.pages.edit_instructor', compact('instructor'));
    }

    public function update_instructor($id, Request $req)
    {
        $obj = Teacher::find($id);
        $obj->name = $req->name;
        $obj->email = $req->email;
        $obj->contact_no = $req->contact_no;
        $obj->role = $req->role;

        if ($obj->save()) {
            return redirect('admin/instructor');
        }
    }


    // ---------------------->>>>student crud operation<<<<----------------------

    public function student()
    {
        $users = Student::all();
        return view('admin.pages.student', compact('users'));
    }

    public function delete_student($id)
    {
        Student::find($id)->delete();
        return redirect('admin/student');
    }

    public function edit_student($id)
    {
        $student = Student::find($id);
        return view('admin.pages.edit_student', compact('student'));
    }

    public function update_student($id, Request $req)
    {
        $obj = Student::find($id);
        $obj->name = $req->name;
        $obj->email = $req->email;
        $obj->contact_no = $req->contact_no;
        $obj->std_ID = $req->std_ID;
        $obj->batch = $req->batch;

        if ($obj->save()) {
            return redirect('admin/student');
        }
    }
}
