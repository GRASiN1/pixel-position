<?php

namespace App\Http\Controllers;

use App\Http\Requests\UpdateJobRequest;
use App\Models\Job;
use App\Models\Tag;
use Illuminate\Http\Request;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\Rule;

class JobController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $jobs = Job::latest()->get()->groupBy('featured');
        return view('jobs.index', [
            'jobs' => $jobs[0],
            'featuredJobs' => $jobs[1],
            'tags' => Tag::all(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('jobs.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $attributes = $request->validate([
            'title' => ['required'],
            'salary' => ['required'],
            'schedule' => ['required', Rule::in(['Full Time', 'Part Time'])],
            'url' => ['required', 'active_url'],
            'tags' => ['nullable'],
            'location' => ['required', Rule::in(['Remote', 'On-Site'])],
        ]);

        $attributes['featured'] = $request->has('featured');

        $job = Auth::user()->employer->job()->create(Arr::except($attributes, 'tags'));

        if (!empty($attributes['tags'])) {
            $tags = array_filter(array_map(function ($tag) {
                $clean = trim($tag);
                $clean = preg_replace('/\s*\/\s*/', '/', $clean);
                return $clean ?: null;
            }, explode(',', $attributes['tags'])));

            foreach ($tags as $tag) {
                $job->tag($tag);
            }
        }


        return redirect('/');
    }
}
