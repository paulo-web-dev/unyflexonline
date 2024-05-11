<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Classes;
use App\Models\Category;
use App\Models\View;
use App\Models\CategoryCourse;
use App\Models\Favoritos;
use App\Models\Certificados;
use App\Models\Provas;
use Auth;

class ProvasController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function prova($slug){
       $curso=Classes::where('slug', $slug)->with('panels')->first();  
       $provas = $curso->courses->categories[0]->provas[0];
     
      return view('ava.prova',[
        'curso' => $curso,
        'provas' => $provas,
      ]);
    }

    
    public function corrigeProva(Request $request){
    
     $corretas = 0;
     foreach ($request->all() as $key => $return) {
        if($key != '_token'){
            if($return == 1){
                $corretas++;
            }
        }
     }
     $resultado = round($corretas/$request->questoes * 100);
     $curso = Classes::where('id', $request->class)->first();
     $certificado = 0;
     if($resultado >= 50){
        $verifica_certificado = Certificados::where('id_user', Auth::user()->id)->where('id_class', $curso->id)->first();
        if(isset($verifica_certificado)){
            $certificado = $verifica_certificado;
        }else{
        $certificado = new Certificados();
        $certificado->id_user = Auth::user()->id;
        $certificado->id_class = $curso->id;
        $certificado->save();
       }
     }
     return view('ava.resultado-prova',[
        'resultado' => $resultado,
        'curso' => $curso,
        'certificado' => $certificado,
     ]);

 
    }

     
    public function certificado($id){
        $certificado = Certificados::where('id', $id)->with('class')->first();
        return view('ava.certificado',[
            'certificado' => $certificado,
        ]);
     }

     public function certificados(){
        $certificados = Certificados::where('id_user', Auth::user()->id)->with('class')->distinct('id_class')->get();
    
        return view('ava.certificados',[
            'certificados' => $certificados,
        ]);
     }
}
