<?php

namespace App\Http\Controllers;
use App\Models\User;
use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;


class PostController extends Controller
{
    // Menampilkan form untuk membuat post
    public function create()
    {
        return view('menu.post');
    }

public function store(Request $request)
{
    $request->validate([
        'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        'caption' => 'nullable|string|max:255', // Memastikan caption dapat kosong
    ]);

    $imagePath = $request->file('image')->store('uploads', 'public');

    Post::create([
        'user_id' => Auth::id(),
        'image' => $imagePath,
        'caption' => $request->input('caption'),
    ]);

    return redirect()->route('profile')->with('success', 'Post berhasil disimpan!');
}
    public function index()
    {
        $posts = Post::all();
        return view('posts.index', compact('posts'));
    }
    public function like($id)
    {
        $post = Post::findOrFail($id);
        $post->likes += 1;
        $post->save();

        return back()->with('success', 'You liked the post!');
    }
    public function comment(Request $request, $id)
    {
        $request->validate([
            'comments' => 'required|string|max:255',
        ]);

        $post = Post::findOrFail($id);
        $post->addComment($request->comments); // Menggunakan method addComment pada model

        return back()->with('success', 'Comment added successfully!');
    }
    public function profile()
{
    $user = Auth::user();
    $posts = $user->posts;

    return view('menu.profile', compact('user', 'posts'));
}


public function home()
{
    $posts = Post::with('user')->latest()->get();
    return view('menu.home', compact('posts'));
}


public function update(Request $request, $id)
{
    // Temukan postingan berdasarkan ID
    $post = Post::findOrFail($id);

    $request->validate([
        'caption' => 'required|string|max:255',
    ]);

    $post->caption = $request->caption;
    $post->save();

    return redirect()->route('profile')->with('success', 'Caption updated successfully!');
}


public function delete(Post $post)
{
    if ($post->image) {
        Storage::delete($post->image);
    }

    $post->delete();

    return back()->with('success', 'Post deleted successfully!');
}

public function edit($id)
{
    $post = Post::findOrFail($id);
    return view('profile.update', compact('post'));
}

}
