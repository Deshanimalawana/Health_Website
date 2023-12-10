<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Login;
use App\Models\Register;
use App\Models\Appointment;
use App\Models\Contact;

class LoginController extends Controller
{
    //

    public function getdata(Request $req){
        $req->validate([
            'username'=>'required',
            'password'=>'required | min:8 | max:15',
        ]);

        $data = new Login;

        $data->username = $req->username;
        $data->password = $req->password;
        $data->save();

        return redirect('home');
    }

    public function regdata(Request $req){
        $req->validate([
            'name'=>'required',
            'email'=>'required',
            'password'=>'required | min:8 | max:15',
        ]);

         $data = new Register;

         $data->name = $req->name;
         $data->email = $req->email;
         $data->password = $req->password;
         $data->save();

         return redirect('login');
     }

   
     public function getappointment(Request $req){
         $req->validate([
             'firstname'=>'required',
             'lastname'=>'required',
              'service'=>'required',
             'phonenumber'=>'required | min:10 | numeric',
             'dateofbirth'=>'required',
             'time'=>'required',
         ]);

         $data = new Appointment;

         $data->firstname = $req->firstname;
         $data->lastname = $req->lastname;
         $data->service = $req->service;
         $data->phonenumber = $req->phonenumber;
         $data->dateofbirth = $req->dateofbirth;
         $data->time = $req->time;
         $data->message = $req->message;
         $data->save();

         return redirect('home');

     }

     public function contact(Request $req){
      
         $data = new Contact;

         $data->name = $req->name;
         $data->email = $req->email;
         $data->subject = $req->subject;
         $data->message = $req->message;
         $data->save();

         return redirect('home');
     }

}
