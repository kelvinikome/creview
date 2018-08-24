<?php

namespace App\Http\Controllers;

use App\Post;
use App\Tag;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use DB;

class PageController extends Controller
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
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user_id = Auth::id();
        $pages = DB::table('pages')->where('author_id', $user_id)->get();
        return view('page.my-pages')->with('pages', $pages);
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
        $page_uri = lcfirst(str_replace(' ','',$request->input('title')));
        $data = array(
            'title' => $request->input('title'),
            'uri' => $page_uri,
            'tagline' => $request->input('tagline'),
            'about' => $request->input('about'),
            'category' => $request->input('category'),
            'author_id' => $request->input('author_id')
        );
        DB::table('pages')->insert($data);

        return redirect('/pages');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $page = DB::table('pages')->where('uri', $id)->first();
        $data = [
            'page' => $page,
            'posts' => DB::table('page_post')->where('page_id', $page->id)->get(),
            'user' => Auth::user()
        ];
        return view('page.home')->with('data', $data);
    }

    public function showAbout($id)
    {
        $page = DB::table('pages')->where('uri', $id)->first();
        $data = [
            'page' => $page,
            'posts' => DB::table('page_post')->where('page_id', $page->id)->get(),
            'user' => DB::table('users')->where('id', $page->author_id)->first()
        ];
        return view('page.about')->with('data', $data);
    }

    public function getPage($id)
    {
        $page = DB::table('pages')->where('uri', $id)->first();
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
            'page' => DB::table('pages')->where('uri', $id)->first(),
            'services' => DB::table('page_service')->where('page_id', $page->id)->get(),
            'posts' => DB::table('page_post')->where('page_id', $page->id)->get()
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
        return redirect('/pages');
    }
}
