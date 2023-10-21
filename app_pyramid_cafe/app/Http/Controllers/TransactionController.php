<?php

namespace App\Http\Controllers;

use App\Models\Transaction;
use App\Models\Menu;
use App\Models\TransactionDetail;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Auth;
use RealRashid\SweetAlert\Facades\Alert;

class TransactionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = Auth::user();

        if ($user->level_id === 3) {
            return redirect()->back();
        }

        if ($user->level_id == 1) {
            $all = Transaction::with(['transaction_details', 'transaction_details.menu'])
                                ->where('status', 'paid')
                                ->latest()
                                ->filter(request(['year', 'month']))
                                ->paginate(10);
            $today = Transaction::with(['transaction_details', 'transaction_details.menu'])
                                ->where('status', 'paid')
                                ->whereDate('created_at',Carbon::now())
                                ->latest()
                                ->filter(request(['year', 'month']))
                                ->paginate(10);
            $thisMonth = Transaction::with(['transaction_details', 'transaction_details.menu'])
                                ->where('status', 'paid')
                                ->whereMonth('created_at',Carbon::now()->month)
                                ->latest()
                                ->filter(request(['year', 'month']))
                                ->paginate(10);
        } else {
            $all = Transaction::with(['transaction_details', 'transaction_details.menu'])
                                ->latest()
                                ->filter(request(['year', 'month']))
                                ->paginate(10);
            $today = Transaction::with(['transaction_details', 'transaction_details.menu'])
                                ->whereDate('created_at',Carbon::now())
                                ->latest()
                                ->filter(request(['year', 'month']))
                                ->paginate(10);
            $thisMonth = Transaction::with(['transaction_details', 'transaction_details.menu'])
                                ->whereMonth('created_at',Carbon::now()->month)
                                ->latest()
                                ->filter(request(['year', 'month']))
                                ->paginate(10);
        }

        $selectedYear = request('year');
        $selectedMonth = request('month');

        $selectyear = Transaction::whereYear('created_at', $selectedYear)->get();
        $selectmonth = Transaction::whereMonth('created_at', $selectedMonth)->get();

    
        return view('transaction.index', [
            'all' => $all, 
            'today' => $today,
            'thisMonth' => $thisMonth,
            'month' => $selectmonth,
            'year' => $selectyear
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Menu $menu)
    {
        $user = Auth::user();

        if ($user->level_id === 1 || $user->level_id === 3) {
            return redirect()->back();
        }
        
        return view('transaction.create', [
            'foods' => $menu->where('category','food')->latest()->get(),
            'drinks' => $menu->where('category', 'drink')->latest()->get(),
            'desserts' => $menu->where('category', 'dessert')->latest()->get(),
            'tables' => Transaction::select('no_table')->where('status','unpaid')->get()
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
        $transaction['user_id'] = auth()->user()->id;
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

        for ($i=0; $i < count($menu_id); $i++) {
            $transactionDetail['transaction_id'] = $id;
            $transactionDetail['menu_id'] = $menu_id[$i]->menu_id;
            $transactionDetail['qty'] = $menu_id[$i]->qty;
            $transactionDetail['price'] = $menu_id[$i]->price;
            TransactionDetail::create($transactionDetail);
        };

        return redirect('/admin/transaction')->with('success', 'Transaksi baru berhasil dibuat!');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Transaction  $transaction
     * @return \Illuminate\Http\Response
     */
    public function show(Transaction $transaction)
    {
        $user = Auth::user();

        if ($user->level_id === 1 || $user->level_id === 3) {
            return redirect()->back();
        }
        
        return view('transaction.show', [
            'data' => $transaction->with(['transaction_details','transaction_details.menu','user'])->where('id', '=', $transaction->id)->get()
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Transaction  $transaction
     * @return \Illuminate\Http\Response
     */
    public function edit(Transaction $transaction)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Transaction  $transaction
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Transaction $transaction)
    {
        
        $validateddata = $request->validate([
            'total_transaction' => 'required|numeric',
            'total_payment' => 'required|numeric|gte:total_transaction'
        ]);

        $validateddata["total_payment"] = filter_var($request->total_payment, FILTER_SANITIZE_NUMBER_INT);
        $validateddata["status"] = 'paid';
      
        Transaction::where('id', $transaction->id)
                    ->update($validateddata);
        
                    return redirect('/admin/transaction')->with('success', 'transaction successfully !');
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Transaction  $transaction
     * @return \Illuminate\Http\Response
     */
    public function destroy(Transaction $transaction)
    {
        //
    }

    public function invoice($no_order)
    {
        $order = Transaction::with('transaction_details')->where('id', $no_order)->first();

        if (!$order) {
            return redirect()->route('transaction.create')->with('error', 'Transaksi tidak ditemukan.');
        }
    

        return view('transaction.invoice', compact('order'));
    }
   
    public function updateStatus( Transaction $transaction)
    {

        $transaction->update(['pesanan' => 'selesai']);

        // Tambahkan pemberitahuan atau pesan sukses di sini jika diperlukan.

        return redirect()->back(); // Redirect kembali ke halaman sebelumnya.
    }
}
