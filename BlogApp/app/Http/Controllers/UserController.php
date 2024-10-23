<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function showForm()
    {
        return view('username');
    }

    public function storeUsername(Request $request)
    {
        // Validate the input
        $request->validate(rules: [
            'username' => 'required|string|max:255',
        ]);

        // Store the username in session
        $request->session()->put('username', $request->input('username'));

        // Redirect back to the form with success
        return redirect()->route('show.form')->with('message', 'Username stored successfully!');
    }

    public function displayUsername(Request $request)
    {
        // Retrieve the username from session
        $username = $request->session()->get('username', 'No username found in session.');

        return view('display_username', ['username' => $username]);
    }

    public function clearUsername(Request $request)
    {
        // Remove the username from session
        $request->session()->forget('username');

        // Redirect back to the display page
        return redirect()->route('display.username')->with('message', 'Session cleared successfully!');
    }
}
