<?php

namespace App\Http\Controllers;
use App\Models\TransactionDetail;
use Illuminate\Support\Facades\Auth;
use App\Models\Province;
use App\Models\Regency;
use Illuminate\Http\Request;

class DashboardTransactionController extends Controller
{
    public function index()
    {
        $sellTransactions = TransactionDetail::with(['transaction.user', 'product.galleries'])
                            ->whereHas('product', function($product) {
                              $product->where('users_id', Auth::user()->id);
                        })->get();

        $buyTransactions = TransactionDetail::with(['transaction.user', 'product.galleries'])
                            ->whereHas('transaction', function($transaction) {
                                $transaction->where('users_id', Auth::user()->id);
                        })->get();

        return view('pages.dashboard-transactions', [
            'sellTransactions' => $sellTransactions,
            'buyTransactions' => $buyTransactions,
        ]);
    }
    public function details(request $request, $id)
    {
        $transaction = TransactionDetail::with(['transaction.user', 'product.galleries'])
        ->findOrFail($id);
    
        return view('pages.dashboard-transactions-details',[
            'transaction' => $transaction
        ]);
    }

    public function update(Request $request, $id)
    {
        $data = $request->all();

        $item = TransactionDetail::findOrFail($id);

        $item->update($data);

        return redirect()->route('dashboard-transaction-update', $id);
    }
}
