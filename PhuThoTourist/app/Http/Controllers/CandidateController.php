<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Candidate;

class CandidateController extends Controller
{
    public function store(Request $request)
    {
        try {
            // Validate dữ liệu
            $validated = $request->validate([
                'job_id' => 'required|exists:jobs,id',
                'name' => 'required|string|max:255',
                'dob' => 'required|date',
                'current_address' => 'required|string|max:255',
                'email' => 'required|email|max:255',
                'education_level' => 'required|string|max:255',
                'willing_to_travel' => 'required|string',
                'gender' => 'required|string',
                'birth_place' => 'nullable|string|max:255',
                'phone' => 'required|string|max:20',
                'facebook' => 'nullable|string|max:255',
                'cv' => 'required|file|mimes:pdf,doc,docx',
                'overtime' => 'required|string',
                'work_experience' => 'nullable|string',
                'personal_experience' => 'nullable|string',
            ]);

            // Xử lý file CV nếu có
            $cvPath = null;
            if ($request->hasFile('cv')) {
                $cvPath = $request->file('cv')->store('cvs', 'public');
            }

            // Lưu dữ liệu vào bảng ứng viên
            Candidate::create([
                'job_id' => $validated['job_id'],
                'name' => $validated['name'],
                'dob' => $validated['dob'],
                'current_address' => $validated['current_address'],
                'email' => $validated['email'],
                'education_level' => $validated['education_level'],
                'willing_to_travel' => $validated['willing_to_travel'],
                'gender' => $validated['gender'],
                'birth_place' => $validated['birth_place'],
                'phone' => $validated['phone'],
                'facebook' => $validated['facebook'],
                'cv' => $cvPath,
                'overtime' => $validated['overtime'],
                'work_experience' => $validated['work_experience'],
                'personal_experience' => $validated['personal_experience'],
            ]);

            // Redirect với thông báo thành công
            return redirect()->back()->with('success', 'Đã gửi thông tin thành công!');
        } catch (\Exception $e) {
            // Nếu có lỗi xảy ra, trả về thông báo lỗi
            return redirect()->back()->withErrors(['error' => 'Có lỗi xảy ra: ' . $e->getMessage()]);
        }
    }

}
