<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CalendarController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        if (Auth::user()) {
            $users = User::all();
            // Return the product details view
            return view('calendar.index', ['users' => $users]);
        }
        // Unauthorized endpoint if the user is not logged in
        else {
            return abort(401);
        }
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        // Find the product by ID
        $user = User::findOrFail($id);

        // If the user is an admin or is the person who's logged in
        // ATM just if the user is the person who's logged in
        if ($user == Auth::user()) {
            // Return the product details view
            return view('calendar.show', ['user' => $user]);
        }
        // Unauthorized endpoint if the user is not logged in
        else {
            return abort(401);
        }
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        // Find the product by ID
        $user = User::findOrFail($id);

        // If the user is an admin or is the person who's logged in
        // ATM just if the user is the person who's logged in
        if ($user == Auth::user()) {
            // Return the product details view
            return view('calendar.edit', ['user' => $user]);
        }
        // Unauthorized endpoint if the user is not logged in
        else {
            return abort(401);
        }
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
