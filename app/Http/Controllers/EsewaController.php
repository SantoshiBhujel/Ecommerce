<?php

namespace App\Http\Controllers;

use Exception;
use App\Models\Esewa;
use App\Models\Order;

use Illuminate\Support\Str;
use Illuminate\Http\Request;

class EsewaController extends Controller
{
     /**
     * @param Request $request
     */
    public function checkout($order_id)
    {
        //dd($order_id);
        $order = Order::findOrFail($order_id);

        return view('orders.orderDetails', with([
            'menus' =>$this->helper()->get('menus'),
            'navmenus' =>$this->helper()->get('navmenus'),
            'order' => $order
            ]));
    }
    /**
     * @param $order_id
     * @param Request $request
     */
    public function completed($order_id, Request $request)
    {
        $order = Order::findOrFail($order_id);

        $gateway = with(new Esewa);

        $response = $gateway->verifyPayment([
            'amount' => $gateway->formatAmount($order->total),
            'referenceNumber' => $request->get('refId'),
            'productCode' => $request->get('oid'),
        ], $request);

        if ($response->isSuccessful()) 
        {
            // $order->update([
            //     'transaction_id' => $request->get('refId'),
            //     'payment_status' => Order::PAYMENT_COMPLETED,
            // ]);
            //dd($order_id);
            return redirect()->route('checkout.payment.esewa',$order_id)->with('Success','Thank you for shopping, Your recent payment was successful.');
        }

        return redirect()->route('checkout.payment.esewa',$order_id)->with('Error','Thank you for shopping, However, the payment has been declined.');
    }


    
    /**
     * @param $order_id
     * @param Request $request
     */
    public function failed($order_id, Request $request)
    {
        $order = Order::findOrFail($order_id);

        return view('orders.orderDetails', with([
            'menus' =>$this->helper()->get('menus'),
            'navmenus' =>$this->helper()->get('navmenus'),
            'order' => $order
            ]));
    }
}
