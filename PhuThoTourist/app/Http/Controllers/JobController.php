<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Job;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;


class JobController extends Controller
{
    public function index(Request $request)
    {
        // Lấy danh sách ngành nghề, địa điểm và loại công việc
        $industries = DB::table('INDUSTRY')->select('id', 'name')->get();
        $locations = DB::table('LOCATION')->select('id', 'name')->get();
        $workTypes = DB::table('WORK_TYPE')->select('id', 'name')->get();

        // Tạo query cơ bản
        $query = Job::query();

        // Tìm kiếm theo tiêu đề
        if ($request->has('search') && !empty($request->search)) {
            $query->where('title', 'like', '%' . $request->search . '%');
        }

        // Lọc theo danh mục ngành nghề
        if ($request->has('industry') && !empty($request->industry)) {
            $query->where('industry_id', $request->industry);
        }

        // Lọc theo địa điểm
        if ($request->has('location') && !empty($request->location)) {
            $query->where('location_id', $request->location);
        }

        // Lọc theo loại công việc
        if ($request->has('work_type') && !empty($request->work_type)) {
            $query->where('type_id', $request->work_type);
        }

        // Phân trang và sắp xếp giảm dần theo ngày tạo
        $jobs = $query->orderBy('date', 'desc')->paginate(9);

        // Trả về view với dữ liệu
        return view('recruitment', compact('jobs', 'industries', 'locations', 'workTypes'));
    }

    public function show($id)
    {
        $job = Job::find($id);
        if (!$job) {
            abort(404, 'Job not found');
        }
        return view('detailrecruitment', compact('job'));
    }

}
