<?php

namespace App\Controller;

use App\Model\Tag;
use Illuminate\Http\RedirectResponse;

class TagController
{
    public function index()
    {
        $tags = \App\Model\Tag::all();

        return view('tag/tag-table', compact('tags'));
    }

    public function create()
    {
        $tag = new Tag();

        return view('tag/tag-form', compact('tag'));
    }

    public function store()
    {
        $data = request()->all();

        $tag = new Tag();
        $tag->title = $data['title'];
        $tag->slug = $data['slug'];
        $tag->save();

        return new RedirectResponse('/');
    }

    public function edit($id)
    {
        $tag = \App\Model\Tag::find($id);

        return view('tag/tag-form-edit', compact('tag'));
    }

    public function update($id)
    {
        $tag = \App\Model\Tag::find($id);

        $data = request()->all();

        $tag->title = $data['title'];
        $tag->slug = $data['slug'];
        $tag->save();

        return new RedirectResponse('/');
    }

    public function destroy($id)
    {
        $tag = \App\Model\Tag::find($id);
        $tag->delete();

        return new RedirectResponse('/');
    }
}
