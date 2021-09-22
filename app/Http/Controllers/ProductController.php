<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{

    protected $data;
    protected $op;

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
    }

    public function IndexDashboard()
    {

        $this->data = Product::with('Category')->get();
        return view('Dashboard.product.index', ['data' => $this->data]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $this->data = Category::get();
        return view('Dashboard.product.create', ['data' => $this->data]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->data = $this->validate($request, [
            "name" => "required",
            "description" => "required",
            "price" => "required",
            "discount" => "required",
            "image" => "required|mimes:png,jpg,jpeg,gif",
            "cat_id" => "required",
        ]);

        $finalImageName = time() . rand() . "." . $request->image->extension();
        // $request->image->move(public_path('/resources/img/products', $finalImageName));
        $request->image->storeAs("images/products", $finalImageName);
        $this->data['image'] = $finalImageName;

        $this->op = Product::create($this->data);

        if ($this->op) {
            return redirect(url('dashboard/product'));
        } else {
            return back();
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $this->data = Product::where('id', $id)->get();
        $categoryData = Category::get();
        return view('Dashboard.product.edit', ['data' => $this->data, 'categoryData' => $categoryData]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->data = $this->validate($request, [
            "name" => "required",
            "description" => "required",
            "price" => "required",
            "discount" => "required",
            "image" => "mimes:png,jpg,jpeg,gif",
            "cat_id" => "required",
        ]);

        $productData = Product::where('id', $id)->get();

        if ($request->hasFile('image')) {
            $finalImageName = time() . rand() . "." . $request->image->extension();
            // $request->image->move(public_path('/resources/img/products', $finalImageName));
            $request->image->storeAs("images/products", $finalImageName);

            if (file_exists('../storage/app/images/products/' . $productData[0]->image)) {
                unlink('../storage/app/images/products/' . $productData[0]->image);
            }
        } else {
            $finalImageName = $productData[0]->image;
        }

        $this->op = Product::where('id', $id)->update([
            'name' => $request->name,
            'description' => $request->description,
            'price' => $request->price,
            'discount' => $request->discount,
            'image' => $finalImageName,
            'cat_id' => $request->cat_id
        ]);

        if ($this->op) {
            return redirect(url('dashboard/product'));
        } else {
            return back();
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $this->op = product::where('id', $id)->delete();

        if ($this->op) {
            return redirect(url('dashboard/product'));
        }
    }
}
