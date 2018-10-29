<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Hero;
use App\Emergencies;
class HeroController extends Controller
{

   


    //
    public function show($hero_slug)
    {
        $hero = \App\Hero::where('slug', $hero_slug)->first();
        if (!$hero) {
            abort(404, 'Hero not found');
        }
        $view = view('hero/show');
        $view->hero = $hero;
        return $view;
    }

    public function home(){
        return view('homepage');
    }

    public function index() {
      $heroes = Hero::orderBy('name', 'asc')->get();
      return view('hero.index', [
        'hero' => $heroes
      ]);
    } 

    public function store(Request $request){
      
        $emg = Emergencies::create($request->only(['subject', 'description']));
        
        
        return redirect(action('HeroController@index'));
    }
}