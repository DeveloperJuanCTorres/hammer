<?php

namespace App\Http\Controllers;

use App\Models\Brand;
use App\Models\Company;
use App\Models\Product;
use App\Models\Specialist;
use App\Models\Taxonomy;
use Illuminate\Http\Request;

class ShopController extends Controller
{

    // public function index()
    // {
    //     $company = Company::first();

    //     /*
    //     |--------------------------------------------------------------------------
    //     | Categorías
    //     |--------------------------------------------------------------------------
    //     */

    //     $categories = Taxonomy::withCount([
    //         'products as products_count' => function ($q) {
    //             $q->where('activo',1);
    //         }
    //     ])
    //     ->orderBy('nombre')
    //     ->get();

    //     /*
    //     |--------------------------------------------------------------------------
    //     | Marcas
    //     |--------------------------------------------------------------------------
    //     */

    //     $brands = Brand::withCount([
    //         'products as products_count' => function ($q) {
    //             $q->where('activo',1);
    //         }
    //     ])
    //     ->orderBy('nombre')
    //     ->get();

    //     return view('tienda', compact(
    //         'company',
    //         'categories',
    //         'brands'
    //     ));
    // }

    // /**
    //  * AJAX
    //  */
    // public function listado(Request $request)
    // {

    //     $query = Product::query()
    //         ->with([
    //             'taxonomy:id,nombre',
    //             'brand:id,nombre'
    //         ])
    //         ->where('activo',1);

    //     /*
    //     |--------------------------------------------------------------------------
    //     | Buscar
    //     |--------------------------------------------------------------------------
    //     */

    //     if($request->filled('buscar'))
    //     {

    //         $buscar = trim($request->buscar);

    //         $query->where(function($q) use($buscar){

    //             $q->where('nombre','like',"%{$buscar}%")
    //               ->orWhere('descripcion_corta','like',"%{$buscar}%")
    //               ->orWhere('slug','like',"%{$buscar}%");

    //         });

    //     }

    //     /*
    //     |--------------------------------------------------------------------------
    //     | Categorías
    //     |--------------------------------------------------------------------------
    //     */

    //     if($request->filled('categorias'))
    //     {

    //         $categorias = explode(",",$request->categorias);

    //         $query->whereIn(
    //             'taxonomy_id',
    //             $categorias
    //         );

    //     }

    //     /*
    //     |--------------------------------------------------------------------------
    //     | Marcas
    //     |--------------------------------------------------------------------------
    //     */

    //     if($request->filled('marcas'))
    //     {

    //         $marcas = explode(",",$request->marcas);

    //         $query->whereIn(
    //             'brand_id',
    //             $marcas
    //         );

    //     }

    //     /*
    //     |--------------------------------------------------------------------------
    //     | Destacados
    //     |--------------------------------------------------------------------------
    //     */

    //     if($request->destacado==1)
    //     {

    //         $query->where('destacado',1);

    //     }

    //     /*
    //     |--------------------------------------------------------------------------
    //     | Ordenamiento
    //     |--------------------------------------------------------------------------
    //     */

    //     switch($request->orden){

    //         case "precio_menor":

    //             $query->orderBy('precio_referencial');

    //         break;

    //         case "precio_mayor":

    //             $query->orderByDesc('precio_referencial');

    //         break;

    //         case "nombre":

    //             $query->orderBy('nombre');

    //         break;

    //         case "antiguos":

    //             $query->oldest();

    //         break;

    //         default:

    //             $query->latest();

    //     }

    //     /*
    //     |--------------------------------------------------------------------------
    //     | Cantidad
    //     |--------------------------------------------------------------------------
    //     */

    //     $perPage = $request->per_page ?? 12;

    //     if(!in_array($perPage,[12,24,36,48])){

    //         $perPage = 12;

    //     }

    //     $products = $query
    //         ->paginate($perPage)
    //         ->withQueryString();

    //     return response()->json([

