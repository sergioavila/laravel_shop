<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Product;


class ProductController extends Controller
{
  public function list()
  {
    return Product::orderBy('id','DESC')->get();
  }
  public function view()
  {

  }
  public function store( Request $request )
  {
    $this->validate($request, [
      'title' => 'required',
      'price' => 'required'
    ]);
    Product::create($request->all());
  }
}
