<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use App\Models\Photo;
use Illuminate\Http\Request;

class PhotoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Photo::all()->get();
        return response($data, 200);

    }
    public function getByUsername(Request $request)
    {
        $query = $request->query;
        $data = Photo::where('username', 'like', '%' . $query . '%')->get();
        return response($data, 200);

    }
    public function getByCategory(Request $request)
    {
        $query = $request->query;
        $data = Photo::where('keywords', 'like', '%' . $query . '%')->get();
        return response($data, 200);

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
        //
        $request->validate([
            'username' => 'required',
            'alt_description' => 'required',
            'url' => 'required',
            'keywords' => 'required',

        ]);

        $data = Photo::create($request->all());
        return response($data);

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Photo  $photo
     * @return \Illuminate\Http\Response
     */
    public function show(Photo $photo)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Photo  $photo
     * @return \Illuminate\Http\Response
     */
    public function edit(Photo $photo)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Photo  $photo
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Photo $photo)
    {
        //

        $request->validate([
            'username',
            'liked_by_user',
            'alt_description',
            'url',
            'category',

        ]);

        $technology->update($request->all());
        return response($technology);

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Photo  $photo
     * @return \Illuminate\Http\Response
     */
    public function destroy(Photo $photo)
    {
        $photo->delete();
        return response('Photo deleted successfully', 200);

    }
}