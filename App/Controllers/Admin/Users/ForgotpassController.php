<?php

namespace App\Controllers\Admin\Users;

use System\Core\Controller;

class ForgotpassController extends Controller
{
    public function index() {
       return $this->view('admin/users/forgotpass');
    }
}

?>