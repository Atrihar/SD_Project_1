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
use Illuminate\Support\Facades\Storage;

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

    public function student(Request $req) // the logic of this fuction is not complete, i skip this for now as it is not a mandatory page from my prespective
    {

        $ins_id = $req->session()->get('userid');
        // dd($ins_id);
        $std_detailes = DB::table('students')
                                ->select('students.std_ID', 'students.name', 'students.email', 'students.contact_no', 'students.batch')
                                ->join('group_members','students.id','=','group_members.s_id')
                                ->join('groups','group_members.group_id','=','groups.id')
                                ->join('teachers','groups.instructor_id','=','teachers.id')
                                ->where('teachers.id','=',$ins_id )
                                ->get();
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

    public function new_task($id, Request $req)
    {
        $group = Group::find($id);
        // dd($group);
        return view('supervisor.pages.new_task',compact('group'));
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

    public function running_group_info($id, Request $req)
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
        return view('supervisor.pages.running_assignment', compact('assignment','x'));
    }


    public function assignment_info($id, Request $req)
    {
        $id = (int)$id;
        // dd($id);

        $assignment_detailes = DB::table('assignments')
            ->select('*')
            ->where('id', '=', $id)
            ->get();

        // dd($assignment_detailes);
        return view('supervisor.pages.assignment_info', compact('assignment_detailes'));
    }

    // public function new_task($id, Request $req){

    // }

    public function create_assignment(Request $req, $id){
        $obj = new Assignment;

        $file = $req->attachment;
        $filename = time().'.'.$file->getClientOriginalExtension();
        $filePath = public_path().'/asset/';
        $file->move($filePath,$filename);
        $obj->group_id = $id;
        $obj->attachment = $filename;
        $obj->due = $req->due;
        $obj->name = $req->name;
        $obj->ques = $req->ques;
        // dd($obj);
        // $obj->ans = 'NULL';
        // dd($obj);
        $obj->group_id = $id;
        // dd($id);
        if ($obj->save()) {
            return redirect('/running_group_info');
        }
    }

    public function view($id){
        $data = Assignment::find($id);
        // dd($data);
        return view('supervisor.pages.view-ans',compact('data'));
    }

}
