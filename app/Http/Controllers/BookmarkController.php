<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\View\View;
use App\Models\Job;

class BookmarkController extends Controller
{
    // @desc    Get all users bookmarks
    // @Route   GET /bookmarks
    public function index() {
        $user = Auth::user();

        $bookmarks = $user->bookmarkedJobs()->orderBy('job_user_bookmarks.created_at', 'desc')->paginate(9);
        return view('jobs.bookmarked')->with('bookmarks', $bookmarks);
    }

    // @desc    Create new bookmarked jobs
    // @Route   POST /bookmarks/{job}
    public function store(Job $job) {
        // dd('store');

        $user = Auth::user();

        // Check if the job is already bookmarked
        if($user->bookmarkedJobs()->where('job_id', $job->id)->exists()) {
            return back()->with('error', 'Job is already bookmarked');
        }

        // Create new bookmark
        $user->bookmarkedJobs()->attach($job->id);

        return back()->with('success', 'Job bookmarked successfully!');

    }

    // @desc    Remove bookmarked job
    // @Route   DELETE /bookmarks/{job}
    public function destroy(Job $job) {
        // dd('destory');
        
        $user = Auth::user();

        // Check if the job is already bookmarked
        if(!$user->bookmarkedJobs()->where('job_id', $job->id)->exists()) {
            return back()->with('error', 'Job is not bookmarked');
        }

        // Remove bookmark
        $user->bookmarkedJobs()->detach($job->id);

        return back()->with('success', 'Bookmark successfully removed!');
    }
}
