<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Http\Requests\PostStoreRequest;
use App\Http\Requests\PostUpdateRequest;
use App\Http\Resources\PostResource;
use App\Models\Post;

class PostController extends Controller
{
    public function index()
    {
        return PostResource::collection(Post::all());
    }

    public function store(PostStoreRequest $request)
    {
        return Post::create($request->validated());
    }

    public function show(Post $post)
    {
        return PostResource::make($post);
    }

    public function update(PostUpdateRequest $request, Post $post)
    {
        $post->update($request->validated());


        return PostResource::make($post);
    }

    public function destroy(Post $post)
    {
        $post->delete();

        return response()->json(['message' => 'Пост удален']);
    }
}
