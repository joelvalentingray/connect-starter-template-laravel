<?php

namespace App\Http\Controllers;

use App\Models\ArcStory;
use App\Models\FailedJobs;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Artisan;

class DashboardController extends Controller
{
    public function index(Request $request)
    {
        return view('dashboard.index');
    }
}
