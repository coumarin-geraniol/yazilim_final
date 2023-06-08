<?php

namespace App\Http\Controllers\API\Order;

use App\Http\Controllers\Controller;
use App\Http\Requests\API\Order\IndexRequest;
use App\Http\Resources\Order\OrderResource;
use App\Models\Buyer;
use App\Models\Order;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use function App\Http\Controllers\API\Item\app;

class StoreController extends Controller
{
    public function __invoke(IndexRequest $request)
    {
        $data = $request->validated();



        $data['password'] = Hash::make('123456789');
        $user = User::firstOrCreate([
            'email' => $data['email'],
            'password' => $data['password']
        ]);

        $buyer = Buyer::firstOrCreate([
            'user_id' => $user->id,
            'address' => $data['address'],
            'country' => $data['country'],
            'phone' => $data['phone'],
            'name' => $data['name'],
            'surname' => $data['surname'],
        ]);

        $order = Order::create([
            'items' => json_encode($data['items']),
            'buyer_id' => $buyer->id,
            'total_price' => $data['total_price'],
        ]);

        return new OrderResource($order);
    }
}
