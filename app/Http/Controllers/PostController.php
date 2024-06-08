<?php

namespace App\Http\Controllers;
use DB;
use App\Models\Post;
use Illuminate\Http\Request;
use PhpParser\Model\Stmt\Return_;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $posts= Post::all();
        return view("posts.index")->with("posts",$posts);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("posts.create");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {   $tags=implode(",",$request->tags);
        $post=new Post;
        if($request->hasfile('image')){
                $img=$request['image'];
                $imgname=time().".".$img->getClientOriginalExtension();
                $img->move('./assets/imgs',$imgname);
        }
        $post->create(
        [  'title'=>$request['title'],
            'description'=>$request['description'],
            'tags'=>$tags,
            'show'=>$request->show,
            'categories'=>$request->category,
            'image'=>$imgname
        ]);
        return redirect()->route('post.index')->with("success","post add successfuly");
    }

    /**
     * Display the specified resource.
     */
    public function show(Post $post)
    {
        /* $post= DB::table("posts")->where("id",$id)->first(); */
        return view("posts.show")->with("post",$post);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Post $post)
    {
        return view("posts.edit")->with("post",$post);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Post $post)
    {
        $imgname=$post->image;
        if($request->hasfile('image')){
        $img=$request['image'];
        $imgname=time().".".$img->getClientOriginalExtension();
        $img->move('./assets/imgs',$imgname);
        }
        $tags=implode(",",$request->tags);
        $post->update([
                    'title'=>$request['title'],
                    'description'=>$request['description'],
                    'tags'=>$tags,
                    'show'=>$request->show,
                    'categories'=>$request->category,
                    'image'=>$imgname
        ]);
        return redirect()->route('post.index')->with("success","post add successfuly");

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Post $post)
{
    $post->delete();
return redirect()->route('post.index')->with("success","post add successfuly");}
}
