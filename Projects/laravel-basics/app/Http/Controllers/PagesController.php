<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function home(){
        $tasks = [
            'Go to Store',
            'Go to market',
            'Go to work'
        ];
        return view('welcome')->withTasks($tasks);
    }

    public function contact(){
        return view('contact');
    }

    public function about(){
        return view('about');
    }
}
