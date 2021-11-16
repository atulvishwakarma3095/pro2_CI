<?php

namespace App\Controllers;
use App\Models\Users;
use App\Libraries\Hash;
class Dashboard extends BaseController
{
	public function index(){
		 $usermodel= new \App\Models\Users();
        $loggedUserID=session()->get('loggedUser');
        $userInfo=$usermodel->find($loggedUserID);
        $data=[
            'title'=>'Dashboard',
            'userInfo'=>$userInfo
        ];
		return view('dashboard/index',$data);
	}
	public function profile(){
		$usermodel= new \App\Models\Users();
        $loggedUserID=session()->get('loggedUser');
        $userInfo=$usermodel->find($loggedUserID);
        $data=[
            'title'=>'Profile',
            'userInfo'=>$userInfo
        ];
        return view('dashboard/profile',$data);
	}
    public function bonafied(){
        $usermodel= new \App\Models\Users();
        $loggedUserID=session()->get('loggedUser');
        $userInfo=$usermodel->find($loggedUserID);
        $data=[
            'title'=>'Bonafied',
            'userInfo'=>$userInfo
        ];
        return view('dashboard/bonafied',$data);
    }
    public function assignments(){
        $usermodel= new \App\Models\Users();
        $loggedUserID=session()->get('loggedUser');
        $userInfo=$usermodel->find($loggedUserID);
        $data=[
            'title'=>'Assignments',
            'userInfo'=>$userInfo
        ];
        return view('dashboard/Assignments',$data);
    }
    public function certificates(){
        $usermodel= new \App\Models\Users();
        $loggedUserID=session()->get('loggedUser');
        $userInfo=$usermodel->find($loggedUserID);
        $data=[
            'title'=>'Certificates',
            'userInfo'=>$userInfo
        ];
        return view('dashboard/certificates',$data);
    }
    public function coursesturcture(){
        $usermodel= new \App\Models\Users();
        $loggedUserID=session()->get('loggedUser');
        $userInfo=$usermodel->find($loggedUserID);
        $data=[
            'title'=>'Course Sturcture',
            'userInfo'=>$userInfo
        ];
        return view('dashboard/coursesturcture',$data);
    }
    public function Ebook(){
        $usermodel= new \App\Models\Users();
        $loggedUserID=session()->get('loggedUser');
        $userInfo=$usermodel->find($loggedUserID);
        $data=[
            'title'=>'Ebooks',
            'userInfo'=>$userInfo
        ];
        return view('dashboard/EbookFYBCA',$data);
    }
    public function notes(){
        $usermodel= new \App\Models\Users();
        $loggedUserID=session()->get('loggedUser');
        $userInfo=$usermodel->find($loggedUserID);
        $data=[
            'title'=>'Notes FYBCA',
            'userInfo'=>$userInfo,
            'yrs'=>'FYBCA'
        ];
        return view('dashboard/NoteFYBCA',$data);
    }
    public function SYnotes(){
        $usermodel= new \App\Models\Users();
        $loggedUserID=session()->get('loggedUser');
        $userInfo=$usermodel->find($loggedUserID);
        $data=[
            'title'=>'Notes SYBCA',
            'userInfo'=>$userInfo,
            'yrs'=>'SYBCA'
        ];
        return view('dashboard/NoteFYBCA',$data);
    }
    public function TYnotes(){
        $usermodel= new \App\Models\Users();
        $loggedUserID=session()->get('loggedUser');
        $userInfo=$usermodel->find($loggedUserID);
        $data=[
            'title'=>'Notes TYBCA',
            'userInfo'=>$userInfo,
            'yrs'=>'TYBCA'
        ];
        return view('dashboard/NoteFYBCA',$data);
    }
    public function questionpaper(){
        $usermodel= new \App\Models\Users();
        $loggedUserID=session()->get('loggedUser');
        $userInfo=$usermodel->find($loggedUserID);
        $data=[
            'title'=>'Question Paper',
            'userInfo'=>$userInfo
        ];
        return view('dashboard/Questionpaper',$data);
    }
    public function referencebook(){
        $usermodel= new \App\Models\Users();
        $loggedUserID=session()->get('loggedUser');
        $userInfo=$usermodel->find($loggedUserID);
        $data=[
            'title'=>'Reference Books',
            'userInfo'=>$userInfo
        ];
        return view('dashboard/referencebook',$data);
    }
    public function reportissue(){
        $usermodel= new \App\Models\Users();
        $loggedUserID=session()->get('loggedUser');
        $userInfo=$usermodel->find($loggedUserID);
        $data=[
            'title'=>'Report Issue',
            'userInfo'=>$userInfo
        ];
        return view('dashboard/reportissue',$data);
    }
    public function syllabus(){
        $usermodel= new \App\Models\Users();
        $loggedUserID=session()->get('loggedUser');
        $userInfo=$usermodel->find($loggedUserID);
        $data=[
            'title'=>'Syllabus',
            'userInfo'=>$userInfo
        ];
        return view('dashboard/Syllabus',$data);
    }
}

?>