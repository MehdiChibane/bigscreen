<?php

namespace App\Http\Controllers;
use App\Enum\QuestionEnum;
use App\Models\Answer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
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
    public function index()
    {
        $user = auth()->user();
        $answers = Answer::all();
        $user = auth()->user();

        $count1 = DB::table('answers')->
        where('headset_type', 'PSVR')->
        selectRaw('count(id) as cnt')->pluck('cnt');
        $count2 = DB::table('answers')->
        where('headset_type', 'occr')->
        selectRaw('count(id) as cnt')->pluck('cnt');
        
        $count3 = DB::table('answers')->
        where('headset_type', 'htcc')->
        selectRaw('count(id) as cnt')->pluck('cnt');
        $count4 = DB::table('answers')->
        where('headset_type', 'wmr')->
        selectRaw('count(id) as cnt')->pluck('cnt');
       $hdst_type =  array($count1,$count2,$count3,$count4);

       $store1 = DB::table('answers')->
        where('store_name', 'stm')->
        selectRaw('count(id) as cnt')->pluck('cnt');
        $store2 = DB::table('answers')->
        where('store_name', 'occs')->
        selectRaw('count(id) as cnt')->pluck('cnt');
        $store3 = DB::table('answers')->
        where('store_name', 'vvp')->
        selectRaw('count(id) as cnt')->pluck('cnt');
        $store4 = DB::table('answers')->
        where('store_name', 'pvr')->
        selectRaw('count(id) as cnt')->pluck('cnt');
        $store5 = DB::table('answers')->
        where('store_name', 'gp')->
        selectRaw('count(id) as cnt')->pluck('cnt');
        $store6 = DB::table('answers')->
        where('store_name', 'ws')->
        selectRaw('count(id) as cnt')->pluck('cnt');

        $store_type = array($store1,$store2,$store3,$store4,$store5,$store6);

        $usage1 = DB::table('answers')->
        where('headset_usage', 'direct')->
        selectRaw('count(id) as cnt')->pluck('cnt');
        $usage2 = DB::table('answers')->
        where('headset_usage', 'movie')->
        selectRaw('count(id) as cnt')->pluck('cnt');
        $usage3 = DB::table('answers')->
        where('headset_usage', 'solo')->
        selectRaw('count(id) as cnt')->pluck('cnt');
        $usage4 = DB::table('answers')->
        where('headset_usage', 'team')->
        selectRaw('count(id) as cnt')->pluck('cnt');

        $headset_usg =array($usage1,$usage2,$usage3,$usage4);


        $img_rating = DB::table('answers')->avg('headset_image_rating');
        $interface_rating = DB::table('answers')->avg('headset_interface_rating');
        $network_rating = DB::table('answers')->avg('headset_network_rating');
        $graphics_rating = DB::table('answers')->avg('headset_graphics_rating');
        $audio_rating = DB::table('answers')->avg('headset_audio_rating');

        $global_rating = array($img_rating,$interface_rating,$network_rating,$graphics_rating,$audio_rating);
        
        return view('home',['user'=>$user,'answers'=>$answers,'hdst_type'=>$hdst_type,'store_type'=>$store_type,'headset_usg'=>$headset_usg,'global_rating'=>$global_rating]);
    }
}
