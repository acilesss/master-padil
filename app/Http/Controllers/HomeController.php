<?php

namespace App\Http\Controllers;

use App\Models\DbRealtime;
use App\Models\DbRealtime2;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $biaya = DbRealtime::selectRaw("DATE_FORMAT(created_at, '%Y-%m-%d %H:00') as hour, SUM(biaya) as total_biaya")
            ->whereNotNull('r1_arus')
            ->groupBy('hour')
            ->orderBy('hour', 'DESC')
            ->limit(10)
            ->get();

        $biaya2 = DbRealtime2::selectRaw("DATE_FORMAT(created_at, '%Y-%m-%d %H:00') as hour, SUM(biaya) as total_biaya")
            ->whereNotNull('r2_arus')
            ->groupBy('hour')
            ->orderBy('hour', 'DESC')
            ->limit(10)
            ->get();

        return view('home', compact('biaya', 'biaya2'));
    }
}
