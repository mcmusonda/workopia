<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class BookmarkController extends Controller
{
    // @desc    Get all users bookmarks
    // @Route   GET /bookmarks
    public function index() {
        $user = Auth::user();

        $bookmarks = $user->bookmarkedJobs()->paginate(9);
        return view('jobs.bookmarked')->with('bookmarks', $bookmarks);
    }
}
