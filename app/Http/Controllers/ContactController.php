<?php

namespace App\Http\Controllers;

use App\Models\ContactMessage;
use App\Http\Requests\StoreContactMessageRequest;

class ContactController extends Controller
{
    public function index()
    {
        $messages = ContactMessage::latest()->get();
        return view('contact.index', compact('messages'));
    }

    public function store(StoreContactMessageRequest $request)
    {
        ContactMessage::create($request->validated());

        return redirect()->route('contact.index')
            ->with('success', 'Your message has been sent successfully!');
    }
}
