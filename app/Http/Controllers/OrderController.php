<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\Product;
use App\Models\UserInformation;
use Illuminate\Http\Request;

class OrderController extends Controller
{

    protected $data;
    protected $op;

    public function __construct()
    {
        $this->middleware('checkUserLogin', ['except' => ['Index']]);
    }

    public function Index()
    {
        $this->data = Order::where('user_id', auth('web')->user()->id)->get();
        return view('profile.cart.index', ['data' => $this->data]);
    }


    public function Create($id)
    {
        $this->data = Product::where('id', $id)->get();
        // dd($this->data);

        $this->op = Order::create([
            'name' => $this->data[0]->name,
            'price' => $this->data[0]->price,
            'quantity' => 1,
            'totalPrice' => $this->data[0]->price,
            'image' => $this->data[0]->image,
            'user_id' => auth('web')->user()->id
        ]);

        if ($this->op) {
            return redirect(url('/cart'));
        }
    }


    public function Update(Request $request, $id)
    {
        Order::where('id', $id)->Update(['quantity' => $request->quantity, 'totalPrice' => $request->new_price * $request->quantity]);

        return back();
    }


    public function Delete($id)
    {
        Order::where('id', $id)->Delete();
        return back();
    }


    public function GoCheckout()
    {
        $this->data = Order::where('user_id', auth('web')->user()->id)->get();
        $costs = Order::where('user_id', auth('web')->user()->id)->get()->sum('totalPrice');
        return view('profile.checkout.index', ['data' => $this->data, 'cost' => $costs]);
    }


    public function Checkout(Request $request)
    {
        $this->data = $this->validate($request, [
            "phone" => "required",
            "country" => "required",
            "city" => "required",
            "address" => "required",
            "postCode" => "required"
        ]);

        $this->data['user_id'] = auth('web')->user()->id;

        $this->op = UserInformation::create($this->data);

        if ($this->op) {
            return redirect(url('/completeOrder'));
        } else {
            return back();
        }
    }

    public function CompleteOrder()
    {
        return view('profile.checkout.confirmation');
    }
}
