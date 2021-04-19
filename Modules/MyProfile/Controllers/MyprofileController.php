<?php

namespace Modules\MyProfile\Controllers;

use App\Controllers\BaseController;
use Modules\MyProfile\Models\MyprofileModel;
use Modules\MyProfile\Models\ChangepasswordModel;

class MyprofileController extends BaseController
{
	public function index()
	{
		
		$model=new MyprofileModel();
		$data['userdetails']=$model->find(session()->get('id'));
		return view("\Modules\MyProfile\Views\user\myprofile",$data);

	}
	public function changePasswordPage()
	{

		return view("\Modules\MyProfile\Views\user\changepassword");
	}

	public function updateProfile()
	{
		if($this->request->getMethod()=='post')
		{

				$model=new MyprofileModel();
		
				$pname=$this->request->getFile('profile_pic');
				
				if(empty($pname->getClientName()))
				{
					$data=[
						'full_name'=>$this->request->getVar('full_name')
					];
		
					if($model->update(session()->get('id'),$data))
					{
						
						session()->set('name',$data['full_name']);
						session()->setFlashData('success','3');
					}
					return redirect()->to('/dashboard');
				}
				else
				{
				
							
					$profile_pic=$this->request->getfile('profile_pic');
					$pname=time().$profile_pic->getClientName();
					$profile_pic->move('upload/user',$pname);
					$data=[
						'full_name'=>$this->request->getVar('full_name'),
						'profile_pic'=>$pname,
							
					];
					if($model->update(session()->get('id'),$data))
					{
						session()->set('profile_pic',$pname);
						session()->set('name',$data['full_name']);
						session()->setFlashData('success','3');
					}
					return redirect()->to('/dashboard');
				
				}
			
			
			
		}
		
	}
	public function changePassword()
	{
		if($this->request->getMethod()=='post')
		{
			
			$model=new MyprofileModel();
			$data=$model->find(session()->get('id'));
		
			if(password_verify($this->request->getVar('currentpassword'),$data['password']))
			{
				if(password_verify($this->request->getVar('newpassword'),$data['password']))
				{
					
					session()->setFlashdata('failure','2');
					return redirect()->to('/changepassword');
				}
				else
				{
					$data=[
						'password'=> password_hash($this->request->getVar('newpassword'),PASSWORD_DEFAULT),
					];
			   
					$model=new MyprofileModel();
					if($model->update(session()->get('id'),$data))
					{
						session()->setFlashData('success','1');
						return redirect()->to('/changepassword');
					}
				}
			}
			else
			{
				session()->setFlashdata('failure','1');
				return redirect()->to('/changepassword');
				
			}
		}
	}
	
}
