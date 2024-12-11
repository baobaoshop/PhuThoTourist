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
        $query->whereHas('topics', function ($q) use ($request) {
            $q->where('id', $request->input('topic'));
        });
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

    return view('blog', compact('articles', 'topics', 'start_date', 'end_date'));
}


}
