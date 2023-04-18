<?php

namespace App\Http\Controllers;

use App\Models\Student;
use App\Models\Group;
use App\Models\Group_member;
use App\Models\Assignment;
use Carbon\Traits\ToStringFormat;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Spatie\Backtrace\File;


class StudentController extends Controller
{
    public function dashboard()
    {
        return view('student.pages.dashboard');
    }

    public function group(Request $req)
    {
        $id = $req->session()->get('userid');
        // dd($id);
        $find = DB::table('group_members')
            ->select('*')
            ->where('s_id', '=', $id)
            ->get();
        // dd($find[0]->id);
        if ($find[0]->id == true) {


            $group = DB::table('group_members')
                ->select('*')
                ->where('s_id', '=', $id)
                ->get();
            $g_id = $group[0]->group_id;
            $student_info = DB::table('students')
                ->select('*')
                ->join('group_members', 'students.id', '=', 'group_members.s_id')
                ->where('group_members.group_id', '=', $g_id)
                ->get();
            // dd($student_info);
            $group_name = DB::table('groups')
                ->select('*')
                ->where('id', '=', $g_id)
                ->get();
            // dd($group_name);
            return view('student.pages.group', compact('student_info', 'group_name'));
        }
        else{
            return redirect('student/create_group');
        }
    }

    public function assignment(Request $req)
    {
        $id = $req->session()->get('userid');
        // $id = 5;

        $assignment_info = DB::table('assignments')
            ->select('*')
            ->join('group_members', 'assignments.group_id', '=', 'group_members.group_id')
            ->where('group_members.s_id', '=', $id)
            ->get();

        // dd($id);
        return view('student.pages.assignment', compact('assignment_info'));
    }

    public function create_group()
    {
        return view('student.pages.create_group');
    }

    public function view($id, Request $req)
    {
        $id = (int)$id;
        // dd($id);

        $assignment_detailes = DB::table('assignments')
            ->select('*')
            ->where('id', '=', $id)
            ->get();

        // dd($assignment_detailes);
        return view('student.pages.view', compact('assignment_detailes'));
    }

    public function addMember(Request $req)
    {
        // fetching the id of the user that is logged in to the session
        $value = $req->session()->get('userid');
        // dd($value);
        return view('student.pages.add_members');
    }


    public function newGroup(Request $req)
    {
        $name = $req->name;

        $group_exists = Group::where('name', '=', $name)->first();
        if ($group_exists) {
            return redirect()->back()->with('info', 'Group Already Exists');
        } else {
            $group = new Group();
            $group->name = $name;
            if ($group->save()) {
                return redirect('student/addMember');
            }
        }
    }



    public function add_members(Request $req)
    {
        $id = $req->id;
        $name = $req->name;
        $datasave = [
            'id' => $id,
            'name' => $name,
        ];

        // conunting the number of student id in the group
        $no_std = count($id);

        //getting the id of the group
        $groupid = DB::table('groups')
            ->select('id')
            ->where('name', '=', $name)
            ->get();

        $group_id = str_replace(
            ['"', '[', ']', '{', '}', ':', '(', ')', 'i', 'd'],
            "",
            $groupid
        );

        for ($i = 0; $i < $no_std; $i++) {
            $group_member = new Group_member();
            $group_member->group_id = $group_id;
            $sid = DB::table('students')
                ->select('id')
                ->where('std_id', '=', $id[$i])
                ->get();

            //removing all the special caracter
            $s_id = str_replace(
                ['"', '[', ']', '{', '}', ':', '(', ')', 'i', 'd'],
                "",
                $sid
            );
            $group_member->s_id = $s_id;
            $group_member->save();
        }
        return redirect('student/dashboard');
    }


    public function submit_assignment($id, Request $req)
    {
        $obj = Assignment::find($id);
        $file = $req->ans;
        $filename = time() . '.' . $file->getClientOriginalExtension();
        // dd($filename);
        // $req->move(public_path('asset'), $filename);
        // $req->file->move('asset',$filename);
        $filePath = public_path() . '/asset/';
        $file->move($filePath . $filename);

        // echo $req->file()->storeAs('public/update',$filename);

        $obj->ans = $filename;
        $obj->submission = now();

        if ($obj->save()) {
            return redirect('student/assignment');
        }
    }
}
