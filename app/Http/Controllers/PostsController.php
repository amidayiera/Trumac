<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Post;
use DB;

class PostsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //eloquent method
        //$posts=Post::all();

         //return Post::where('title','Post Two')->get();
      //sql method
       //$posts= DB::select('SELECT* FROM posts');
        //order by
  // $posts= Post::orderBy('title','desc')->get();
        //to limit the values
  //$posts= Post::orderBy('title','desc')->take(1)->get();
      //pagination
      $posts= Post::orderBy('name','desc')->paginate(10);
  return view('posts.index')->with('posts',$posts);
    }
#
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
    return view('posts.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this ->validate($request,[
            'name'=>'required',
            'purchase_price'=>'required',
            'refill_price'=>'required',
            'image'=>'image|nullable|max:1999'
        ]);
       //Handle file upload
       if($request->hasFile('image')){
           //Get file name with the extension
           $filenameWithExt=$request->file('image')->getClientOriginalName();
           //Get filename only
           $filename=pathinfo($filenameWithExt,PATHINFO_FILENAME);
           //Get extension only
           $extension=$request->file('image')->getClientOriginalExtension();
            //Filename to store
            $fileNameToStore=$filename.'_'.time().'.'.$extension;
            //Upload Image
            $path=$request->file('image')->storeAs('public/images',$fileNameToStore);
       }
       else{
           $fileNameToStore='noimage.jpg';
       }
        //Create post
        $post= new Post;
        $post->name= $request-> input('name');
        $post->purchase_price=$request->input('purchase_price');
        $post->refill_price=$request->input('refill_price');
        $post->image=$fileNameToStore;
        // $post->comments= $request-> input('comments');
        $post->save();
        return redirect('/posts')->with ('success','Product Uploaded');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
    $post=Post::find($id);
    return view('posts.show')->with('post',$post);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $post=Post::find($id);
    return view('posts.edit')->with('post',$post);
    
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
        $this ->validate($request,[
            'name'=>'required',
            'purchase_price'=>'required',
            'refill_price'=>'required',
            // 'comments'=>'required'
        ]);
        //Handle file upload
       if($request->hasFile('image')){
        //Get file name with the extension
        $filenameWithExt=$request->file('image')->getClientOriginalName();
        //Get filename only
        $filename=pathinfo($filenameWithExt,PATHINFO_FILENAME);
        //Get extension only
        $extension=$request->file('image')->getClientOriginalExtension();
         //Filename to store
         $fileNameToStore=$filename.'_'.time().'.'.$extension;
         //Upload Image
         $path=$request->file('image')->storeAs('public/images',$fileNameToStore);
        }
    
       
        //Update post
        $post=Post::find($id);
        $post->name= $request-> input('name');
        $post->purchase_price=$request->input('purchase_price');
        $post->refill_price=$request->input('refill_price');
        if($request->hasFile('image')){
            $post->image=$fileNameToStore;
        }
        // $post->comments= $request-> input('comments');
        $post->save();
        return redirect('/posts')->with ('success','Product Updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $post=Post::find($id);

        if($post->image !='noimage.jpg'){
            //Delete Image
            Storage::delete('public/images/'.$post->image);
        }
        $post->delete();
        return redirect('/posts')->with ('success','Product Deleted');
    }
}
