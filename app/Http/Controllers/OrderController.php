<?php

namespace App\Http\Controllers;

use Exception;
use App\Models\User;
use App\Models\Esewa;
use App\Models\Order;
use Illuminate\Support\Str;
use App\Models\OrderProduct;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use App\Notifications\OrderConfirmed;
use App\Notifications\OrderNotification;
use Gloudemans\Shoppingcart\Facades\Cart;

class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //dd('inside order store');
        // dd($request->all());
        $this->validate($request, [
            'name'                => 'required | string',
            'email'               => 'required | email',
            'phone'               => 'required | numeric',
            'address'             => 'required | string',
            'state'               => 'required | string',
            'city'                => 'required | string',
            'different_address'   => 'nullable',
            'payment_gateway'     => 'required | string',
        ]);

        if ($request->different_address) {
            $this->validate($request, [
                'shipping_name'     => ' required | string ',
                'shipping_email'    => ' required | email ',
                'shipping_phone'    => ' required | numeric ',
                'shipping_address'  => ' required | string ',
                'shipping_state'    => ' required | string ',
                'shipping_city'     => ' required | string ',
            ]);
        }

        DB::beginTransaction();
        try {
            $order= $this->addToOrdersTable($request);

            $this->addToOrderProductTable($order);

            DB::commit();
        } catch (\Exception $e) {
            // DB::rollback();
            return redirect()->back()->with('error', 'Unable to Place the order');
            // something went wrong
        }
        // dd($request->all());
        $user=User::findOrFail(1);
        $user->notify(new OrderNotification($order));

        Auth::user()->notify(new OrderConfirmed($order));

        Cart::instance('default')->destroy();
        session()->forget('coupon');

        if ($request->payment_gateway=="esewa") {
            $this->payWithEsewa($order);
            return redirect()->route('checkout.payment.esewa', $order->id)->with('Success', 'Your payment has been successfully accepted! DONT forget to check your email.');
        }
       
        return redirect()->route('orderDetail', $order->id)->with('Success', 'Your order has been confirmed! DONT forget to check your email.');
    }

    /**
     * Store ORDER Details in database
     *
     * @param  \Illuminate\Http\Request  $request , $error
     * @return \Illuminate\Http\Response $order
     */

    protected function addToOrdersTable($request)  //helper function banako
    {
        //dd($request);
        $order= Order::create([
            'users_id'=> Auth::id() ,
            'name'=>$request->name,
            'email'=>$request->email,
            'phone' => $request->phone,
            'address'=> $request->address,
            'state'=>$request->state,
            'city'=>$request->city,
            'discount'=>$this->getNumbers()->get('discount'),
            'discount_code'=>$this->getNumbers()->get('code'),
            'subtotal'=>$this->getNumbers()->get('subtotal'),
            'total'=>$this->getNumbers()->get('total'),
            'payment_gateway'=>$request->payment_gateway,
            'shipping_name'=>$request->shipping_name,
            'shipping_email'=>$request->shipping_email,
            'shipping_phone' => $request->shipping_phone,
            'shipping_address'=> $request->shipping_address,
            'shipping_state'=>$request->shipping_state,
            'shipping_city'=>$request->city,
        ]);
    
        return $order;
    }


    /**
     * Store a newly created order in database
     *
     * @param  \Illuminate\Http\Request  $request , $error
     * @return \Illuminate\Http\Response $order
    */

    protected function addToOrderProductTable($order)  //helper function banako
    {
        //insert into pivot table
        foreach (Cart::content() as $item) {
            OrderProduct::create([
                'order_id'=> $order->id,
                'product_id'=>$item->id,
                'quantity'=> $item->qty,
                'original_price' => $item->options->original_price,
                'discount'=> $item->options->discount,
                'discounted_price' => $item->options->discounted_price,
                'tax_amount' => $item->options->tax ,
            ]);
        }
    }


    /**
    * ESEWA PAYMENT
    *
    *
    * @return \Illuminate\Http\Response $order
    */
    private function payWithEsewa($order)
    {
        $gateway = with(new Esewa);

        try {
            $response = $gateway->purchase([
                'amount' => $gateway->formatAmount($order->subtotal),
                'totalAmount' => $gateway->formatAmount($order->total),
                'productCode' => Str::random(10),
                'failedUrl' => $gateway->getFailedUrl($order),
                'returnUrl' => $gateway->getReturnUrl($order),
            ]);
        } catch (Exception $e) {
            //$order->update(['payment_status' => Order::PAYMENT_PENDING]);
            return redirect()
                ->route('checkout.payment.esewa.failed', [$order->id])
                ->with('message', sprintf("Your payment failed with error: %s", $e->getMessage()));
        }

        if ($response->isRedirect()) {
            $response->redirect();
        }

        return redirect()->back()->with('Error', "We're unable to process your payment at the moment, please try again !");
    }
    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function show(Order $order)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function edit(Order $order)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Order $order)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Order  $order
     * @return \Illuminate\Http\Response
    */
    public function destroy(Order $order)
    {
        //
    }
}
