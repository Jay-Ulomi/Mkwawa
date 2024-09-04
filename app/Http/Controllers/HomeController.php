<?php

namespace App\Http\Controllers;

use App\Models\Event;
use App\Models\Post;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $events = Event::latest()->take(4)->get();
        $posts = Post::latest()->take(3)->get();

        return view('index', compact('events', 'posts'));
    }
}
