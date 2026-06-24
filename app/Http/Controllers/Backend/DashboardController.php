<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Contact;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    /**
     * Display the admin dashboard.
     */
    public function index()
    {
        $totalMessages = Contact::count();
        $unreadMessages = Contact::where('is_read', false)->count();
        $latestMessages = Contact::latest()->limit(5)->get();

        return view('backend.dashboard', compact(
            'totalMessages',
            'unreadMessages',
            'latestMessages'
        ));
    }
}
