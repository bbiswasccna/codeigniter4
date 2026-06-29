<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;

class Users extends BaseController
{
    public function index()
    {
        $students = ["John Doe", "Jane Smith", "Alice Johnson"];

        return view('user_page', ['students' => $students]);
    }

    public function show($id)
    {
        echo "Showing user with ID: " . $id;
    }
}
