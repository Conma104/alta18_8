<?php
namespace App\Controllers\Admin\Users;

use System\Core\Controller;

 class Personal extends Controller 
 {
    public function index() {
        return $this->view('admin/users/personalpage');
    }
 }


?>