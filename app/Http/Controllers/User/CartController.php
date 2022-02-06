<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Card;
use Illuminate\Support\Facades\Auth;


class CartController extends Controller
{
    //
    public function add(Request $request)
    {
        $itemInCart = Card::where('product_id', $request->product_id)
        ->where('user_id', Auth::id())->first();

        if($itemInCart) {
            $itemInCart->quantity += $request->quantity;
            $itemInCart->save();

        }else{
            Card::create([
                'user_id' => Auth::id(),
                'product_id' => $request->product_id,
                'quantity' => $request->quantity
            ]);
        }
        dd('テスト');
    }
}
