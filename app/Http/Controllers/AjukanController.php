<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Ajukan;

class AjukanController extends Controller
{
    // get all posts
    public function index()
    {
        return response([
            'ajukans' => Ajukan::orderBy('created_at', 'desc')->with('user:id,name,image')
            ->get()
        ], 200);
    }

    // get single post
    public function show($id)
    {
        return response([
            'ajukan' => Ajukan::where('id', $id)->get()
        ], 200);
    }

    // create a post
    public function store(Request $request)
    {
        //validate fields
        $attrs = $request->validate([
            'namatanaman' => 'required|string',
            'isi' => 'required|string'
        ]);

        $image = $this->saveImage($request->image, 'ajukans');

        $ajukan = Ajukan::create([
            'namatanaman' => $attrs['namatanaman'],
            'isi' => $attrs['isi'],
            'user_id' => auth()->user()->id,
            'image' => $image
        ]);

        // for now skip for post image

        return response([
            'message' => 'Ajukan created.',
            'ajukan' => $ajukan,
        ], 200);
    }

    // update a post
    public function update(Request $request, $id)
    {
        $ajukan = Ajukan::find($id);

        if(!$ajukan)
        {
            return response([
                'message' => 'Ajukan not found.'
            ], 403);
        }

        if($ajukan->user_id != auth()->user()->id)
        {
            return response([
                'message' => 'Permission denied.'
            ], 403);
        }

        //validate fields
        $attrs = $request->validate([
            'isi' => 'required|string'
        ]);

        $ajukan->update([
            'isi' =>  $attrs['ajukan']
        ]);

        // for now skip for post image

        return response([
            'message' => 'Ajukan updated.',
            'ajukan' => $ajukan
        ], 200);
    }

    //delete post
    public function destroy($id)
    {
        $ajukan = Ajukan::find($id);

        if(!$ajukan)
        {
            return response([
                'message' => 'Ajukan not found.'
            ], 403);
        }

        if($ajukan->user_id != auth()->user()->id)
        {
            return response([
                'message' => 'Permission denied.'
            ], 403);
        }

        $ajukan->delete();

        return response([
            'message' => 'Post deleted.'
        ], 200);
    }
}