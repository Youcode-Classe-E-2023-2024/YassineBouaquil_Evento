<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Barryvdh\DomPDF\Facade\Pdf;

class PDFController extends Controller
{
    public function generatePDF()
    {
        $events = User::get();

        $data = [
            'title' => 'required',
            'description' => 'required',
            'date' => 'required|date',
            'place' => 'required',
            'category' => 'required',
            'available_places' => 'required|integer',
            'users' => $events
        ];

        $pdf = PDF::loadView('usersPdf', $data);
        return $pdf->download('users-lists.pdf');
    }
}
