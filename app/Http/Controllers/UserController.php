<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index(){
        return view("app/index");
    }

    public function about(){
        return view("app/about");
    }

    public function contact(){
        return view("app/contact");
    }

    public function faq(){
        return view("app/faq");
    }

    public function login(){
        return view("app/login");
    }

    public function register(){
        return view("app/register");
    }

    public function courses(){
        return view("app/courses");
    }

    public function course_details(){
        return view("app/course_details");
    }

    public function error(){
        return view("app/error");
    }

    public function blog(){
        return view("app/blog");
    }

    public function blog_details(){
        return view("app/blog_details");
    }

    public function forgot_password(){
        return view("app/forgot_password");
    }

}
