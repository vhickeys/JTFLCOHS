<?php

namespace App\Http\Controllers\Client;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\SupportSystem\LogBaseReport;

class LogBaseReportController extends Controller
{
    public function store(Request $request)
    {
        $validated = $request->validate([
            'log_base'           => 'required|string|max:255',
            'ration_status'      => 'required|string|max:255',
            'pol_status'         => 'required|string|max:255',
            'ammunition_status'  => 'required|string|max:255',
            'medical_sup_status' => 'required|string|max:255',
            'comments'           => 'required|string|max:1000',
        ]);

        LogBaseReport::create($validated);

        return redirect()->route('homepage')
            ->with('success', 'Log Base Report submitted successfully.');
    }
}
