<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Post;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
        $posts = Post::latest()->paginate(6);
        return view('Blog.Blog', compact('posts'));
    }

    public function PostDetails($id)
    {
        $post = Post::find($id);
        $recentPosts = Post::latest()->paginate(4);
        return view('Blog.Blog-Details', compact('post', 'recentPosts'));
    }

    public function addpost()
    {
        $categories = Category::all();
        return view('Admin.Post.Add-Post', compact('categories'));
    }

    public function store(Request $request)
    {
        $post = new Post();
        $this->savePostData($post, $request);
        $post->save();

        return redirect()->back()->with('message', 'Post created successfully');
    }

    public function show()
    {
        $posts = Post::all();
        return view('Admin.Post.View-Post', compact('posts'));
    }

    public function edit($id)
    {
        $post = Post::find($id);
        $categories = Category::all();

        return view('Admin.Post.Edit-Post', compact('post', 'categories'));
    }

    public function update(Request $request, $id)
    {
        $post = Post::find($id);
        $this->savePostData($post, $request);
        $post->save();

        return redirect()->back()->with('message', 'Post updated successfully');
    }

    public function destroy($id)
    {
        $post = Post::find($id);

        // Delete associated images
        $this->deleteImages($post);

        $post->delete();
        return redirect()->back()->with('success', 'Post deleted successfully.');
    }

    private function savePostData($post, $request)
    {
        $post->title = $request->input('title');
        $post->content1 = $request->input('content1');
        $post->content2 = $request->input('content2');
        $post->note = $request->input('note');
        $post->content3 = $request->input('content3');
        $post->subtitle1 = $request->input('subtitle1');
        $post->content4 = $request->input('content4');
        $post->subtitle2 = $request->input('subtitle2');
        $post->content5 = $request->input('content5');
        $post->category_id = $request->input('category_id');

        // Handle image uploads
        $post->image1 = $this->handleImageUpload($request, $post->image1, 'image1');
        $post->image2 = $this->handleImageUpload($request, $post->image2, 'image2');
        $post->image3 = $this->handleImageUpload($request, $post->image3, 'image3');
    }

    private function handleImageUpload($request, $existingImage, $inputName)
    {
        if ($image = $request->file($inputName)) {
            if ($existingImage) {
                Storage::delete('public/' . $existingImage);
            }
            $destinationPath = 'images/';
            $postImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
            $image->move($destinationPath, $postImage);
            return $destinationPath . $postImage;
        }

        return $existingImage;
    }

    private function deleteImages($post)
    {
        if ($post->image1) {
            Storage::delete('public/' . $post->image1);
        }
        if ($post->image2) {
            Storage::delete('public/' . $post->image2);
        }
        if ($post->image3) {
            Storage::delete('public/' . $post->image3);
        }
    }
}
