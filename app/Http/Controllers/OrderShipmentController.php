<?php
 
namespace App\Http\Controllers;
 
use App\Http\Controllers\Controller;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Jobs\JobOrderShipped;

 
class OrderShipmentController extends Controller
{
    /**
     * Ship the given order.
     */
    public function store(Request $request): RedirectResponse
    {
        logger("Order Shipped");
        
 
        // Ship the order...

        JobOrderShipped::dispatch();
        JobOrderShipped::dispatch()->delay(now()->addMinutes(1));
 
        return redirect('/');
    }
}