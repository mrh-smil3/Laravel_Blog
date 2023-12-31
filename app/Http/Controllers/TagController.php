<?php

namespace App\Http\Controllers;

use App\Models\Tag;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class TagController extends Controller
{
    public function index()
    {
        $tags = Tag::all();
        return view('backend.tags.index', compact('tags'));
    }
    public function create()
    {
        return view('backend.tags.create');
    }
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|unique:tags|max:255',
        ]);
        Tag::create($validatedData);
        return redirect()->route('tags.index')->with('success', 'Tag create successfully');
    }
    public function edit(Tag $tag)
    {
        return view('backend.tags.edit', compact('tag'));
    }
    public function update(Request $request, Tag $tag)
    {
        $validatedData = $request->validate([
            'name' => 'required|max:255|unique:tags,name,' . $tag->id,
        ]);
        $tag->update($validatedData);
        return redirect()->route('tags.index')->with('success', 'Tag updated
successfully');
    }
    public function destroy(Tag $tag)
    {
        $tag->delete();
        return redirect()->route('tags.index')->with('success', 'Tag deleted
successfully');
    }
}
