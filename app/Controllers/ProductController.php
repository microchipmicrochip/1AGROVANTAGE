<?php

namespace App\Controllers;

use App\Models\ProductModel;
use App\Models\CategoryModel;
use CodeIgniter\Controller;

class ProductController extends Controller
{
    public function index()
    {
        $categoryModel = new CategoryModel();
        $productModel = new ProductModel(); 

        $categoryId = $this->request->getGet('category');
        if ($categoryId) {
            $data['products'] = $productModel->where('category_id', $categoryId)->findAll();
        } else {
            $data['products'] = $productModel->findAll();
        }

        $data['categories'] = $categoryModel->findAll();

        $data['title'] = 'Products';
        $data['content'] = view('products/index', $data);

        return view('layouts/base', $data);
    }

    public function show($id = null)
    {
        $productModel = new ProductModel(); 
        $data['product'] = $productModel->find($id);

        if ($data['product'] === null) {
            throw \CodeIgniter\Exceptions\PageNotFoundException::forPageNotFound();
        }

        $data['title'] = $data['product']['name'];
        $data['content'] = view('products/show', $data);

        return view('layouts/base', $data);
    }
}