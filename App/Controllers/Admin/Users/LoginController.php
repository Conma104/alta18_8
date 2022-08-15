<?php
namespace App\Controllers\Admin\Users;

use System\Core\Controller;
use System\Core\Session;
use App\Models\UserModel;

class LoginController extends Controller
 {
   protected $userModel;
    public function __construct()
    {
      $this->userModel = new UserModel;
    }
  

    public function index()
    {
      // $pass = 123;
      // $has= '$2y$10$t1gGqOhYoMOd/QvWWcckPeJdZm2aCXPeJRQ.jTWsdmnUw9VC.dczC';
      // dd(password_hash($pass, PASSWORD_BCRYPT));
      // dd(password_verify($pass, $has));
        return $this->view('admin/users/login');
    }

    public function store() 
    {
       $this->isMethod('POST');
       $email = $this->input('email');
       $password = $this->input('password');
       $remember = (int) $this->input('remember');

       if (is_null($email) || is_null($password)) 
       {
       Session::set('error', 'vui long nhap email va mat khau');
       return back();
       }

       $user = $this->userModel->getInfoByEmail($email);
        if(is_null($user)  || !password_verify($password, $user['password'])) {
          session::set('error', 'Teen dang nhap va mat khau k ton tai');
          return back();
        }

        // kiem tra level hoac active
        if($this->user['is_active'] != 1) {
          Session::set('error','Tai khoan da bi khoa vui long lien he lai sau ');
          return back();
      }


        // người dùng lưu thông tin
        if($remember != 0) {
          $lifetime = $remember == 0 ? 3600 : (3600 * 24 * 30);
          setcookie('email', $email, time() + $lifetime, '/');
          setcookie('password', $password, time() + $lifetime, '/');

        }

        // setSession
        Session::set('user_id', $user['id']);
        return redirect('/admin');




       // Set the maxlifetime of session
      // ini_set( "session.gc_maxlifetime", $lifetime );

      // // Also set the session cookie timeout
      // ini_set( "session.cookie_lifetime", $lifetime );
      // // Now start the session 
      // session_start();
      // // Update the timeout of session cookie
      // $sessionName = session_name();

      // if( isset( $_COOKIE[ $sessionName ] ) ) {

      //   setcookie( $sessionName, $_COOKIE[ $sessionName ], time() + $lifetime, '/' );
      //   setcookie('email', $email, time() + $lifetime, '/');

      //   return redirect('/admin');
      // }

      session:: set ('error', 'có lỗi xin vui long thử lại ');
      return back();
    }
 }
