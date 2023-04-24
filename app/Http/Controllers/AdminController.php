<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
// use Illuminate\Support\Facades\Auth;
use App\Models\Teacher;
use App\Models\Group;
use App\Models\Student;
use App\Models\Group_member;
use Illuminate\Support\Facades\DB;

class AdminController extends Controller
{
    public function dashboard()
    {
        // $total_student = DB::table('students')
        //     ->select(DB::raw("'COUNT'(id) as total_student"))
        //     ->get();

        // $total_instructor = DB::table('teachers')
        //     ->select(DB::raw("'COUNT'(id) as total_instructor"))
        //     ->get();

        // $total_group = DB::table('groups')
        //     ->select(DB::raw("'COUNT'(id) as total_group"))
        //     ->get();

        // $unassigned_group = DB::table('groups')
        //     ->select(DB::raw("'COUNT'(id) as total"))
        //     ->whereNull('instructor_id')
        //     ->get();

        // $assigned_group = DB::table('groups')
        //     ->select(DB::raw("'COUNT'(id) as total"))
        //     ->whereNotNull('instructor_id')
        //     ->get();

        // dd($assigned_group);
        // return view('admin.pages.dashboard', compact('total_student', 'total_instructor', 'total_group', 'unassigned_group', 'assigned_group'));
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
        $std_detailes = DB::table('students')
            ->select('*')
            ->join('group_members', 'students.id', '=', 'group_members.s_id')
            ->join('groups', 'groups.id', '=', 'group_members.group_id')
            ->where('groups.id', '=', $id)
            ->get();
        // dd($std_detailes);
        $teachers_detailes = DB::table('teachers')
            ->select('teachers.name')
            ->join('groups', 'teachers.id', '=', 'groups.instructor_id')
            ->where('groups.id', '=', $id)
            ->get();
        return view('admin.pages.group_info', compact('group', 'std_detailes', 'teachers_detailes'));
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
        $name = $req->instructor_name;
        $instructor_id = DB::table('teachers')
            ->select('id')
            ->where('name', '=', $name)
            ->get();
        // dd($name);
        $obj->instructor_id = $req->instructor_id;

        if ($obj->save()) {
            return redirect('admin/all_groups');
        }
    }

    public function delete_group($id)
    {
        Group::find($id)->delete();
        return redirect('admin/all_groups');
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
