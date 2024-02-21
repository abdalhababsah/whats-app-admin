<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SendWhatsAppController extends Controller
{
    public function index(){
        return view('pages.send-whats-app.list');
    }
}
