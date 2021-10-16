<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ksiazki;
use Illuminate\Support\Facades\View;
use Laravel\Scout\Builder;

class Wyswietlanie extends Controller
{
    public function index(){
      $ksiazki=New ksiazki;
      $ksiazki=ksiazki::all()->where('Top10',1);
      return view('ksiegarnia',compact('ksiazki'));
    }
    public function szukanie(Request $request){
      $nazwa=$request->q;
      $ksiazki = ksiazki::select('ksiazka','id')
                 ->where('ksiazka','LIKE',"%$nazwa%")
                 ->get();
      return response()->json($ksiazki);
    }
    public function Lista_ksiazek(Request $request){
      $gatunek=ksiazki::select('gatunek')
                        ->distinct()
                        ->get();
        if($request->ajax()){
          $gatunki=$request->get('gatunek');
          $html = ksiazki::select('*')
          ->wherein('gatunek',$gatunki)
          ->paginate(12);
          $view = view('cala_ksiazek',compact('html','gatunek'));
          $section = $view->renderSections();
          return $section['con'];
        }
          $html=ksiazki::paginate(12);
          return view('cala_ksiazek',compact('html','gatunek'));
    }
    /*public function filter_gatunek(Request $request){
      $gatunki=$request->get('gatunek');
      $gatunki = is_array($gatunki) ? $gatunki : [$gatunki];
      $html = ksiazki::select('*')
                 ->where(function($query)use ($gatunki){
                  foreach($gatunki as $gatunek){
                     $query->orwhere('gatunek','LIKE',"%$gatunek%");
                   };
                 })
                 ->wherein('gatunek',$gatunki)
                 ->paginate(1);
      $gatunek=ksiazki::select('gatunek')
                ->get();
      $view = view('cala_ksiazek',compact('html','gatunek'));
      $section = $view->renderSections();
      return $section['con'];
    }*/
}
