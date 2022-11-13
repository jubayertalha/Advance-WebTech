<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\JobPost;

class JobController extends Controller
{
    public function index()
    {
        return JobPost::all();
    }

    public function store(Request $request)
    {
        $jobPost = new JobPost();
        $jobPost->title = $request->title;
        $jobPost->description = $request->description;
        $jobPost->save();
        return response()->json($jobPost, 201);
    }

    public function destroy($id)
    {
        JobPost::find($id)->delete();
        return response()->json($id, 204);
    }
}
