<?php

namespace App\controllers;

use App\models\Model;
use App\models\User;

class HomeController extends Controller
{

    public function index()
    {
        $user = new User;
        $users = $user->select()->paginate(3)->get();

        $this->view('home', [
            'users' => $users,
            'title' => 'Home',
            'links' => $user->links(),
        ]);
    }

}