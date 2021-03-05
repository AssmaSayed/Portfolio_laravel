<?php

namespace App\Http\Controllers;

use App\Models\AboutInfo;
use App\Models\AboutTitre;
use App\Models\Contact;
use App\Models\Cta;
use App\Models\endFutur;
use App\Models\Faq;
use App\Models\Header;
use App\Models\Navbar;
use App\Models\Portfolio;
use App\Models\Service;
use App\Models\Titre;
use Illuminate\Http\Request;

class BackEndController extends Controller
{
    public function index(){
        $dbTitre = Titre::all();
        $dbTitreAbout = AboutTitre::all();
        $dbInfoAbout = AboutInfo::all();
        $dbHeader = Header::all();
        $dbNavbar = Navbar::all();
        $dbEndFutur = endFutur::all();
        $dbCta = Cta::all();
        $dbService = Service::all();
        $dbPortfolio = Portfolio::all();
        $dbFaq = Faq::all();
        // $dbContact = Contact::all();
        return view('backEnd', compact('dbTitre', 'dbTitreAbout', 'dbInfoAbout','dbHeader','dbNavbar','dbEndFutur','dbCta','dbService','dbPortfolio','dbFaq'));
    }
    public function destroyHeader($id){
        $destroy = Header::find($id);
        $destroy->delete();
        return redirect()->back();

    }
    public function destroyNav($id){
        $destroy = Navbar::find($id);
        $destroy->delete();
        return redirect()->back();

    }
    public function destroyTitre($id){
        $destroy = Titre::find($id);
        $destroy->delete();
        return redirect()->back();

    }

    public function destroyTitreAbout($id){
        $destroy = AboutTitre::find($id);
        $destroy->delete();
        return redirect()->back();

    }
    public function destroyAboutInfo($id){
        $destroy = AboutInfo::find($id);
        $destroy->delete();
        return redirect()->back();

    }
    public function destroyEndFutur($id){
        $destroy = endFutur::find($id);
        $destroy->delete();
        return redirect()->back();

    }
    public function destroyCta($id){
        $destroy = Cta::find($id);
        $destroy->delete();
        return redirect()->back();

    }
    public function destroyService($id){
        $destroy = Service::find($id);
        $destroy->delete();
        return redirect()->back();

    }
    public function destroyPortfolio($id){
        $destroy = Portfolio::find($id);
        $destroy->delete();
        return redirect()->back();

    }
    public function destroyFaq($id){
        $destroy = Faq::find($id);
        $destroy->delete();
        return redirect()->back();

    }

    //EDIT // UPDATE    

    public function editHeader($id){
        $edit = Header::find($id);
        return view('pages/edit/editHeader', compact('edit'));
    }

    public function updateHeader(Request $request,$id){
        $update = Header::find($id);
        $update->titre = $request->titre;
        $update->sousTitre = $request->sousTitre;
        $update->button = $request->button;
        $update->save();
        return redirect('/');
    }

}
