<?php

namespace App\Http\Controllers;

use App\Models\Tag;
use Illuminate\Http\Request;

class TagController extends Controller
{
    public function index(){
        $tags = Tag::all();
        return view('tags.index', compact('tags'));
    }

    public function show($id){
        $tag = Tag::with('products')->findOrFail($id);
        return view('tags.show', compact('tag'));
    }
}
