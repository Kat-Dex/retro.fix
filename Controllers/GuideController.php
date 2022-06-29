<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Guide;

class GuideController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $guides = Guide::all();
        return view('guides', compact('guides'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('guide_new');
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
        // $rules = array(
        //     'guide_title' => 'required|min:2|max:100',
        //     'guide_tags' => 'required|min:2|max:200',
        //     'guide_description' => 'required|min:10',
        //     'guide_image' => 'required',
        //     'guide_contents' => 'required|min:10',
        // );
        $images = [];
        $texts = [];
        if($request->hasFile('guide_image'))
         {
            foreach($request->file('guide_image') as $image)
            {
                $name = time().rand(1,100).'.'.$image->extension();
                $image->move(public_path('images'), $name);
                $images[] = $name;
            }
         }
         if($request->has('guide_contents'))
         {
            foreach($request->guide_contents as $text)
            {
                $name = time().rand(1,100).'.'.$text->extension();
                $text->move(public_path('text'), $name);
                $texts[] = $name;
            }
         }
        // $this->validate($request, $rules);
        $guide = new Guide();
        $guide->user_id = $request->user_id;
        $guide->guide_title = $request->guide_title;
        $guide->guide_tags = $request->guide_tags;
        $guide->guide_description = $request->guide_description;
        $guide->guide_image = implode(" ", $images);
        $guide->guide_contents = implode(" ", $texts);
        $guide->save();
        return redirect('guide/');
}

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
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
