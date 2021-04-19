 <?php

// namespace App\Controllers;

// use App\Controllers\BaseController;
// use App\Models\UserModel;
// use App\Models\Passwordreset;

// class User extends BaseController
// {

// 	public function index()
// 	{
		
// 		return view('auth/login');
		
// 	}
// 	public function login()
//     {
//         $data = [];
	

//         if ($this->request->getMethod() == 'post') 
// 		{

//             $rules = [
//                 'email_address' => 'required|min_length[6]|max_length[50]|valid_email',
//                 'password' => 'required|min_length[6]|max_length[255]|validateUser[email_address,password]',
//             ];

//             $errors = [
//                 'password' => [
//                     'validateUser' => "Email or Password don't match",
//                 ],
//             ];

//             if (!$this->validate($rules, $errors)) {
			
//                 return view('auth/login', [
//                     "validation" => $this->validator,
//                 ]);

//             } else {
//                 $model = new UserModel();

//                 $user = $model->where('email_address', $this->request->getVar('email_address'))
//                     ->first();
//                 if(isset($user))
//                 {
//                     session()->setFlashdata('success','1');
//                     // Storing session values
//                     $this->setUserSession($user);
//                     // Redirecting to dashboard after login
//                     return redirect()->to(base_url('dashboard'));

//                 }
//                 else
//                 {
//                     session()->setFlashdata('success','0');
//                     return redirect()->to('/');
//                 }
                
//             }
//         }
//         return view('auth/login');
//     }
// 	//function for setting session data of user
// 	private function setUserSession($user)
//     {
//         $data = [
//             'id' => $user['id'],
//             'name' => $user['full_name'],
//             'email' => $user['email_address'],
//             'isLoggedIn' => true,
//         ];

//         session()->set($data);
//         return true;
//     }

// 	public function logout()
//     {
//         session()->destroy();
//         return redirect()->to('login');
//     }

//     public function forgotPasswordPage()
//     {
//         return view('auth/forgotpassword');
//     }
//     public function resetPasswordPage($token)
//     {
//         $data=[
//             'token'=>$token
//         ];    
//         return view('auth/resetpassword',$data);
//     }
//     public function forgotPassword()
//     {
//         if ($this->request->getMethod() == 'post') 
//         {
//             $rules = [
//                 'email_address' => 'required|min_length[6]|max_length[50]|valid_email'
//             ];

//             $errors = [
//                 'email_address' => [
//                     'required'=>'Please enter your email address',
//                     'valid_email' => 'Invalid Email',
//                 ],
//             ];

//             if (!$this->validate($rules, $errors)) {
			
//                 return view('auth/forgotpassword', [
//                     "validation" => $this->validator,
//                 ]);

//             } 
//             else 
//             {
               
//                 $email_address=$this->request->getVar('email_address');
//                 $model = new UserModel();
//                 $user = $model->where('email_address', $this->request->getVar('email_address'))
//                 ->first(); 
               
//                 if(!empty($user))
//                 {
//                     $token=random_string('alnum',30);
//                     $data=[
//                         'id'=>$user['id'],
//                         'email_address'=>$user['email_address'],
//                         'token'=>$token,
//                         'created_at'=> date('Y-m-d H:i:s',strtotime('+15 minutes',strtotime(date('Y-m-d H:i:s')))),
                        
//                     ];
                    
//                     $password_reset=new Passwordreset();
//                     $password_reset->insert($data);
//                     if($this->sendMail($user,$token))
//                     {
//                         return view('auth/forgotpassword');
//                     }
                    
//                 }
//                 else
//                 {
//                     echo "Email doesn't exist";
//                 }
//             }
//         }
//     }
//     //function for sending resetPassword link
//     private function sendMail($user,$token)
//     {
        
        
//         $message='Hi, '.$user['full_name'].'<br><br>'.
//                 'Your reset password request has been received.'
//                 .'Please click the below link to reset your password.<br><br>'
//                 .'<a href="'.base_url('resetpassword/'.$token).' " class="btn btn success">Click here</a>';
//         $email = \Config\Services::email();
//         $email->setTo($user['email_address']);
//         $email->setFrom('testelsner123@gmail.com','Test Purpose');
//         $email->setSubject('MI Test Purpose');
//         $email->setMessage($message);
//         if($email->send())
//         {
//             return redirect()->to('forgotPassword');
//         }
//         else
//         {
//             $data=$email->printDebugger(['headers']);
//             print_r($data);    
//         }
//     }

//     public function resetPassword()
//     {
//         if($this->request->getMethod()=='post')
//         {
        
//             $rules = [
                
//                 'password' => 'required|min_length[6]|max_length[255]',
//                 'cpassword'=>'required|min_length[6]|max_length[255]|matches[password]',
//             ];

//             $errors = [
//                 'password' => [
//                     'required'=>'Please enter password',
//                     'min_length'=>'Password must be more than 6 letter',
//                 ],
//                 'cpassword'=>[
//                     'required'=>'Please enter confirm password',
//                     'min_length'=>'Password must be more than 6 letter',
//                     'matches[password]'=>'Confirm password and password must be same'
//                 ],
//             ];

//             if (!$this->validate($rules, $errors)) {
			
//                 return view('auth/resetpassword', [
//                     "validation" => $this->validator,
//                 ]);

//             } 
//             else 
//             {
//                 $password_reset=new Passwordreset();
//                 $user=$password_reset->where('token', $this->request->getVar('token'))
//                         ->where('created_at >=', date('Y-m-d H:i:s'))->first();
//                 if(isset($user))
//                 {
                    
//                    $data=[
//                             'password'=> password_hash($this->request->getVar('password'),PASSWORD_DEFAULT),
//                         ];
                   
//                         $model=new UserModel();
//                         if($model->update($user['id'],$data))
//                         {
//                             $password_reset->delete($user['id']);
//                             return redirect()->to('login');
//                         }
//                 }
//                 else
//                 {
//                     echo "Token not found";
//                 }


            
    
//             }
            
            
//         }        
//     }

// } -->
