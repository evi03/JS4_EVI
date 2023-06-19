<?php

namespace App\Http\Controllers;
use App\Models\menu;
use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function home() {
        return view('pages.home', ['active' => 'home']);
    }

    public function todaySpecial() {
        return view('pages.todaySpecial', ['active' => 'todaySpecial']);
    }

    public function menu() {
        $menus = Menu::all();
        $data = [
            'active' => 'menus',
            'menus' => $menus,
        ];
        return view('pages.menu', $data);
    }

    public function contact() {
        return view('pages.contact', ['active' => 'contact']);
    }
}
