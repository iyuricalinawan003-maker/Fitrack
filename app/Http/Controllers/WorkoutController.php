<?php

namespace App\Http\Controllers;

use App\Models\Workout;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class WorkoutController extends Controller
{
    // 1. READ: Display a list of workouts for the logged-in user
    public function index()
    {
        $workouts = Workout::where('user_id', Auth::id())->latest()->get();
        return view('dashboard', compact('workouts'));
    }

    // 2. CREATE: Save a new workout into the database
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'minutes' => 'required|integer|min:1',
        ]);

        Workout::create([
            'user_id' => Auth::id(),
            'name' => $request->name,
            'minutes' => $request->minutes,
        ]);

        return redirect()->route('workouts.index')->with('success', 'Workout added successfully!');
    }

    // 3. UPDATE (Part 1): Show the edit form for a specific workout
    public function edit(Workout $workout)
    {
        // Make sure users can only edit their own workouts
        if ($workout->user_id !== Auth::id()) {
            abort(403);
        }

        return view('workouts.edit', compact('workout'));
    }

    // 4. UPDATE (Part 2): Save the updated workout details
    public function update(Request $request, Workout $workout)
    {
        if ($workout->user_id !== Auth::id()) {
            abort(403);
        }

        $request->validate([
            'name' => 'required|string|max:255',
            'minutes' => 'required|integer|min:1',
        ]);

        $workout->update([
            'name' => $request->name,
            'minutes' => $request->minutes,
        ]);

        return redirect()->route('workouts.index')->with('success', 'Workout updated successfully!');
    }

    // 5. DELETE: Remove a workout from the database
    public function destroy(Workout $workout)
    {
        if ($workout->user_id !== Auth::id()) {
            abort(403);
        }

        $workout->delete();

        return redirect()->route('workouts.index')->with('success', 'Workout deleted successfully!');
    }
}
