<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StoryController extends Controller
{
    // dashboard function
    public function dashboardPage()
    {
        return view('PageDashboard', [
            'title' => 'Halaman Dashboard',
        ]);
    }

    // function create story
    public function createStoryPage()
    {
        return view('PageCreateStory', [
            'title' => 'Buat Cerita',
        ]);
    }

    // function edit story page
    public function editStoryPage()
    {
        return view('PageEditStory', [
            'title' => 'Edit Cerita',
        ]);
    }
}
