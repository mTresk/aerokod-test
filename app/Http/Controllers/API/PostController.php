<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Http\Requests\PostStoreRequest;
use App\Http\Requests\PostUpdateRequest;
use App\Http\Resources\PostResource;
use App\Models\Post;
use Illuminate\Support\Facades\Cache;

class PostController extends Controller
{
    public function index()
    {
        return PostResource::collection(Cache::rememberForever('posts', function () {
            return Post::all();
        }));
    }

    public function store(PostStoreRequest $request)
    {
        $post = Post::create($request->validated());

        return PostResource::make($post);
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
