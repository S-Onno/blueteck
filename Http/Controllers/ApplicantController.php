<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Application; 

class ApplicantController extends Controller
{
    public function create()
    {
        return view('apply');
    }

        public function confirm(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required',
            'kana' => 'required',
            'email' => 'required|email',
            'phone' => 'nullable',
            'birthdate' => 'required|date',
            'gender' => 'required',
            'position' => 'required',
            'location' => 'required',
            'skills' => 'nullable|string',
            'pr_text' => 'required',
        ]);

        return view('confirm', ['data' => $validated]);
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'kana' => 'required|string|max:255',
            'email' => 'required|email',
            'phone' => 'nullable|string|max:20',
            'birthdate' => 'required|date',
            'gender' => 'required|string',
            'position' => 'required|string',
            'location' => 'required|string',
            'skills' => 'nullable|string',
            'pr_text' => 'required|string|min:10',
        ]);

        Application::create($validated);

        return view('thanks');
    }
}