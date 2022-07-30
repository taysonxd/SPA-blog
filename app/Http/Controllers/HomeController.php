<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth')->except(['spa', 'home']);
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }

    public function spa() {
      return view('spa');
    }

    public function home() {

      $posts = Post::with(['category', 'tag'])->paginate(3);

      if(request()->wantsJson()) {
        return $posts;
      }

      return view('views.spa');
    }
}
