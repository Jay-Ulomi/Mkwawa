<?php

namespace App\Http\Controllers;

use App\Models\Event;
use App\Models\Post;
use CreateVisitorLogsTable;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class AdminController extends Controller
{
    public function index(){
        $totalVisits = DB::table('visitor_logs')->count();
        $totalPosts = Post::count();
        $totalEvents = Event::count();
       
        return view('Admin.Index', compact('totalVisits','totalPosts','totalEvents'));
    }
}
