<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Models\Document;

class DocumentController extends Controller
{
    public function getAllDocument(Request $request)
    {
        $documents_all = Document::orderBy('date', 'desc')->get();
        // Lấy giá trị tìm kiếm nếu có
        $search = $request->search;

        // Lọc theo ngày, nếu có
        $date_start = $request->date_start ? Carbon::parse($request->date_start)->startOfDay() : now()->subYear()->startOfDay(); // Một năm trước, bắt đầu từ 00:00
        $date_end = $request->date_end ? Carbon::parse($request->date_end)->endOfDay() : now()->endOfDay(); // Thời gian hiện tại, kết thúc vào 23:59:59

        // Tạo query
        $query = Document::query();

        // Lọc theo khoảng thời gian nếu có
        if ($request->has('date_start') && $request->has('date_end')) {
            $query->whereBetween('date', [$date_start, $date_end]);
        } else {
            // Mặc định lấy khoảng thời gian từ 1 năm trước đến hiện tại
            $query->whereBetween('date', [$date_start, $date_end]);
        }

        // Lọc theo tìm kiếm nếu có
        if ($search) {
            $query->where('name', 'like', '%' . $search . '%'); // Giả sử bạn tìm kiếm theo tên tài liệu (name)
        }

        // Sắp xếp theo ngày giảm dần và phân trang
        $documents_10 = $query->orderBy('date', 'desc')->paginate(10);

        return view('document', compact('documents_10', 'documents_all',  'date_start', 'date_end'));
    }


}
