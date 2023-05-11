<?php

namespace App\Http\Controllers;

use App\Models\News;
use Illuminate\Http\Request;
use Illuminate\View\View;

class AdminController extends Controller
{
    public static function index() 
    {
        $news = News::paginate(10);
        return view('admin.index', ['news' => $news]);
    }

    public function create()
    {
        return view('admin.create');

    }

    public function store(Request $request)
    {
       $formFields = $request->validate(
        ['title' => 'required',
         'author' => 'required',
         'categories' => 'required',
         'content' => 'required'
        ]
       );
       if ($request->hasFile('photo'))
       {
       // dd($request);
        $formFields['photo'] = $request->file('photo')->store('photos', 'public');
       }
       News::create($formFields);
       return redirect('/admin')->with('message', 'News created successfully');
    }

    public function destroy($id)
    {
        News::destroy($id);
        return redirect('/admin')->with('message', 'Post deleted successfully.');
    }

    public function edit(News $admin)
    {
    //    dd($news);
       return view('admin.edit', ['admin' => $admin]);
    }

    public function  update(Request $request, News $admin) 
    {

        $formFields = $request->validate(
            ['title' => 'required',
             'author' => 'required',
             'categories' => 'required',
             'content' => 'required'
            ]
           );

           if ($request->hasFile('photo'))
           {
           // dd($request);
            $formFields['photo'] = $request->file('photo')->store('photos', 'public');
           }

          $admin->update($formFields);

         return redirect('/admin')->with('message', 'News updated successfully');

    }

}
