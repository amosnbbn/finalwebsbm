<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Models\Attendance;

class AttendanceController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string',
            'photo' => 'required|image|max:2048',
        ]);

        $path = $request->file('photo')->store('attendance_photos', 'public');

        Attendance::create([
            'name' => $request->name,
            'date' => now()->toDateString(),
            'photo' => $path,
            'status' => 'pending'
        ]);

        return redirect()->back()->with('success', 'Absensi berhasil dikirim, menunggu verifikasi admin.');
    }
}
