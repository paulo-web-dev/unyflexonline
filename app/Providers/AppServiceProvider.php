<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Models\CategoryCourse;
use View;
class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
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
    
        View::share('categorias', $categorias);
    }
}
