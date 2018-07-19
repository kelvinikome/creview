<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use DB;

class PageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $user_id = Auth::id();
        return view('page.create')->with('user_id', $user_id);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = array(
            'title' => $request->input('title'),
            'about' => $request->input('about'),
            'category' => $request->input('category'),
            'author_id' => $request->input('author_id')
        );
        DB::table('pages')->insert($data);

        return redirect('/home');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $page = DB::table('pages')->where('id', $id)->first();
        $data = [
            'page' => $page,
            'services' => DB::table('page_service')->where('page_id', $id)->get(),
            'posts' => DB::table('page_post')->where('page_id', $id)->get(),
            'user' => Auth::user()
        ];
        return view('page.show')->with('data', $data);
    }

    public function showAbout($id)
    {
        $page = DB::table('pages')->where('id', $id)->first();
        $data = [
            'page' => $page,
            'services' => DB::table('page_service')->where('page_id', $id)->get(),
            'posts' => DB::table('page_post')->where('page_id', $id)->get(),
            'user' => DB::table('users')->where('id', $page->author_id)->first()
        ];
        return view('page.about')->with('data', $data);
    }

    public function getPage($id)
    {
        $page = DB::table('pages')->where('title', $id)->first();
        return view('page.show')->with('page', $page);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        
        $data = [
            'page' => DB::table('pages')->where('id', $id)->first(),
            'services' => DB::table('page_service')->where('page_id', $id)->get(),
            'posts' => DB::table('page_post')->where('page_id', $id)->get()
        ];
        return view('page.edit')->with('data', $data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        DB::table("page_post")->where('page_id', $id)->delete();
        DB::table("pages")->where('id', $id)->delete();
        return redirect('/home');
    }
}
