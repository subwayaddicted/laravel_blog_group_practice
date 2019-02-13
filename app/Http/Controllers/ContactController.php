<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use Mail;
use App\Http\Requests\StoreFormvalidation;
use App\Mail\SendMail;
use Illuminate\Http\Request;

class ContactController extends Controller
{
     public function index(){

    	return view('contact');
    }

    public function store(StoreFormvalidation $request)  {

  	Mail::send(new SendMail());

  	return view('thx');

    }}
