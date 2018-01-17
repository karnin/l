<?php

namespace App\Http\Controllers\V1;


use App\Http\Controllers\Controller;

use App\Http\Resources\OrderCollection;
use App\Order;

class OrdersController extends Controller
{
    public function index(){
       /* phpinfo();
        exit;*/



        return new OrderCollection(Order::paginate());

    }
}
