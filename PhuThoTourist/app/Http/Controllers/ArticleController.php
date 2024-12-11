<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Articles;
use App\Models\Topics;
use Carbon\Carbon;

class ArticleController extends Controller
{
    public function index(Request $request)
    {
        $query = Articles::query();

        // Lọc theo topic
        if ($request->has('topic')) {
            if ($request->input('topic') != 0) {
                $query->whereHas('topics', function ($q) use ($request) {
                    $q->where('id', $request->input('topic'));
                });
            }
        }

        // Lọc theo từ khóa tìm kiếm
        if ($request->has('search') && $request->search != '') {
            $query->where('title', 'like', '%' . $request->input('search') . '%');
        }

        // Lọc theo khoảng thời gian
        $start_date = $request->start_date ? Carbon::parse($request->start_date)->startOfDay() : now()->subYear()->startOfDay(); 
        $end_date = $request->end_date ? Carbon::parse($request->end_date)->endOfDay() : now()->endOfDay(); 
        
        $query->whereBetween('date', [$start_date, $end_date]);

        // Sắp xếp tăng/giảm
        $sort = $request->input('sort', 'asc'); // Mặc định là 'asc'
        $query->orderBy('title', $sort);

        // Lấy danh sách bài viết
        $articles = $query->with('topics')->paginate(8);


        // Lấy danh sách topic để hiển thị trên giao diện
        $topics = Topics::all();

        // Danh sách 1: 3 bài viết mới nhất
        $latestArticlesTop3 = Articles::orderBy('date', 'desc')->take(3)->get();

        // Danh sách 2: 10 bài viết tiếp theo
        $latestArticlesNext10 = Articles::orderBy('date', 'desc')->skip(3)->take(10)->get();

        return view('blog', compact('articles', 'topics', 'start_date', 'end_date', 'latestArticlesTop3', 'latestArticlesNext10'));
    }

    public function show($id)
    {
        // Lấy bài viết hiện tại cùng với topics liên quan
        $article = Articles::with('topics')->findOrFail($id);

        // Lấy danh sách các bài viết liên quan qua topics
        $relatedArticles = Articles::whereHas('topics', function ($query) use ($article) {
            $query->whereIn('id', $article->topics->pluck('id')); // Lấy các topic ID liên quan
        })
        ->where('id', '!=', $article->id) 
        ->limit(4) // Lấy tối đa 5 bài viết
        ->get();

        return view('detailblog', compact('article', 'relatedArticles'));
    }



}
