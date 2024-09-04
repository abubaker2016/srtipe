<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

use Rafwell\Simplegrid\Grid;


class ProductController extends Controller
{
    public function index()
	{    	
		$Grid = new Grid(Product::query(), 'Product');
    	
        $Grid->fields([
        'name'=>'Name',
        'price'=>'Price',
        'description'=>'Description',
        ]);
        $Grid->actionFields([
            'id' 
        ]);
        $Grid->action('Click to Stripe pay', 'stripe/pay/{id}');

        return view('product.index', ['grid'=>$Grid]);

	}

}

