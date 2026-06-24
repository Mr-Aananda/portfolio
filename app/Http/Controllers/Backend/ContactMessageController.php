<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Contact;
use Illuminate\Http\Request;

class ContactMessageController extends Controller
{
    /**
     * Display a listing of the contact messages.
     */
    public function index(Request $request)
    {
        $query = Contact::query();

        // Optional status filtering
        if ($request->has('status')) {
            if ($request->status === 'unread') {
                $query->where('is_read', false);
            } elseif ($request->status === 'read') {
                $query->where('is_read', true);
            }
        }

        // Search capability
        if ($request->has('search') && !empty($request->search)) {
            $search = $request->search;
            $query->where(function ($q) use ($search) {
                $q->where('name', 'like', "%{$search}%")
                  ->orWhere('email', 'like', "%{$search}%")
                  ->orWhere('subject', 'like', "%{$search}%")
                  ->orWhere('message', 'like', "%{$search}%");
            });
        }

        $messages = $query->latest()->paginate(10)->withQueryString();
        $unreadCount = Contact::where('is_read', false)->count();

        return view('backend.contacts.index', compact('messages', 'unreadCount'));
    }

    /**
     * Display the specified contact message.
     */
    public function show(Contact $contact)
    {
        // Mark as read when viewing
        if (!$contact->is_read) {
            $contact->update(['is_read' => true]);
        }

        return view('backend.contacts.show', compact('contact'));
    }

    /**
     * Mark the specified contact message as read/unread manually.
     */
    public function markAsRead(Contact $contact)
    {
        $contact->update([
            'is_read' => !$contact->is_read
        ]);

        $status = $contact->is_read ? 'read' : 'unread';

        return back()->with('success', "Message marked as {$status} successfully.");
    }

    /**
     * Remove the specified contact message from storage.
     */
    public function destroy(Contact $contact)
    {
        $contact->delete();

        return redirect()->route('admin.contacts.index')
            ->with('success', 'Contact message deleted successfully.');
    }
}
