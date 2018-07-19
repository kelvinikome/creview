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
        $page = DB::table('pages')->where('id', $id)->first();
        $data = [
            'page' => $page,
            'services' => DB::table('page_service')->where('page_id', $id)->get(),
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
        $data = array(
            'title' => $request->input('title'),
            'content' => $request->input('content'),
            'page_id' => $request->input('page_id')
        );
        DB::table('page_post')->insert($data);

        return redirect('/'. $request->input('page_id'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($pageId, $postId)
    {
        $post = DB::table('page_post')->where([
            ['id', '=', $postId],
            ['page_id', '=', $pageId],
        ])->first();

        $page = DB::table('pages')->where('id', $pageId)->first();

        $data = [
            'page' => $page,
            'post' => $post,
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
        DB::table("page_post")->where('id', $id)->delete();
        return redirect('/'. $pageId.'/post');
    }
}
