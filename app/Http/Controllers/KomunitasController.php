<?php
namespace App\Http\Controllers;

use App\Models\Komunitas;
use App\Models\Comment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class KomunitasController extends Controller
{
    // Menampilkan daftar informasi dengan status "request"
    public function index()
    {
        Carbon::setLocale('id');
        $informasi = DB::table('posts')
            ->join('users', 'posts.user_id', '=', 'users.id')
            ->leftJoin('comments', 'posts.id', '=', 'comments.post_id')
            ->select(
                'posts.id',
                'posts.body',
                'posts.created_at',
                'users.name',
                DB::raw('COUNT(comments.id) as jumlah_komentar')
            )
            ->groupBy('posts.id', 'posts.body', 'posts.created_at', 'users.name')
            ->get();
        return view('komunitas.index', compact('informasi'))->with('i', (request()->input('page', 1) - 1) * 5);
    }

    public function delete($id)
    {
        
    }

    // Menampilkan detail informasi
    public function show($id)
    {
        Carbon::setLocale('id');
        $posts = DB::table('posts')
            ->select(
                'posts.body',
                'posts.image',
                'users.name',
                'posts.created_at',
                DB::raw('COUNT(DISTINCT comments.id) as `comment_count`'),
                DB::raw('COUNT(DISTINCT likes.id) as `like_count`')
            )
            ->join('users', 'users.id', '=', 'posts.user_id')
            ->leftJoin('comments', 'comments.post_id', '=', 'posts.id')
            ->leftJoin('likes', 'likes.post_id', '=', 'posts.id')
            ->where('posts.id', '=', $id)
            ->groupBy('posts.id', 'posts.body', 'posts.image', 'users.name', 'posts.created_at')
            ->first();

        $comments = DB::table('comments')
            ->select(
                'users.name',
                'comments.comment',
                'comments.created_at'
            )
            ->join('users', 'user_id', '=', 'users.id')
            ->where('comments.post_id', '=', $id)
            ->get();

        // $informasi = Komunitas::findOrFail($id);
        return view('komunitas.show', ['posts'=>$posts, 'comments'=>$comments]);
    }

}
