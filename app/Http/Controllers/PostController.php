<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @/return \Illuminate\Http\Response
     */
    public function index($id)
    {
        return 'The number is ' . $id;
    }

    /**
     * Show the form for creating a new resource.
     *
     * //@/return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return 'I am the method that created stuff :)';
    }

    /**
     * Store a newly created resource in storage.
     *
     * @/param  \Illuminate\Http\Request  $request
     * @r/eturn \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @/param  int  $id
     * @/return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return 'this is the show method yaay. ID is ' . $id;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @/param  int  $id
     * @/return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @/param  \Illuminate\Http\Request  $request
     * @p/aram  int  $id
     * @re/turn \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @/param  int  $id
     * @r/eturn \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function contact() {
        $people = [];
        return view('contact', compact('people'));
    }

    public function show_post($id, $user, $password) {
        //return view('post')->with('id', $id);
        return view('post', compact('id', 'user', 'password'));
    }
}
