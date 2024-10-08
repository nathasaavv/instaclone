<?php

namespace App\Http\Controllers;

use App\Models\Foto; 
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
class PhotoController extends Controller
{
    public function index()
    {
        // Ambil ID pengguna yang sedang login
        $userId = Auth::id();

        // Ambil foto berdasarkan user_id
        $photos = Foto::where('user_id', $userId)->get();
        return view('gallery', compact('photos'));
    }
}
