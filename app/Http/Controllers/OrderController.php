<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Order;
class OrderController extends Controller
{
    public function index()
    {
        $order = Order::all();
        return response()->json($order);
    }
    public function store(Request $request)
    {
        $order = new Order();
        $order->productid = $request->productid;
        $order->quantity = $request->quantity;
        $order->adress = $request->adress;
        $order->shippingdate = $request->shippingdate;
        $order->save();
        return response()->json('Sipariş oluşturuldu.');
    }
    public function show($id)
    {
        $order = Order::find($id);
        return response()->json($order);
    }
    public function update(Request $request, $id)
    {

        $order = Order::find($id);
        if($order->shippingdate > date('Y-m-d H:i:s',time())){
            $order->productid = $request->productid;
            $order->quantity = $request->quantity;
            $order->adress = $request->adress;
            $order->update();
            return response()->json('Sipariş düzenlendi.');
        }else{
            return response()->json('Gönderi yola çıktı.');
        }
    }

}