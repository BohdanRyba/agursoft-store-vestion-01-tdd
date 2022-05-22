<?php

namespace App\Http\Controllers;

use App\Billing\LiqPay\Contracts\LiqpayServiceInterface;
use App\CategoryModule\Contracts\Http\Services\CategoryServiceInterface;
use App\Models\Product;
use App\SliderModule\Contracts\Http\Services\SliderServiceInterface;
use Gloudemans\Shoppingcart\Facades\Cart;
use Illuminate\Support\Facades\Request;
use Illuminate\Support\Facades\Session;

class HomeController extends Controller
{
    /**
     * @var SliderServiceInterface $sliderService
     */
    private SliderServiceInterface $sliderService;

    /**
     * @var CategoryServiceInterface $categoryService
     */
    private CategoryServiceInterface $categoryService;
    private LiqpayServiceInterface $liqpayService;


    /**
     * Create a new controller instance.
     *
     * @param CategoryServiceInterface $categoryService
     * @param SliderServiceInterface $sliderService
     */
    public function __construct(
        CategoryServiceInterface $categoryService,
        SliderServiceInterface $sliderService,
        LiqpayServiceInterface $liqpayService
    ) {
        $this->categoryService = $categoryService;
        $this->sliderService = $sliderService;
        $this->liqpayService = $liqpayService;
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        Cart::restore(Session::getId());
//        dd(Cart::content());
//        Cart::add('192ao12', 'Product 1', 1, 9.99);
//        Cart::add('1239ad0', 'Product 2', 2, 5.95);
        Cart::store(Session::getId());

        $paymentForm = $this->liqpayService->getForm(1000);
        $categories = $this->categoryService->getCategories();
        $slider = $this->sliderService->getSliderByTitle('homepage');
        $products = Product::query()->get()->toJson();
//        dd($products);
        return view('wookie.home', compact('categories', 'slider', 'paymentForm', 'products'));
    }

    public function showProduct()
    {
        return view('wookie.product.product');
    }

    public function cart()
    {
        Cart::restore(Session::getId());
        Cart::store(Session::getId());

        return view('wookie.cart');
    }

    public function checkout()
    {
        Cart::restore(Session::getId());
        Cart::store(Session::getId());

        return view('wookie.checkout');
    }

    public function removeProductFromCart($rowId)
    {
        Cart::restore(Session::getId());
        Cart::remove($rowId);
        Cart::store(Session::getId());

        return view('wookie.cart');
    }

    public function addProductToCart($rowId)
    {
        $product = Product::query()->findOrFail($rowId);

        Cart::restore(Session::getId());
//        dd((float)$product->formatted_price);
        Cart::add($product->id, $product->name, 1, $product->formatted_price);
        Cart::store(Session::getId());

        return redirect()->back();
    }

    public function updateProductInCart($rowId)
    {
        Cart::restore(Session::getId());
        Cart::update($rowId, request('product_qty'));
        Cart::store(Session::getId());

        return view('wookie.cart');
    }

    public function updateShippingAddress(Request $request)
    {

        $item = Cart::restore(Session::getId());
        $item = Cart::store(Session::getId());
        dd(Session::getId());
        return redirect()->back();

    }

    public function updateBillingAddress(Request $request)
    {
        return redirect()->back();
    }

    public function createProduct()
    {
        $product = Product::create([
            'category_id' => 1,
            'slug' => 'test'.rand(1,10000),
            'name' => 'test',
            'picture' => 'test',
            'short_description' => 'test',
            'properties' => 'test',
            'description' => 'test',
            'price' => 1000,
            'quantity' => 1,
            'discount_percent' => 0,
            'discount_amount' => 0,
            'type_id' => 1,
            'price_dollar' => 1,
            'price_euro' => 1,
            'old_price' => 2000,
        ]);
    }
}
