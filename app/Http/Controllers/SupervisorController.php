<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use PHPUnit\Metadata\Api\Groups;
use App\Models\Teacher;
use App\Models\Group;
use App\Models\Group_member;
use App\Models\Student;
use App\Models\Assignment;

class SupervisorController extends Controller
{
    public function dashboard(Request $req)
    {
        // fetching the id of the user that is logged in to the session
        $id = $req->session()->get('userid');
        // dd($value);
        // $dataset = [
        //     DB::table('groups')
        //     ->select('*')
        //     ->where('instructor_id','=',$id)
        //     ->get()
        // ];
        // $a = Group::find($id);
        $a = Group::where('instructor_id', '=', $id)->get();
        return view('supervisor.pages.dashboard', compact('a'));
        // dd($a);
    }

    public function student(Request $req)
    {

        $ins_id = $req->session()->get('userid');
        $g_id = Group::where('instructor_id', '=', $ins_id)->get('id');
        $group_id = str_replace(
            ['"', '[', ']', '{', '}', ':', '(', ')', 's', '_', 'i', 'd'],
            "",
            $g_id
        );
        $std_id = Group_member::where('group_id', '=', $group_id)->get('s_id');
        $student_id = str_replace(
            ['"', '[', ']', '{', '}', ':', '(', ')', 's', '_', 'i', 'd'],
            "",
            $std_id
        );
        $std_detailes = Student::where('id', '=', $student_id)->get();
        // dd($std_detailes);

        return view('supervisor.pages.student', compact('std_detailes'));
    }

    public function group_info()
    {
        return view('supervisor.pages.group');
    }

    public function completed(Request $req)
    {
        $id = $req->session()->get('userid');
        // $dataset = [
        //     DB::table('groups')
        //     ->select('*')
        //     ->where('instructor_id','=',$id)
        //     ->get()
        // ];
        $a = Group::where('instructor_id', '=', $id)
            ->where('grade', '!=', NULL)
            ->get();
        // dd($a);
        return view('supervisor.pages.completed', compact('a'));
    }

    public function running(Request $req)
    {
        $id = $req->session()->get('userid');
        // $dataset = [
        //     DB::table('groups')
        //     ->select('*')
        //     ->where('instructor_id','=',$id)
        //     ->get()
        // ];
        $a = Group::where('instructor_id', '=', $id)
            ->where('grade', '=', NULL)
            ->get();
        // dd($a);
        return view('supervisor.pages.running', compact('a'));
    }

    public function new_task()
    {
        return view('supervisor.pages.new_task');
    }


    public function completed_group_info($id, Request $req)
    {
        $group = Group::find($id);
        // $$id = str_replace(
        //     ['"', '[', ']', '{', '}', ':', '(', ')', 's', '_', 'i', 'd'],
        //     "",
        //     $std_id
        // );
        $x = (int)$id;
        // dd(gettype($x));
        $assignment = DB::table('assignments')
            ->select('*')
            ->where('group_id', '=', $x)
            ->get();
        // dd($assignment);
        // dd($id);
        return view('supervisor.pages.complete_assignment', compact('assignment'));
    }
}
