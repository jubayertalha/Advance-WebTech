<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Models\User;

class PageController extends Controller
{
    
    public $email = "Default";
    public $password = "Default";
    public $name = "Default";

    public function home(){
        return view('home');
    }

    public function products(){
        $products=array("Product 1", "Product 2", "Product 3", "Product 4", "Product 5");
        return view('products')->with('products', $products);
    }

    public function teams(){
        return view('teams');
    }

    public function about(){
        return view('about');
    }

    public function contact(){
        return view('contact');
    }

    public function login(){
        return view('login');
    }

    public function registration(){
        return view('registration');
    }

    public function contactDetails(Request $request){
        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'email' => 'required|email',
            'message' => 'required',
        ]);
        $validator->validate();
        $name=$request->input('name');
        $email=$request->input('email');
        $message=$request->input('message');
        return view('contactDetails')->with('name', $name)->with('email', $email)->with('message', $message);
    }

    public function loginDetails(Request $request){
        $this->validate($request, [
            'email' => 'required|email',
            'password' => 'required'
        ]);
        $email=$request->input('email');
        $password=$request->input('password');
        if($this->email==$email && $this->password==$password){
            return view('loginDetails')->with('name', $this->name)->with('email', $this->email);
        }
        return view('loginDetails')->with('email', $email);
        return view('home');
    }

    public function registrationDetails(Request $request){
        $this->validate($request, [
            'name' => 'required | max:255',
            'email' => 'required | email',
            'password' => 'required | min:8'
        ]);
        $this->name=$request->input('name');
        $this->email=$request->input('email');
        $this->password=$request->input('password');
        return view('registrationDetails')->with('name', $this->name)->with('email', $this->email);
    }
}
