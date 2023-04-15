<?php

namespace App\Http\Controllers;

use App\Models\Student;
use App\Models\Group;
use App\Models\Group_member;
use Carbon\Traits\ToStringFormat;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Auth;


class StudentController extends Controller
{
    public function dashboard()
    {
        return view('student.pages.dashboard');
    }

    public function group()
    {
        return view('student.pages.group');
    }

    public function assignment()
    {
        return view('student.pages.assignment');
    }

    public function create_group()
    {
        return view('student.pages.create_group');
    }

    public function view()
    {
        return view('student.pages.view');
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
                ['"','[',']','{','}',':','(',')','i','d'],
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
                ['"','[',']','{','}',':','(',')','i','d'],
                "",
                $sid
            );
            $group_member->s_id = $s_id;
            $group_member->save();
        }
        return redirect('student/dashboard');
    }
}
