<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\Category;

class PagesController extends Controller
{
  public function archive() {

    $data = [
      'authors' => Post::select('author')->take(4)->latest()->get(),
      'categories' => Category::latest()->take(4)->get(),
      'posts' => Post::latest('published_at')->take(5)->get(),
      'archive' => Post::selectRaw('year(published_at) year')
                        ->selectRaw('monthname(published_at) month')
                        ->selectRaw('count(*) posts')
                        ->groupBy('year', 'month')
                        ->orderBy('year', 'DESC')
                        ->get()
    ];

    if(request()->wantsJson())
      return $data;

    return view('views.spa');
  }
}
