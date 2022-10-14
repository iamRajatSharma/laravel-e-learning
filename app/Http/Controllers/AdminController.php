<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use DB;

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
        $data = DB::table("category")->get();
        return view("admin/view_category", ['data'=> $data]);
    }

    public function add_category(){
        return view("admin/add_category");
    }

    public function edit_category($id){
        $data = DB::table("category")->where('id', $id)->get();
        return view("admin/edit_category", ['data'=> $data]);
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


    // <==========>  handle post methods  <==========>

    //save category 
    public function save_category(Request $request){
        $cat = new Category;
        $cat->name = $request->input("name");

        $check_validation = $request->validate([
            'name' => 'required|unique:category'
        ]);

        $check = DB::table("category")->where("name", $request->input("name"))->count();
        if($check==1){
            $request->session()->flash('failed', 'Category Already Exists');
        }
        else{
            if($cat->save()){
                $request->session()->flash('success', 'Category Saved Successful!');
            }
            else{
                $request->session()->flash('failed', 'Something Went Wrong');
            }
        }
        return redirect("admin/view_category");
    }

    // update category details
    public function update_category(Request $request){
        
        $check_validate = $request->validate([
            'name'=> 'required'
        ]);

        $category = Category::find($request->id);
        $category->name = $request->name;
        if($category->update()){
            $request->session()->flash("success", "Details Updated Successfully");
        }
        else{
            $request->session()->flash("falied", "Something Went Wrong");
        }
        return redirect("admin/view_category");
    }

    //delete category details
    public function delete_category(Request $request, $id){
        $check = Category::find($id);
        if($check){
            $del = DB::table("category")->where("id", $id)->delete();
            if($del){
                $request->session()->flash("failed", "Category Deleted Successfully");
            }
            else{
                $request->session()->flash("failed", "Someting Went Wrong");
            }
        }
        else{
            $request->session()->flash("failed", "The category you are looking is not found");
        }
        return redirect("admin/view_category");
    }

}