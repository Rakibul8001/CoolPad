<?php

namespace App\Http\Controllers;

use App\Models\Wheretobuy;
use Illuminate\Http\Request;

class ProductListController extends Controller
{
    public function ListProduct(){
        return view('frontend.pages.product-list-page');
    }

    //Mega-menu smartphone
    public function megamenuOne(){
        return view('frontend.pages.megamenu.smartphone');
    }
    //Mega-menu Accessories
    public function megamenuTwo(){
        $wheretobuys = Wheretobuy::all();
        $wheretobuys = json_decode($wheretobuys);
        return view('frontend.pages.megamenu.accessories',compact('wheretobuys'));
    }

    //Cools Phone page
    public function coolS(){
        $wheretobuys = Wheretobuy::all();
        $wheretobuys = json_decode($wheretobuys);
        return view('frontend.pages.phones.cools',compact('wheretobuys'));
    }
    public function coolsDetails(){
        $wheretobuys = Wheretobuy::all();
        $wheretobuys = json_decode($wheretobuys);
        return view('frontend.pages.phones.cools-details',compact('wheretobuys'));
    }

    public function n7Plus(){
        $wheretobuys = Wheretobuy::all();
        $wheretobuys = json_decode($wheretobuys);
        return view('frontend.pages.phones.n7plus',compact('wheretobuys'));
    }
    public function n7PlusDetails(){
        $wheretobuys = Wheretobuy::all();
        $wheretobuys = json_decode($wheretobuys);
        return view('frontend.pages.phones.n7plus-details',compact('wheretobuys'));
    }
    public function n7Air(){
        $wheretobuys = Wheretobuy::all();
        $wheretobuys = json_decode($wheretobuys);
        return view('frontend.pages.phones.n7air',compact('wheretobuys'));
    }
    public function n7AirDetails(){
        $wheretobuys = Wheretobuy::all();
        $wheretobuys = json_decode($wheretobuys);
        return view('frontend.pages.phones.n7air-details',compact('wheretobuys'));
    }
}
