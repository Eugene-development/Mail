<?php


namespace App\Http\Controllers\Mail;


use App\Http\Controllers\Controller;
use App\Mail\PhoneMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class Phone extends Controller
{
    public function send(Request $request)
    {
        $token = $request->bearerToken();
        if($token == '3'){
            Mail::to('indexpro24@gmail.com')->send(new PhoneMail($request));
            Mail::to('gostremont-direct@yandex.ru')->send(new PhoneMail($request));
        }
    }
}
