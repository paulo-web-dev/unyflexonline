<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Classes;
use App\Models\Category; 
use App\Models\Panel;
use App\Models\View;
use App\Models\Favoritos;
use App\Models\CategoryCourse;
use Auth;
class CursoController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }



    public function curso($slug){
      
        $curso = Classes::where('slug', $slug)->with('courses')->with('panels')->first();
        $categoria = $curso->courses->categories[0];
        $semelhantes = CategoryCourse::where('category_id', 10)->with('classes')->with('category')->take(6)->get();
        $view = new View();
        $view->id_user = Auth::user()->id;
        $view->id_class = $curso->id;
        $view->save();
        return view('ava.curso', [ 
            'curso' => $curso,
            'recentes' => $semelhantes,
        ]);
       }

    public function cursoAula($slug, $panel){
      
        $curso = Classes::where('slug', $slug)->with('courses')->with('panels')->first();
        $panel = Panel::where('id',$panel)->with('video_lesson')->first();
        $categoria = $curso->courses->categories[0];
        $semelhantes = CategoryCourse::where('category_id', 10)->with('classes')->with('category')->take(6)->get();
        $view = new View();
        $view->id_user = Auth::user()->id;
        $view->id_class = $curso->id;
        $view->save();
        return view('ava.curso', [ 
            'curso' => $curso, 
            'panel' => $panel,
            'recentes' => $semelhantes,
        ]);
       }

       public function cursoPesquisa($titulo){
      
        $curso = Classes::where('title', 'like',"%$titulo%")->orWhere('subtitle', 'like',"%$titulo%")->with('courses')->with('panels')->get();
        $panels = Panel::where('title', 'like', "%$titulo%")->with('classes')->get()->groupBy('classes_id');
      
        return view('ava.pesquisa', [ 
            'curso' => $curso,
            'panels' => $panels,
            'titulo' => $titulo,
        ]);
       }

       public function insereFavorito(Request $request){
        
        $favorito = new Favoritos();
        $favorito->id_user = $request->id_user;
        $favorito->id_class = $request->id_class;
        $favorito->save();

        
       }
}
