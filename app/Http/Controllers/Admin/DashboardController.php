<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\ContactInquiry;
use App\Models\Project;

class DashboardController extends Controller
{
    /**
     * Show admin dashboard overview.
     */
    public function index()
    {
        $totalProjects = Project::count();
        $publishedProjects = Project::where('status', 'published')->count();
        $draftProjects = Project::where('status', 'draft')->count();
        $featuredProjects = Project::where('is_featured', true)->count();
        $totalInquiries = ContactInquiry::count();
        $unreadInquiries = ContactInquiry::where('is_read', false)->count();

        $recentProjects = Project::orderBy('created_at', 'desc')->take(5)->get();
        $recentInquiries = ContactInquiry::orderBy('created_at', 'desc')->take(5)->get();

        return view('admin.dashboard', compact(
            'totalProjects',
            'publishedProjects',
            'draftProjects',
            'featuredProjects',
            'totalInquiries',
            'unreadInquiries',
            'recentProjects',
            'recentInquiries'
        ));
    }
}
