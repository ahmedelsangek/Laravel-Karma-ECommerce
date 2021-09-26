<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class OrderController extends Controller
{

    protected $data;
    protected $op;

    public function Index()
    {
        $this->data = Order::get();
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
}
