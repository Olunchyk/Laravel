<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Models\Post;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class PostController extends Controller
{
    public function index() {
        $form = false;
        if(session('form')) {
            $form = session('form');
        }

        return view('pages/add', array('form' => $form));
    }

    public function add(Request $request)
    {
        $request->session()->forget('status');
        //$request->session()->flush();
        $title = $request->title;
        $text = $request->text;
        $photo = $request->photo;

        $post = DB::table('posts')
            ->where('title', '=', $title)
            ->get();

        if(!$post) {
            $post = new Post();
            $post->title = $title;
            $post->text = $text;
            $post->created_at = date('Y-m-d H:i:s', time());
            $post->updated_at = date('Y-m-d H:i:s', time());
            $post->photo = $photo;

            if($post->save())
                $request->session()->flash('success', 'Cool!!!');
            else
                $request->session()->flash('success', 'Error!!!');

            return redirect('/');
        } else {
            $request->session()->put('form', array('title' => $title, 'text' => $text));
            $request->session()->flash('status', 'This post already exists');

            return redirect('add');
        }
    }

    public function jxPhoto(Request $request)
    {
        $file = $request->file;
        $ext = $file->getClientOriginalExtension();
        $fileName = time() . '.' . $ext;
        if($file->move('image/posts/', $fileName)) {
            $path = 'image/posts/' . $fileName;
        } else {
            $path = false;
        }

        return response($path);
    }
    public function post(Request $request) {
        $post_id = $request->id;

        $post = DB::table('posts')
            ->where('id', '=', $post_id)
            ->first();

        return view('pages/post', array('post' => $post));
    }
}
