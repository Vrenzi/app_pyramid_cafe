<?php

namespace App\Http\Controllers;

use App\Models\ActivityLog;
use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Models\User;

class ActivityLogController extends Controller
{
    public function index()
{
    $activityLogs = ActivityLog::with('user')
    ->orderBy('created_at', 'desc') // Urutkan berdasarkan created_at secara descending
        ->get();
    return view('activityLog', compact('activityLogs'));
}

}
