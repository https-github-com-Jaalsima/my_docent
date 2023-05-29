<?php

namespace App\Http\Controllers;

use App\ExampleApp;
use Illuminate\Http\Request;
use App\Repository\UserRepository;



class UserController extends Controller
{
    protected $userRepository;

    public function __construct(UserRepository $userRepository)
    {
        $this->userRepository = $userRepository;
    }

    public function index()
    {
        dd($this->userRepository->getAllUsers());
    }
}
