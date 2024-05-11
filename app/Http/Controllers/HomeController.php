<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Classes;
use App\Models\Category;
use App\Models\View;
use App\Models\CategoryCourse;
use App\Models\Favoritos;
use Auth;
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
   public function home(){
    $hoje=  date('Y-m-d');
    $favoritos = Favoritos::where('id_user', Auth::user()->id)->select('id_class')->groupBy('id_class')->with('class')->get();
 
    $cursos_todos = Classes::where('unyflex', '1')->where('status','able')->with('panels')->orderBy('id', 'DESC')->get();  
    $categories = Category::where('status', 'able')->get();
    $views = View::where('id_user', Auth::user()->id)
    ->select('id_class') 
    ->groupBy('id_class') 
    ->with('class') 
    ->get();
    $recentes = Classes::where('unyflex' , 1)->where('status','able')->where('start_date', '<', $hoje)->orderBy('start_date', 'DESC')->take(6)->get();
    $categorias = [
        CategoryCourse::where('category_id', 4)->with('classes')->with('category')->take(6)->get(),
        CategoryCourse::where('category_id', 5)->with('classes')->with('category')->take(6)->get(),
        CategoryCourse::where('category_id', 6)->with('classes')->with('category')->take(6)->get(),
        CategoryCourse::where('category_id', 8)->with('classes')->with('category')->take(6)->get(),
        CategoryCourse::where('category_id', 10)->with('classes')->with('category')->take(6)->get(), 
        CategoryCourse::where('category_id', 11)->with('classes')->with('category')->take(6)->orderby('id', 'DESC')->get(),
        CategoryCourse::where('category_id', 12)->with('classes')->with('category')->take(6)->get(),
        CategoryCourse::where('category_id', 15)->with('classes')->with('category')->take(6)->get(),
        CategoryCourse::where('category_id', 18)->with('classes')->with('category')->take(6)->get(),
        CategoryCourse::where('category_id', 19)->with('classes')->with('category')->take(6)->get(),
        CategoryCourse::where('category_id', 24)->with('classes')->with('category')->take(6)->get(),
        CategoryCourse::where('category_id', 25)->with('classes')->with('category')->take(6)->get(),
        CategoryCourse::where('category_id', 26)->with('classes')->with('category')->take(6)->get(),
        CategoryCourse::where('category_id', 27)->with('classes')->with('category')->take(6)->get(),
        CategoryCourse::where('category_id', 28)->with('classes')->with('category')->take(6)->get(),
        CategoryCourse::where('category_id', 29)->with('classes')->with('category')->take(6)->get(),
        CategoryCourse::where('category_id', 30)->with('classes')->with('category')->take(6)->get()
    ];
    return view('ava.home', [ 
        'cursos_todos' => $cursos_todos,
        'categories' => $categories,
         'recentes' => $recentes,
         'categorias' => $categorias,
         'views' => $views,
         'favoritos' => $favoritos,
    ]);
   }

   public function categoria($slug){
    $categoria = Category::where('slug', $slug)->with('courses')->first();

    return view('ava.categoria',[
        'categoria' => $categoria,
    ]);
   }

   public function recentes(){
    $hoje=  date('Y-m-d');
    $recentes = Classes::where('unyflex' , 1)->where('status','able')->where('start_date', '<', $hoje)->orderBy('start_date', 'DESC')->take(30)->get();

    return view('ava.recentes',[
        'recentes' => $recentes,
    ]);
   }

   public function assistidos(){
    $views = View::where('id_user', Auth::user()->id)
    ->select('id_class') 
    ->groupBy('id_class') 
    ->with('class') 
    ->get();
    return view('ava.assistidos',[
        'views' => $views,
    ]);
   }

   
   public function favoritos(){
    $favoritos = Favoritos::where('id_user', Auth::user()->id)->select('id_class')->groupBy('id_class')->with('class')->get();
 
    return view('ava.favoritos',[
        'favoritos' => $favoritos,
    ]);
   }

   public function logout(){
    Auth::logout();
    return redirect()->route('login');
   }
   public function script(){
    ini_set('max_execution_time', 820);
    
    $classes = Classes::where('unyflex', 1)->where('status', 'able')->get();
    foreach ($classes as $key => $class) {
        $foto = 'https://unyflex.com.br/storage/cursos/banner/'.$class->photo;
        $headers = get_headers($foto);
    
        if (strpos($headers[0], '200') !== false) {
          $foto = 1;
        } else {
            echo $class->id.' - '.$class->title.'<br>';
        }
       
    }
   }

   
}
