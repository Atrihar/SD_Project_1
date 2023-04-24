<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Teacher;
use App\Models\Student;
// use Session;
// use App\Http\Controllers\DB;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;


class AuthController extends Controller
{
    public function add_admin()
    {
        return view('admin.pages.add_admin');
    }

    public function supervisor_register()
    {
        return view('supervisor.pages.registration');
    }

    public function student_register()
    {
        return view('student.pages.register');
    }

    public function adminRegister(Request $req)
    {
        $name = $req->name;
        $email = $req->email;
        $contact_no = $req->contact_no;
        $password = $req->password;
        $confirm = $req->cnf_passward;
        $role = $req->role;
        // $req->file('')
        if ($password == $confirm) {
            $user_exists = Teacher::where('email', '=', $email)->first();
            // dd($user_exists);
            // echo "so far";
            if ($user_exists) {
                $user_exists = Teacher::where('email', '=', $email)->first();
                // echo "so far";
            } else {
                $user = new Teacher();
                $user->name = $name;
                $user->email = $email;
                $user->password = md5($password);
                $user->contact_no = $contact_no;
                $user->role = $role;
                // dd($user->name);
                if ($user->save()) {
                    return redirect()->back()->with('info', 'User registered. Waiting for approval');
                }
            }
        } else {
            dd('Inside else');
        }
    }


    public function signout(Request $request)
    {
        $request->session()->flush();
        return redirect('/');
    }

    public function superRegister(Request $req)
    {
        $name = $req->name;
        $email = $req->email;
        $contact_no = $req->contact_no;
        $password = $req->password;
        $confirm = $req->cnf_password;
        $role = $req->role;
        if ($password == $confirm) {
            $user_exists = Teacher::where('email', '=', $email)->first();
            if ($user_exists) {
                return redirect()->back()->with('info', 'User Already Exists');
            } else {
                $user = new Teacher();
                $user->name = $name;
                $user->email = $email;
                $user->password = md5($password);
                $user->contact_no = $contact_no;
                $user->role = $role;
                if ($user->save()) {
                    return redirect()->back()->with('info', 'User registered. Waiting for approval');
                }
            }
        }
    }

    public function studentRegistration(Request $req)
    {
        $name = $req->name;
        $std_id = $req->std_id;
        $email = $req->email;
        $batch = $req->batch;
        $contact_no = $req->contact_no;
        $password = $req->password;
        $confirm = $req->cnf_password;
        if ($password == $confirm) {
            $user_exists = Student::where('email', '=', $email)->first();
            if ($user_exists) {
                return redirect()->back()->with('info', 'User Already Exists');
            } else {
                $user = new Student();
                $user->name = $name;
                $user->std_id = $std_id;
                $user->email = $email;
                $user->batch = $batch;
                $user->password = md5($password);
                $user->contact_no = $contact_no;
                if ($user->save()) {
                    return redirect()->back()->with('info', 'User registered. Waiting for approval');
                }
            }
        }
    }

    public function admin_login()
    {
        return view('login');
    }


    public function adminLogin(Request $req)
    {
        $email = $req->email;
        $password = $req->password;
        $user = Teacher::where('email', '=', $email)
            ->where('password', '=', md5($password))
            ->first();

        // $std_ID = $req->std_ID;
        // $password = $req->password;
        $std = Student::where('email', '=', $email)
            ->where('password', '=', md5($password))
            ->first();

        if ($user) {
            if ($user->is_approved == 1) {
                Session::put('username', $user->name);
                Session::put('userrole', $user->role);
                Session::put('userid', $user->id);
                if ($user->role != 'Admin') {
                    return redirect('supervisor/dashboard',);
                } else {
                    return redirect('admin/dashboard');
                }
            } else {
                return redirect()->back()->with('info', 'User not approved yet.');
            }
        } elseif ($std) {
            Session::put('username', $std->name);
            Session::put('userid', $std->id);
            Session::put('user_id', $std->std_ID);
            Session::put('useremail', $std->email);
            return redirect('student/dashboard');
        } else {
            return redirect()->back()->with('info', 'Invalid email or password');
        }
    }
}
