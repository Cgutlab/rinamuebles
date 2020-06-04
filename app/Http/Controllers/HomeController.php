<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Slider;
use App\Metadato;
use App\Home;
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
    }
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $sliders   = Slider::where('seccion', 'home')->orderBy('orden', 'ASC')->get();
        $metadato  = Metadato::where('seccion', 'home')->first();
        $producto  = Home::where('seccion', 'producto')->first();
        $ambientes = Home::where('seccion', 'amoblamiento')->first();
        $empresa   = Home::where('seccion', 'empresa')->first();
        $desarrollo= Home::where('seccion', 'desarrollo')->first();
        return view('public.home', compact('sliders', 'metadato', 'producto', 'ambientes', 'empresa','desarrollo'));
    }
}