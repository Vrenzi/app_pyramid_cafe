<?php

namespace App\Http\Controllers;

use App\Models\Transaction;
use App\Models\Menu;
use App\Models\TransactionDetail;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Auth;
use RealRashid\SweetAlert\Facades\Alert;

class TransactionController2 extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Menu $menu, $no_table)
    {
        return view('pyramid.pemesanan', [
            'foods' => $menu->where('category', 'food')->latest()->get(),
            'drinks' => $menu->where('category', 'drink')->latest()->get(),
            'desserts' => $menu->where('category', 'dessert')->latest()->get(),
            'no_table' => $no_table,
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $transaction = $request->validate([
            'no_table' => 'required',
            'total_transaction' => 'required'
        ]);
        $transaction['user_id'] = '2';
        $transaction['no_table'] = $request->no_table;
        $transaction['total_payment'] = 0;
        $transaction['status'] = 'unpaid';
        $transaction['pesanan'] = 'diproses';
        $transaction['created_at'] = Carbon::now();
        $transaction['updated_at'] = Carbon::now();

        $id = Transaction::insertGetId($transaction);

        $transactionDetail = $request->validate([
            'menu_id' => 'required'
        ]);

        $menu_id = json_decode($request->menu_id);

        for ($i = 0; $i < count($menu_id); $i++) {
            $transactionDetail['transaction_id'] = $id;
            $transactionDetail['menu_id'] = $menu_id[$i]->menu_id;
            $transactionDetail['qty'] = $menu_id[$i]->qty;
            $transactionDetail['price'] = $menu_id[$i]->price;
            TransactionDetail::create($transactionDetail);
        };

        return redirect('/')->with('success', 'Transaksi baru berhasil dibuat!');
    }

    public function no_table($no_table)
    {
        $table = Transaction::where('id', $no_table);

        return view('pyramid.pemesanan', compact('table'));
    }
}
