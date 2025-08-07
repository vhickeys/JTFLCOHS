<?php

namespace App\Http\Controllers\Client;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use App\Models\SupportSystem\UnitNomenclature;

class SupportSytemController extends Controller
{
    public function index()
    {
        return view('client.unitlogin');
    }

    public function supply_management()
    {
        return view('client.supply-management');
    }
    public function reports()
    {
        return view('client.reports');
    }
    public function training_resources()
    {
        return view('client.training-resources');
    }
    public function contact()
    {
        return view('client.contact');
    }

    public function unit_login(Request $request)
    {
        $model_name = $request->model;
        $unit_name = $request->unit;

        $validator = Validator::make($request->all(), [
            'unit' => 'required|string|max:255'
        ]);

        if ($validator->fails()) {
            return redirect()->route('unit.login', ['model' => $model_name])
                ->withErrors($validator)
                ->withInput();
        }

        $unit_nomenclature = UnitNomenclature::where('unit', $unit_name)->first();
        if (!$unit_nomenclature) {
            return redirect()->route('unit.login', ['model' => $model_name])
                ->with('status', 'Unit not found.');
        }

        // Set login session
        session([
            'unit_logged_in' => true,
            'unit_model' => $model_name,
            'unit_name' => $unit_name,
        ]);

        switch ($model_name) {
            case 'aufogem':
                return redirect()->route('aufogem');
            case 'trsm':
                return redirect()->route('trsm');
            default:
                return redirect()->route('unit.login', ['model' => $model_name])
                    ->with('status', ['Unknown model specified.']);
        }
    }

    public function predict(Request $request)
    {
        $validated = $request->validate([
            'rear_months' => 'required|numeric',
            'barrack_training' => 'required|numeric',
            'force_ratio' => 'required|numeric',
            'c2_rest_years' => 'required|numeric',
            'has_c2' => 'required|in:yes,no',
            'served_ne' => 'required|in:yes,no',
        ]);

        // Example basic logic for deployment eligibility
        $deployable = true;

        if (
            $validated['rear_months'] < 3 ||
            $validated['barrack_training'] < 2 ||
            $validated['force_ratio'] < 1.5 ||
            $validated['c2_rest_years'] < 1 ||
            $validated['has_c2'] === 'no' ||
            $validated['served_ne'] === 'no'
        ) {
            $deployable = false;
        }

        $status = $deployable ? 'Deployable' : 'Not Deployable';

        return view('client.result', compact('status', 'validated'));
    }

    public function aufogem()
    {
        return view('client.aufogem');
    }

    public function trsm()
    {
        return view('client.trsm');
    }

    public function trsm_predict(Request $request)
    {
        $validated = $request->validate([
            'months_theatre' => 'required|numeric|min:0',
            'months_since_last' => 'required|numeric|min:0',
            'attacks_repulsed' => 'required|numeric|min:0',
            'casualty_level' => 'required|in:Low,Medium,High',
        ]);

        // Example logic: adjust based on your real model
        $deployable = true;

        if (
            $validated['months_theatre'] < 6 ||
            $validated['months_since_last'] < 3 ||
            $validated['attacks_repulsed'] < 1 ||
            $validated['casualty_level'] === 'High'
        ) {
            $deployable = false;
        }

        $status = $deployable ? 'Deployable' : 'Not Deployable';

        return view('client.trsm-result', compact('status', 'validated'));
    }

    public function logout()
    {
        session()->flush();
        return redirect()->route('unit.login', ['model' => 'aufogem']);
    }
}
