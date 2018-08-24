<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Tag;
use App\User;
use App\Post;
use DB;

class EntityController extends Controller
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
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $uri = lcfirst(str_replace(' ','',$request->input('query')));
        $page_name = $request->input('query');
        return redirect('/search/'. $request->input('query'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data = DB::table('pages')->get();
        return view('search.index')->with('data', $data);
    }

    public function getById($id)
    {
        $page = DB::table('pages')->where('uri', $id)->first();
        if (!$page){
            $user = DB::table('users')->where('username', $id)->first();
            if ($user){
                $followees = Auth::user()->followees()->pluck('id')->all();
        
                array_push($followees, Auth::user()->id);
        
                $posts = Post::whereIn('user_id', $followees)->latest()->paginate(10);
        
                $tags = Tag::latest()->limit(5)->get();
        
                return view('profile', ['user' => Auth::user(), 'posts' => $posts, 'tags' => $tags]);
            }
            else 
                echo 'not found';
        }
        $data = [
            'page' => $page,
            'posts' => DB::table('page_post')->where('page_id', $page->id)->get(),
            'user' => Auth::user()
        ];
        return view('page.home')->with('data', $data);
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }
}
