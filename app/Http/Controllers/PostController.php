<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use DB;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($id)
    {
        $page = DB::table('pages')->where('uri', $id)->first();
        $data = [
            'page' => $page,
            'posts' => DB::table('page_post')->where('page_id', $id)->get(),
            'user' => Auth::user()
        ];
        return view('page.post.index')->with('data', $data);
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
        $uri = lcfirst(str_replace(' ','',$request->input('title')));
        $data = array(
            'title' => $request->input('title'),
            'uri' => $uri,
            'content' => $request->input('content'),
            'page_id' => $request->input('page_id')
        );
        DB::table('page_post')->insert($data);

        return redirect('/'. $request->input('uri'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($pageUri, $postUri)
    {
        $pageId = DB::table('pages')->where('uri', $pageUri)->first()->id;
        $postId = DB::table('page_post')->where('uri', $postUri)->first()->id;
        $post = DB::table('page_post')->where([
            ['id', '=', $postId],
            ['page_id', '=', $pageId],
        ])->first();

        $page = DB::table('pages')->where('id', $pageId)->first();
        
        $comments = DB::table('page_comment')->where([
            ['post_id', '=', $postId],
            ['page_id', '=', $pageId],
        ])->get();

        $data = [
            'page' => $page,
            'post' => $post,
            'comments' => $comments,
            'user' => Auth::user()
        ];

        return view ('page.post.show')->with('data', $data);
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
    public function destroy($pageId, $id)
    {
        DB::table("page_post")->where('uri', $id)->delete();
        return redirect('/'. $pageId.'/post');
    }
}
