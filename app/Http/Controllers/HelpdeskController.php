<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use BenSampo\Enum\Rules\EnumKey;
use App\Models\HelpdeskModel;
use App\Models\ReactieModel;
use App\Enums\SoortProbleem;
use Auth;

class HelpdeskController extends Controller
{
    public function getaanvraag()
    {
        return view('helpdesk.vragen');
    }
    
    public function postaanvraag(Request $request)
    {
        $request->validate([
            'naam' => 'required|max:100',
            'Soortproblemen' => '',
            'email' => 'required|email|max:100',
            'beschrijving' => 'required|max:300',
        ]);
        
        $probleem = $request->input('Soortproblemen');
        $user = Auth::user();
    
        if($probleem === "Selecteer"){
            return back()->with('error', 'Kies een probleem!');
        }

        $aanvraag = new HelpdeskModel;
        $aanvraag->naam = $request->input('naam');;
        $aanvraag->email = $request->input('email');
        $aanvraag->beschrijving = $request->input('beschrijving');
        $aanvraag->soortproblemen = SoortProbleem::getValue($request->input('Soortproblemen'));
        $aanvraag->user_id = $user->id;
        $aanvraagid = $aanvraag->id;
        $aanvraag->save();

        return redirect('/home')->with('success', "Aanvraag succesvol voltooid!");

    }

    public function reactie(Request $request, $id)
    {
        $request->validate([
            'naam' => 'required|max:100',
            'email' => '',
            'reactie' => 'required|max:300',
            'aanvraag_id' => '',
        ]);

        $aanvraag = new ReactieModel;
        $aanvraag->naam = $request->input('naam');
        $aanvraag->email = Auth::user()->email;
        $aanvraag->reactie = $request->input('reactie');
        $aanvraag->aanvraag_id = $id;
        $aanvraag->user_id = Auth::user()->id;
        $aanvraag->save();

        return redirect()->back()->with('success', "Uw reactie is geplaatst!");

    } 

    public function reactiedelete($id)
    {
        $user = ReactieModel::find($id);
        $user->delete();
        return redirect()->back()->with('success', 'Je reactie is verwijderd!');
    }
    public function supportpage($id)
    {
        $data['aanvraag'] = HelpdeskModel::find($id);
        $data['reactie'] = ReactieModel::where('aanvraag_id', $id)->get();
        return view('helpdesk.supportpage')->with('data', $data);
    }

    public function aangevraagd($user_id)
    {
        $data['aangevraagd'] = HelpdeskModel::where('user_id', $user_id)->get();
        $data['count'] = $data['aangevraagd']->count();
        
        $userId = Auth::id();
        if ($userId == $user_id){
            return view('helpdesk.aanvragen')->with('data', $data);
        } else {
            return redirect('/home')->with('error', 'U bent niet bevoegd voor deze pagina!');
        }
    }
}
