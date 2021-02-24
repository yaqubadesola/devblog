<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Posts;
use App\Models\Visitor;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //Saving and updating unique visitor through Ip Address
        $ip = $_SERVER['REMOTE_ADDR'];
        $check_user = Visitor::where('ip',$ip)->get();
        //dd($check_user);
        if(empty($check_user[0]->ip)){
            $new_visitor = new  Visitor;            
            $new_visitor->ip = $ip;
            $new_visitor->save();
        }else{
            $new_visitor = Visitor::findOrFail($check_user[0]->id)->get();    
            //dd($new_visitor);
            $new_visitor[0]->ip = $ip;
            $new_visitor[0]->touch();
            $new_visitor[0]->save();
        }
        
        $posts = Posts::all();
        return view('blog.index')->with('posts',$posts);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('blog.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {   
        //dd("jbkzdbvb,zj");
        //dd($request->all());
        //
        $request->validate([
            'title'=>'required',
            'detail'=>'required',
        ]);


        if($request->hasFile('feature_image')){
            $image=$request->file('feature_image');
            $FullImage=time().'.'.$image->getClientOriginalExtension();
            $dest=public_path('assets/img/blog'); //for development
            //$dest = base_path().'/assets/img/blog'; // for production
            $image->move($dest,$FullImage);
        }else{
            $FullImage='na';
        }

        $post=new Posts;
        $post->title=$request->title;
        $post->image=$FullImage;
        $post->detail=$request->detail;
        //dd($post);
        $post->save();

        return redirect('posts/create')->with('success','Post saved successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($post)
    {  
        //Saving and updating unique visitor through Ip Address
        $ip = $_SERVER['REMOTE_ADDR'];
        $check_user = Visitor::where('ip',$ip)->get();
        //dd($check_user);
        if(empty($check_user[0]->ip)){
            $new_visitor = new  Visitor;            
            $new_visitor->ip = $ip;
            $new_visitor->save();
        }else{
            $new_visitor = Visitor::findOrFail($check_user[0]->id)->get();    
            //dd($new_visitor);
            $new_visitor[0]->ip = $ip;
            $new_visitor[0]->touch();
            $new_visitor[0]->save();
        }
        
        Posts::find($post)->increment('view_count');
    	$post_detail=Posts::find($post);
    	return view('blog.show')->with('post',$post_detail);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($post)
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
