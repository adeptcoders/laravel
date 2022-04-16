<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
		
		$search = $request->query('search');
		
		if($request->query('search'))
		{
			$products = Product::where('name','like','%'.$request->query('search').'%')
						->orWhere('author','like','%'.$request->query('search').'%')
						->latest()->paginate(5);
		}
		else
        $products = Product::latest()->paginate(5);
    
        return view('products.index',compact('products'))
            ->with('i', (request()->input('page', 1) - 1) * 5)
			->with('search', $request->query('search'));
    }
     
    
}
