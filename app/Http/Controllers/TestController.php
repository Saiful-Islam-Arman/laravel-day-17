<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ModelProduct;
use App\Models\BlogModel;

class TestController extends Controller
{
    private $products;
    private $result;
    private $blogs;
    private $results;

    public function index()
    {
        return view( 'home');
    }

    public function product()
    {
        $this->products = ModelProduct::getAllProduct();
        return view('product', ['products' => $this->products]);
    }

    public function detail($id)
    {
        $this->products = ModelProduct::getAllProduct();
        foreach($this->products as $product)
        {
            if($product['id'] == $id)
            {
                $this->result = $product;
                break;
            }
        }

        return view('product-detail', ['product' => $this->result]);
    }

    public function blog()
    {
        $this->blogs = BlogModel::getBloginfo();
        return view('blog', ['blogs' => $this->blogs]);
    }

    public function blogDetail($id)
    {
        $this->blogs = BlogModel::getBloginfo();
        foreach($this->blogs as $blog)
        {
            if($blog['id'] == $id)
            {
                $this->results = $blog;
                break;
            }
        }
        return view('blog-detail', ['blog' => $this->results]);
    }

}
