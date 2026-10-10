<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\ContactInquiry;
use Illuminate\Http\Request;

class InquiryController extends Controller
{
    /**
     * Display a listing of inquiries.
     */
    public function index(Request $request)
    {
        $query = ContactInquiry::query();

        if ($request->filled('status')) {
            if ($request->status === 'unread') {
                $query->where('is_read', false);
            } elseif ($request->status === 'read') {
                $query->where('is_read', true);
            }
        }

        $inquiries = $query->orderBy('created_at', 'desc')->paginate(15);

        $totalCount = ContactInquiry::count();
        $unreadCount = ContactInquiry::where('is_read', false)->count();
        $readCount = ContactInquiry::where('is_read', true)->count();

        return view('admin.inquiries.index', compact('inquiries', 'totalCount', 'unreadCount', 'readCount'));
    }

    /**
     * Mark an inquiry as read or toggle status.
     */
    public function toggleRead(ContactInquiry $inquiry)
    {
        $inquiry->update(['is_read' => !$inquiry->is_read]);

        return back()->with('success', 'Inquiry status updated.');
    }

    /**
     * Delete an inquiry.
     */
    public function destroy(ContactInquiry $inquiry)
    {
        $inquiry->delete();

        return back()->with('success', 'Inquiry deleted successfully.');
    }
}
