<?php

namespace App\Controllers;
use App\Models\Users;
use App\Libraries\Hash;
class Login extends BaseController
{

    public function __construct(){

        helper(['url','form']);

    }

    public function index()
    {
        return view('Login/Login');
    }
    public function register()
    {
        return view('Login/Registration');
    }
    public function checkusers()
    {
        $validation=\Config\Services::validation();
        $check=$this->validate([ 
             'txtpasswd'=>[
                'rules'=>'required',
                'errors'=>[
                    'required'=>'Enter your password',
                ]
            ],
             'txtemail'=>[
                'rules'=>'required|valid_email',
                'errors'=>[
                    'required'=>'Please enter your email id',
                    'valid_email'=>'you must enter a valid email',
                    'is_unique'=>'Email already taken'
                ]
            ]
        ]);
        if (!$check) {
            return view('Login/Login',['validation'=>$this->validator]);
        }else{
           $username=$this->request->getPost('txtemail');
           $password=$this->request->getPost('txtpasswd');
           $usersmodel= new \App\Models\Users();
            $user_info=$usersmodel->where('email',$username)->first();
           $check_password=Hash::check($password,$user_info['passwd']);
           if(!$check_password){
            session()->setFlashdata('fail','Incorrent Username & Password.');
            return redirect()->to('login')->withInput();
           }
           else{
            $user_id=$user_info['id'];
            session()->set('loggedUser',$user_id);
            return redirect()->to('dashboard');
           }
        }
    }
     public function savereg()
    {
       
        $validation=\Config\Services::validation();
        $check=$this->validate([
             'txtfullname'=>[
                'rules'=>'required',
                'errors'=>[
                    'required'=>'Enter your Fullname is required.'
                ]
            ],
              'txtpasswd'=>[
                'rules'=>'required',
                'errors'=>[
                    'required'=>'Enter your password',
                ]
            ],
             'txtemail'=>[
                'rules'=>'required|valid_email|is_unique[users.email]',
                'errors'=>[
                    'required'=>'Enter your email is required.',
                    'valid_email'=>'you must enter a valid email',
                    'is_unique'=>'Email already taken'
                ]
            ],
            'txtcontact'=>[
                'rules'=>'required|is_unique[users.contact]',
                'errors'=>[
                    'required'=>'Enter your contact number is required.',
                    'valid_email'=>'you must enter a valid contact number',
                    'is_unique'=>'Contact number already taken'
                ]
            ],
            'txtretrypasswd'=>[
                'rules'=>'required|matches[txtpasswd]',
                'errors'=>[
                    'required'=>'Enter your password again',
                    'matches'=>'Please enter your password correctly'
                ]
            ]
        ]);
         if (!$check) {
            return view('Login/Registration',['validation'=>$this->validator]);
        }else{
           echo $fullname=$this->request->getPost('txtfullname');
           echo $email=$this->request->getPost('txtemail');
            echo $contact=$this->request->getPost('txtcontact');
            $passwd=$this->request->getPost('txtretrypasswd');

            $values=[
                'fullname'=>$fullname,
                'email'=>$email,
                'contact'=>$contact,
                'passwd'=>Hash::make($passwd),
                'createdate'=>date('Y-m-d'),
                'active'=>1,
            ];

            $usersmodel= new \App\Models\Users();
            $query=$usersmodel->insert($values);
            if(!$query){
                return redirect()->back()->with('fail','Something went wrong.');
            }else{
                return redirect()->to('registerform')->with('success','You are register successfully.');   
               

            }
        }

    }

     function logout(){
        if(session()->has('loggedUser')){
            session()->remove('loggedUser');
            return redirect()->to('/login?access=out')->with('fail','You are logout out..!');
        }
    }
}
