<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index(){
        return view("admin/index");
    }
    
    public function error(){
        return view("admin/error");
    }

    public function forgot_password(){
        return view("admin/forgot_password");
    }

    public function dashboard(){
        return view("admin/dashboard");
    }

    public function view_category(){
        return view("admin/view_category");
    }

    public function add_category(){
        return view("admin/add_category");
    }

    public function edit_category(){
        return view("admin/edit_category");
    }

    public function delete_category(){
        return view("admin/delete_category");
    }

    public function add_course(){
        return view("admin/add_course");
    }
    
    public function view_course(){
        return view("admin/view_course");
    }

    public function enrolled(){
        return view("admin/enrolled");
    }

    public function review(){
        return view("admin/review");
    }

    public function report_course(){
        return view("admin/report_course");
    }

    public function report_student(){
        return view("admin/report_student");
    }

    public function logout(){
        return view("admin/logout");
    }

}
