<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use BenSampo\Enum\Rules\EnumKey;
use App\Models\HelpdeskModel;
use App\Models\ReactieModel;
use App\Enums\SoortProbleem;
use Auth;

class AdminController extends Controller
{
    public function aanvragen()
    {
        $data['alles'] = HelpdeskModel::all();
        return view('administrator.aanvragen')->with('data', $data);
    }
}
