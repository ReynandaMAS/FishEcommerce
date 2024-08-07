<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use App\Models\TransactionDetail;
use App\Models\User;

class DashboardController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        // whereHas adalah memanggil relasi dari transaction detail
        $transactions = TransactionDetail::with(['transaction.user', 'product.galleries'])
                ->whereHas('product', function($product) {
                    $product->where('users_id', Auth::user()->id);
                });
        $revenue = $transactions->get()->reduce(function($carry, $item) {
            return $carry + $item->price;
        });
        $customer = User::count();

        return view('pages.dashboard', [
            'transactions_count' => $transactions->count(),
            'transactions_data' => $transactions->get(),
            'revenue' => $revenue,
            'customer' => $customer
        ]);
    }
}
