<?php

namespace App\Http\Controllers;

use App\Models\Job;
use Illuminate\Http\Request;

class SearchController extends Controller
{
    public function __invoke()
    {
        $res = Job::where('title', 'LIKE', '%' . request('query') . '%')->get();
        return view('results', [
            'jobs' => $res,
        ]);
    }
}
