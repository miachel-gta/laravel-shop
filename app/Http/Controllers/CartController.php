<?php

namespace App\Http\Controllers;

use App\Http\Requests\AddCartRequest;


use App\Models\CartItem;
use App\Models\ProductSku;
use App\Services\CartService;
use Illuminate\Http\Request;


class CartController extends Controller
{
    protected $cartService;
    public function __construct(CartService $cartService)
    {
        $this->cartService = $cartService;
    }

    public function add(AddCartRequest $request)
    {
        $skuId = $request->input('sku_id');
        $amount = $request->input('amount');

        $this->cartService->add($skuId, $amount);

        return [];
    }

    public function index(Request $request)
    {
        $cartitems = $this->cartService->get();
        $addresses = $request->user()->addresses()->orderBy('last_used_at', 'desc')->get();

        return view('cart.index', ['cartItems' => $cartitems, 'addresses' => $addresses]);
    }

    public function remove(Request $request, ProductSku $sku)
    {
        $this->cartService->remove($sku->id);

        return [];
    }
}
