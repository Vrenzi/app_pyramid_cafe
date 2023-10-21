<?php

namespace App\Http\Controllers;

use App\Models\Transaction;
use App\Models\Menu;
use App\Models\TransactionDetail;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Auth;
use RealRashid\SweetAlert\Facades\Alert;

class MenuController2 extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    
   public function index(Menu $menu)
   {
    $foods = Menu::all();
    $drinks = Menu::all();
    $desserts = Menu::all();

    return view('pyramid.menu', [
        'foods' => $menu->where('category','food')->latest()->get(),
        'drinks' => $menu->where('category', 'drink')->latest()->get(),
        'desserts' => $menu->where('category', 'dessert')->latest()->get()
    ]);
   }

   public function home(Menu $menu)
   {
    $all = Menu::all();

    return view('pyramid.index', compact('all'));
   }
}
