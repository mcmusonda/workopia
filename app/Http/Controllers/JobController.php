<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;


class JobController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): View
    {
        //
        $jobs = [
            'Web Developer',
            'Mobile App Developer',
            'Data Scientist',
            'UI/UX Designer'
        ];

        return view('jobs.index', compact('jobs'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): View
    {
        return view('jobs.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request): string
    {
        return "Storing job: " . $request->input('title');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id): string
    {
        return "Showing job with ID: $id";
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id): string
    {
        // return view('jobs.edit', compact('id'));
        return "Edit job with ID: $id";
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id): string
    {
        //
        return "Updating job with ID: $id to title: ";
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id): string
    {
        //
        return "Deleting job with ID: $id";
    }
}
