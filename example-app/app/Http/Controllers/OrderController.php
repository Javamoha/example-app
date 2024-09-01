<?php

namespace App\Http\Controllers;

use App\Models\Order;
use Illuminate\Http\Request;
use App\Models\Medicine;
use App\Models\Order_Medicine;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use App\Notifications\AdminNotification;


class OrderController extends Controller
{
    public function createOrder(Request $request)
    {
        $medicine = Medicine::find($request->medicine_id);
        $available_quantity = $medicine->quantity;
    
        if ($request->quantity_request > $available_quantity) {
            return response()->json([
                'message' => 'الكمية المطلوبة غير متاحة حاليًا.'
            ]);
        }
    
        // إنشاء الطلبية والتحقق من الكمية المطلوبة
        $order = new Order();
        $order->customer_name = $request->customer_name;
        $order->save();
    
        $order_medicine = new Order_Medicine();
        $order_medicine->order_id = $order->id;
        $order_medicine->medicine_id = $request->medicine_id;
        $order_medicine->quantity_request = $request->quantity_request;
        $order_medicine->save();
    
        return response()->json([
            'message' => 'تم إنشاء الطلبية بنجاح'
        ]);
    
    }

    
    public function showorder(Request $request ,$medicine_id)
    {
        $order_medicine = Order_Medicine::find($medicine_id);
        $medicines = $order_medicine->medicines;

foreach ($medicines as $medicine) {
    // استخدم المعلومات المطلوبة من جدول الأدوية هنا
    $medicine_id = $medicine->id;
    $medicine_name = $medicine->name;
    // ...
}
    }
    public function EditOrder(Request $request, $id)
     {
        $order_medicine = Order_Medicine::find($id);
        $medi = $order_medicine->medicine_id;
         $order = Order::findOrFail($id);
          if ($request->status === 'Received')
           { 
             $order->status = $request->status;
              $order->pay = $request->pay;
               $order->save();
              $medicine = Medicine::where('id', '=', $medi)->first(); 
              if ($medicine) { 
                { $medicine->quantity -= $order_medicine->quantity_request; 
                    $medicine->save(); 
                } 
                   
                    } 
                
                 return response()->json([ 'message' => 'success' ]);
                 }
                  $order->status = $request->status; 
                  $order->pay = $request->pay;
                   $order->save(); 
                   return response()->json([ 'message' => 'success' ]); }
                  
                   public function storeOrder(Request $request  )
                   {
                       if (Auth::check()) {
                           $user = Auth::user();
                   
                           $order = new Order();
                           $order->user_id = $user->id;
                           $order->customer_name = $user->name;
                   
                           $order->save();
                   
                           // Assuming $medicineId is passed from the request or any other source
                          
                   $medi=$request->input('medicune_id');
                   $quantity=$request->input('quantity'); 
                   $medicines_quantity=Medicine::find($medi);
                   $medicines_quantityy=$medicines_quantity->quantity;
                    if( $quantity < $medicines_quantityy)  {  
                               $orderMedicine = new Order_Medicine();
                               $orderMedicine->order_id = $order->id;
                               $orderMedicine->medicine_id =$medi; 
                               $orderMedicine->quantity_request =$quantity; 
                               $medicines_quantity->quantity=$medicines_quantityy-$quantity;
                               $orderMedicine->save();
                               $medicines_quantity->save();
                   
                               return redirect('/');}
                               else{
                                return 0;
                               }

                           } 
                           
                   
                        else {
                           return 1;
                       }
                   }
                   public function showdashorder(Request $request){
                    $order_medis = Order_Medicine::get();
                
                    $orders = [];
                    foreach ($order_medis as $order_medi) {
                        $orderid = $order_medi->order_id;
                        $medicineid = $order_medi->medicine_id;
                        $quan = $order_medi->quantity_request;
                
                        $medicine = Medicine::find($medicineid);
                        $scientific_name = $medicine->scientific_name;
                        $price = $medicine->price;
                
                        $order = Order::find($orderid);
                        $customer_name = $order->customer_name;
                        $pay = $order->pay;
                        $status = $order->status;
                
                        $orders[] = [
                            'scientific_name' => $scientific_name,
                            'price' => $price,
                            'customer_name' => $customer_name,
                            'pay' => $pay,
                            'status' => $status,
                            'quantity_request'=> $quan
                        ];
                    }
                  
                    return view('admin/showorder', ['orders' => $orders]);
                }
    }

