<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Repository\Contacts\PostRepositoryInterface;
use Illuminate\Http\Request;
use Illuminate\View\View;

class PostController extends Controller
{
    public $post;

    public function __construct(PostRepositoryInterface $post)
    {
        $this->post = $post;
    }

    /**
     * Display a listing of the resource.
     */
    public function index(): View
    {
        return view('welcome',[
            'posts' => $this->post->index()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $this->post->store($request);
        return redirect()->route('/')->with('success', 'Create Successful');
    }

    /**
     * Display the specified resource.
     */
    public function show(Post $post)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id): View
    {
        return view('edit',[
            'post' => $this->post->edit($id),
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $this->post->update($id, $request);
        return redirect()->route('/')->with('success', 'Update Successful');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $this->post->destroy($id);
        return redirect()->route('/')->with('success', 'Delete Successful');
    }
}
