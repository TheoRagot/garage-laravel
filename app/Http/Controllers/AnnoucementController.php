<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Annoucement;
use App\Http\Requests\CreateAnnoucementRequest;
use Illuminate\Support\Facades\Auth;

class AnnoucementController extends Controller
{
    public function index()
    {
        $annoucements = Annoucement::all();
        $user = Auth::user();
        return view('annoucement.index',['annoucements'=>$annoucements, 'user_id'=>$user->id]);
    }
    public function create()
    {
        return view('annoucement.create');
    }
    public function created(CreateAnnoucementRequest $request)
    {
        $user = Auth::user();
        $newAnnoucement = new Annoucement;
        $newAnnoucement->title = $request->title;
        $newAnnoucement->content = $request->content;
        $newAnnoucement->price = $request->price;
        $newAnnoucement->user_id = $user->id;
        $newAnnoucement->save();
        
        return redirect()->route('annoucement.index');
    }
    public function delete($annoucement)
    {
        Annoucement::findOrFail($annoucement)->delete();

        return redirect()->route('annoucement.index');
    }
    public function page($annoucement)
    {
        $annoucement = Annoucement::findOrFail($annoucement);
        return view('annoucement.page', ['annoucement'=>$annoucement,]);
    }
    public function updatePage($annoucement)
    {
        $annoucement = Annoucement::findOrFail($annoucement);
        $title= $annoucement->title;
        $price= $annoucement->price;
        $content= $annoucement->content;
        return view('annoucement.updatePage', ['annoucement'=>$annoucement,'title'=>$title,'price'=>$price,'content'=>$content,]);
    }
    public function update($annoucement)
    {
        //je n'ai pas eu le temps (snif)
    }
}
