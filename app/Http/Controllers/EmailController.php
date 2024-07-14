<?php

namespace App\Http\Controllers;

use App\Mail\WelcomeMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class EmailController extends Controller
{
    public function sendWelcomeEmail()
    {
        $title = 'Bienvenido a mi correo';
        $body = 'Muy buenas, Empresa ';

        Mail::to('dcarrillo@istta.edu.pe')->send(new WelcomeMail($title, $body));

        return "Email enviado correctamente!";
    }
}
