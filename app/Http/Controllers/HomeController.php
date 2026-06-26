<?php

namespace App\Http\Controllers;

use App\Models\About;
use App\Models\Banner;
use App\Models\Brand;
use App\Models\Company;
use App\Models\Product;
use App\Models\Specialist;
use App\Models\Taxonomy;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $company = Company::first();
        $banners = Banner::all();
        $categories = Taxonomy::all();
        $especialistas = Specialist::all();
        $products = Product::with('taxonomy')->where('destacado', 1)->where('activo',1)->take(4)->get();

        return view('home', compact('company', 'banners', 'categories', 'products', 'especialistas'));
    }

    public function tienda()
    {
        $company = Company::first();
        $categories = Taxonomy::all();
        $brands = Brand::all();
        $especialistas = Specialist::all();
        $products = Product::with(['taxonomy', 'brand'])->where('activo',1)->get();

        return view('tienda', compact('company', 'products', 'categories', 'brands', 'especialistas'));
    }

    public function nosotros()
    {
        $company = Company::first();
        $nosotros = About::first();    
        $especialistas = Specialist::all();    

        return view('nosotros', compact('company', 'nosotros', 'especialistas'));
    }

    public function contacto()
    {
        $company = Company::first();
        $especialistas = Specialist::all();

        return view('contacto', compact('company', 'especialistas'));
    }

    public function detalle()
    {
        $company = Company::first();
        $especialistas = Specialist::all();
        return view('producto-detalle', compact('company', 'especialistas'));
    }
}
