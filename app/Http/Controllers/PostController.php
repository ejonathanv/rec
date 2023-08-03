<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\Post;
use App\Models\Category;
use Illuminate\Support\Str;
use App\Http\Requests\StorePostRequest;
use App\Http\Requests\UpdatePostRequest;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $posts = Post::latest()->paginate(10);
        return view('admin.posts.index', compact('posts'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.posts.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StorePostRequest $request)
    {
        $post = new Post();
        $post->user_id = auth()->user()->id;
        $post->date = Carbon::parse($request->date);
        $post->title = $request->title;
        $post->resume = $request->resume;
        $post->content = $request->content;
        $post->slug = Str::slug($request->title);
        $post->status = $request->draft ? 'draft' : 'published';

        if($request->has('category')){
            $category = Category::firstOrCreate([
                'name' => $request->category
            ]);
            $post->category_id = $category->id;
        }

        if($request->has('cover')){
            // We need to upload the $request->cover img and store the image in the public/uploads folder
            $cover = $request->file('cover');
            $coverName = time() . '_' . $cover->getClientOriginalName();
            $cover->move(public_path('uploads'), $coverName);
    
            // We need to update the $post->cover with the new image name
            $post->cover = $coverName;

        }

        $post->save();


        return redirect()->route('posts.show', $post)->with('success', 'Se ha creado la publicación correctamente');
    }

    /**
     * Display the specified resource.
     */
    public function show(Post $post)
    {
        return view('admin.posts.show', compact('post'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Post $post)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdatePostRequest $request, Post $post)
    {
        $post->date = Carbon::parse($request->date);
        $post->title = $request->title;
        $post->resume = $request->resume;
        $post->content = $request->content;
        $post->slug = Str::slug($request->title);
        $post->status = $request->draft ? 'draft' : 'published';
        
        if($request->has('category')){
            $category = Category::firstOrCreate([
                'name' => $request->category
            ]);
            $post->category_id = $category->id;
        }

        if($request->has('cover')){
            // We need to upload the $request->cover img and store the image in the public/uploads folder
            $cover = $request->file('cover');
            $coverName = time() . '_' . $cover->getClientOriginalName();
            $cover->move(public_path('uploads'), $coverName);
    
            // We need to update the $post->cover with the new image name
            $post->cover = $coverName;
        }

        $post->save();



        return redirect()->route('posts.show', $post)->with('success', 'La publicación se actualizó con éxito.');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Post $post)
    {
        $post->delete();
        return redirect()->route('posts.index')->with('success', 'La publicación se eliminó con éxito.');
    }
}