    //         "html" => view(
    //             'shop.productos',
    //             compact('products')
    //         )->render(),

    //         "pagination" => view(
    //             'shop.pagination',
    //             compact('products')
    //         )->render(),

    //         "total"=>$products->total(),

    //         "desde"=>$products->firstItem(),

    //         "hasta"=>$products->lastItem(),

    //         "ultima"=>$products->lastPage()

    //     ]);

    // }

    // /**
    //  * Detalle
    //  */
    // public function detalle($slug)
    // {

    //     $company = Company::first();

    //     $product = Product::with([
    //             'taxonomy',
    //             'brand'
    //         ])
    //         ->where('slug',$slug)
    //         ->where('activo',1)
    //         ->firstOrFail();

    //     /*
    //     |--------------------------------------------------------------------------
    //     | Relacionados
    //     |--------------------------------------------------------------------------
    //     */

    //     $related = Product::where('taxonomy_id',$product->taxonomy_id)
    //         ->where('id','!=',$product->id)
    //         ->where('activo',1)
    //         ->take(8)
    //         ->get();

    //     return view(
    //         'detalle',
    //         compact(
    //             'company',
    //             'product',
    //             'related'
    //         )
    //     );

    // }



    public function index()
    {
        $company = Company::first();
        $especialistas = Specialist::all();

        $categories = Taxonomy::withCount([
            'products as total' => function ($q) {
                $q->where('activo',1);
            }
        ])->orderBy('nombre')->get();

        $brands = Brand::withCount([
            'products as total' => function ($q) {
                $q->where('activo',1);
            }
        ])->orderBy('nombre')->get();

        return view(
            'tienda',
            compact(
                'company',
                'categories',
                'brands', 
                'especialistas'
            )
        );
    }

    public function productos(Request $request)
    {

        $query = Product::with([
            'taxonomy',
            'brand'
        ])
        ->where('activo',1);

        /*
        |--------------------------------------------------------------------------
        | Buscar
        |--------------------------------------------------------------------------
        */

        if($request->filled('buscar'))
        {

            $buscar = $request->buscar;

            $query->where(function($q) use($buscar){

                $q->where('nombre','like',"%{$buscar}%")
                  ->orWhere('codigo','like',"%{$buscar}%")
                  ->orWhere('descripcion','like',"%{$buscar}%");

            });

        }

        /*
        |--------------------------------------------------------------------------
        | Categorías
        |--------------------------------------------------------------------------
        */

        if($request->filled('categorias'))
        {

            $categorias = explode(',', $request->categorias);

            $query->whereIn(
                'taxonomy_id',
                $categorias
            );

        }

        /*
        |--------------------------------------------------------------------------
        | Marcas
        |--------------------------------------------------------------------------
        */

        if($request->filled('marcas'))
        {

            $marcas = explode(',', $request->marcas);

            $query->whereIn(
                'brand_id',
                $marcas
            );

        }

        /*
        |--------------------------------------------------------------------------
        | Ordenamiento
        |--------------------------------------------------------------------------
        */

        switch ($request->orden){

            case 'precio_asc':

                $query->orderBy('precio_referencial');

            break;

            case 'precio_desc':

                $query->orderByDesc('precio_referencial');

            break;

            case 'nombre':

                $query->orderBy('nombre');

            break;

            case 'recientes':

                $query->latest();

            break;

            default:

                $query->latest();

            break;

        }

        /*
        |--------------------------------------------------------------------------
        | Cantidad por página
        |--------------------------------------------------------------------------
        */

        $perPage = $request->perPage ?? 12;

        $products = $query->paginate($perPage);

        if($request->ajax()){

            return response()->json([

                'html'=>view(
                    'ajax.productos',
                    compact('products')
                )->render(),

                'pagination'=>view(
                    'ajax.pagination',
                    compact('products')
                )->render(),

                'total'=>$products->total(),

                'desde'=>$products->firstItem(),

                'hasta'=>$products->lastItem()

            ]);

        }

        abort(404);

    }
}
