<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class ShowcaseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
            'name' => $request->input('name'),
            'about' => $request->input('about'),
            'page_id' => $request->input('page_id')
        );
        DB::table('page_service')->insert($data);

        return redirect('page/'. $request->input('page_id').'/edit');
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
            'page' =>  $page,
            'user' => DB::table('users')->where('id', $page->author_id)->first(),
            'showcase' => DB::table('showcase')->get()
        ];
        return view('page.showcase.show')->with('data', $data);
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
        $page = DB::table("page_service")->where('id', $id)->first();
        DB::table("page_service")->where('id', $id)->delete();
        return redirect('page/'. $page->page_id.'/edit');
    }
}
