<?php

namespace App\Http\Controllers;

use App\Models\Feedback;
use Illuminate\Http\Request;

class FeedbackController extends Controller
{
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['nullable', 'email', 'max:255'],
            'message' => ['required', 'string', 'min:10', 'max:1000'],
        ]);

        Feedback::create($validated);

        return back()->with('feedback_success', 'Terima kasih, feedback Anda sudah terkirim.');
    }
}
