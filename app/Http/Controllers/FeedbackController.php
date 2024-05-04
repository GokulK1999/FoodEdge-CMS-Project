<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Feedback; // If using the Feedback model

class FeedbackController extends Controller
{
    public function store(Request $request)
{
    $validatedData = $request->validate([
        'name' => 'required',
        'feedback' => 'required',
        'rating' => 'required|integer|min:1|max:5', // Add validation for rating
    ]);

    // Save feedback data
    $feedback = new Feedback();
    $feedback->name = $validatedData['name'];
    $feedback->feedback = $validatedData['feedback'];
    $feedback->star_rating = $validatedData['rating']; // Assign star rating
    $feedback->save();

    // Flash a success message
    $request->session()->flash('success', 'Thank you for your feedback!');

    // Redirect to feedback display page
    return redirect()->route('feedback.show');
}


    public function show()
    {
        // Retrieve feedback data from database (if using the Feedback model)
        $feedbacks = Feedback::latest()->get(); // Replace with your retrieval logic

        return view('feedback_show', compact('feedbacks')); // Pass data to view
    }
}
