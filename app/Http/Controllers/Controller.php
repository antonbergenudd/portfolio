<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function send_email() {
        $email = $_POST['email'];
        $name = $_POST['name'];
        $body = $_POST['body'];
        $project_type = $_POST['project_type'];

        mail(
            'antonbergenudd@hotmail.com',
            $project_type . ' project request',
            $project_type . "\r\n\r\n" . 'Name: ' . $name . "\r\n" . 'Description: ' . $body . "\r\n" ,
            "From: " . $email . "\r\n"
        );
    }

    public function index()
    {
        $toggle_paragraph = true;
        $colors = ['red', 'blue', 'black'];
        $name = '';

        return view('main', compact('name', 'toggle_paragraph', 'colors'));
    }
}
