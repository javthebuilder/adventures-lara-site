<?php

namespace App\Http\Controllers;

use App\Models\Content;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;
use Session;
class ContentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //dd('index');
        


            return view('contents.index')
            ->with(
                [
                'contents' => Content::paginate(20),
                ]
            );
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('contents.create')
        ->with(
            [
     

            ]
        );
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $content= new Content;
        
        $content->name = str_slug($request->main_title_header);
        $content->main_title_header = $request->main_title_header;
        $content->secondary_title_header = $request->secondary_title_header;
        $content->content_body_text = $request->content_body_text;
        
        $userId = Auth::id();
        $content->created_by = $userId;

        if($request->hasFile('main_image')){
            $file_one = $request->file('main_image');
            $extension = $file_one->getClientOriginalExtension();//getting image extension
            $filename_one = 'CI-'.time(). '.'. $extension;
            $path = base_path().'/public/uploads/';

            $file_one->move($path , $filename_one);
            $content->main_image = $filename_one;
        }else{
            $content->main_image = '';
        }
        $content->save();

        $request->session()->flash('success', 'You have created a new content');
        return redirect(route('content-list'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Content  $content
     * @return \Illuminate\Http\Response
     */
    public function show(Content $content)
    {
        return view('contents')->with(
            [
                'contents' => Content::where('status', '=', 'A')->get()
            ]
        );
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Content  $content
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return view('contents.edit')->with(

            [
                'content' => Content::find($id),
                
            ]
            );
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Content  $content
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $content = Content::find($id);

        if(!$content){
            $request->session()->flash('error', 'Problem on updating the metaltype.');
            //return redirect(route('item_metal_types.metal_types.index'));
            return redirect(route('content-list'));
        }

        
        $content->name = $request->name;
        $content->main_title_header = $request->main_title_header;
        $content->secondary_title_header = $request->secondary_title_header;
        $content->content_body_text = $request->content_body_text;        

        $userId = Auth::id();
        $content->updated_by = $userId;

        if($request->hasFile('main_image')){
            $file_one = $request->file('main_image');
            $extension = $file_one->getClientOriginalExtension();//getting image extension
            $filename_one = 'CI-'.time(). '.'. $extension;
            $path = base_path().'/public/uploads/';

            $file_one->move($path , $filename_one);
            $content->main_image = $filename_one;
        }else{
            //$content->main_image = '';
        }
        
        $content->save();

        

        $request->session()->flash('success', 'You have updated the metaltype info');
        //return redirect(route('item_metal_types.metal_types.index'));
        return redirect(route('content-list'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Content  $content
     * @return \Illuminate\Http\Response
     */
    public function destroy($id, Request $request)
    {
        Content::destroy($id);
        $request->session()->flash('success', 'You have deleted a content');
        return redirect(route('content-list'));
    }
}
