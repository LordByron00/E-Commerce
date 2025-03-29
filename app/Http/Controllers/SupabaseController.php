<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\SupabaseService;

class SupabaseController extends Controller
{
    protected $supabase;

    public function __construct(SupabaseService $supabase)
    {
        $this->supabase = $supabase;
    }

    public function getUsers()
    {
        $users = $this->supabase->fetchData('users'); // Fetching from 'users' table
        return response()->json($users);
    }

    public function addUser(Request $request)
    {
        $data = [
            'name' => $request->name,
            'email' => $request->email,
        ];

        $success = $this->supabase->insertData('users', $data);

        return response()->json(['success' => $success]);
    }
}
