<?php


namespace App\Http\Controllers\Mail;


use App\Http\Controllers\Controller;
use App\Mail\CartMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;


class Cart extends Controller
{
    public function send(Request $request)
    {
        Mail::to('indexpro24@gmail.com')->send(new CartMail($request));
        //        Mail::to('orbita88yuliya@mail.ru')->send(new CartMail($request));

        return $request;
    }

}
