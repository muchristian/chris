<?php

namespace App\Http\Controllers;

use App\Site;
use App\Campany;
use App\Itemtype;
use App\Input;
use App\Output;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

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
     * @return \Illuminate\Http\Response
     */



    /* input functions */
    public function index()
    {
        $inputs = Input::all();
        return view('home', compact('inputs'));
    }
    public function inputAdd(){
        $data = [
          "itemtypes" => Itemtype::all(),
          "campanies" => Campany::all(),
          "sites" => Site::all()
        ];
        return view('inputItem', compact('data'));
    }
    public function inputStore(Request $request){
        $inputs = Input::create([
            "name" => $request->input('name'),
            "itemtype_id" => $request->input('itemtype_id'),
            "campany_id" => $request->input('campany_id'),
            "site_id" => $request->input('site_id'),
            "user_id" => Auth::user()->id,
            "quantity" => $request->input('quantity'),
        ]);
        if ($inputs) {
          return back()->with('success', 'Item Inputted successfully.');
        } else {
          return back()->withInput();
        }
    }




    /* site function */
    public function siteIndex(){
        $sites = Site::all();
        return view('site.index', compact('sites'));
    }
    public function siteAdd(){
        return view('site.create');
    }
    public function siteStore(Request $request){
         $site = Site::create([
            "name" => $request->input('name'),
            "location" => $request->input('location')
        ]);
        if ($site) {
          return back()->with('success', 'site created successfully.');
        } else {
          return back()->withInput();
        }
    }



    /* output function */

    public function outIndex(){
        $outputted = Output::all();
        $data = [
          "inputs" => Input::all(),
          "sites" => Site::all(),
        ];
        return view('outItem', compact('data', 'outputted'));
    }
    public function outStore(Request $request){
        $outputs = Output::create([
            "site_id" => $request->input('site_id'),
            "user_id" => Auth::user()->id,
            "input_id" => $request->input('input_id'),
        ]);
        if ($outputs) {
          return back()->with('success', 'Item outputted successfully.');
        } else {
          return back()->withInput();
        }
    }

}
