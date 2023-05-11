<?php

namespace App\Http\Controllers;

use App\Models\News;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\View\View;

class NewsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public static function index(Request $request)
    {
        $news = News::paginate(10);
        return view('news.index', ['news' => $news, 'search' => $request->search]);
    }

    /**
     * Display the specified resource.
     */
    public function show(News $news)
    {
            // dd($news);
            return view('news.show', ['news' => $news]);
    }

}
