<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
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
        return view('page.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('page.create');
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
            'category' => $request->input('category')
        );
        DB::table('pages')->insert($data);

        echo 'done';
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
        return view('page.show')->with('page', $page);
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
            'services' => DB::table('page_service')->where('page_id', $id)->get()
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
        //
    }
}
