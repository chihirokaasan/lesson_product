<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Contracts\View\View;

use App\Models\Product;
use App\Repository\ProductRepository;
use App\Http\Requests\ProductRequest;

class ProductsController extends Controller
{
    private const DEFAULT_PER_PAGE_RECORD = 10;
    protected Product $product;
    protected ProductRepository $productRepository;
    public function __construct(
        Product $product,
        ProductRepository $productRepository
    ) {
        $this->product                  = $product;
        $this->productRepository        = $productRepository;
    }
    /**
     * 商品一覧
     * @param ListRequest $request
     * @return View
     */
    public function index(ProductRequest $request): View
    {
        // default limit
        $limit = $request->input('limit') ?? self::DEFAULT_PER_PAGE_RECORD;
        $productList = $this->productRepository->getPaginationListByConditions(
            $request,
            $limit
        );

        $params = $request->except('page');

        return view('product.index',
            compact('productList', 'params', 'request', 'limit')
        );
    }
}
