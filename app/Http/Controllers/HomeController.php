<?php

namespace App\Http\Controllers;

use App\Models\Posts;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index(Request $request)
    {
        $posts = Posts::where('title', 'like', '%'.$request->search.'%')
            ->orWhereHas('category', function ($query) use ($request) {
                $query->where('name', 'like', '%'.$request->search.'%');
            })
            ->get();

        return view('home', compact('posts'));
    }
}
