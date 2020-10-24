<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Articles;

class ArticleController extends Controller
{
    public function article($page){
        return "Halaman Artikel ini dengan id".$page; 
    }
    public function index()
    {
    $article = Article::all();
    return view('manage');
    }
    public function add()
    {
     return view('addarticle');
    }
    public function create(Request $request)
    {
    Article::create([
    'title' => $request->title,
    'content' => $request->content,
    'featured_image' => $request->image
    ]);
    return redirect('/manage');
    }
}