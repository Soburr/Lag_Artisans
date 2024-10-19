<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function redirectToWhatsApp($phone)
    {
        
        $phone = preg_replace('/\D/', '', $phone);

        return redirect()->away("https://wa.me/$phone");
    }
}
