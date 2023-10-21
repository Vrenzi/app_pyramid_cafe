<?php

namespace App\Http\Controllers;

use App\Models\Menu;
use Illuminate\Support\Facades\Response;
use App\Models\Transaction;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use App\Models\TransactionDetail;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Auth;
use RealRashid\SweetAlert\Facades\Alert;

class ChefController extends Controller
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
                ->whereDate('created_at', Carbon::now())
                ->latest()
                ->filter(request(['year', 'month']))
                ->paginate(10);
            $thisMonth = Transaction::with(['transaction_details', 'transaction_details.menu'])
                ->where('status', 'paid')
                ->whereMonth('created_at', Carbon::now()->month)
                ->latest()
                ->filter(request(['year', 'month']))
                ->paginate(10);
        } else {
            $all = Transaction::with(['transaction_details', 'transaction_details.menu'])
                ->latest()
                ->filter(request(['year', 'month']))
                ->paginate(10);
            $today = Transaction::with(['transaction_details', 'transaction_details.menu'])
                ->whereDate('created_at', Carbon::now())
                ->latest()
                ->filter(request(['year', 'month']))
                ->paginate(10);
            $thisMonth = Transaction::with(['transaction_details', 'transaction_details.menu'])
                ->whereMonth('created_at', Carbon::now()->month)
                ->latest()
                ->filter(request(['year', 'month']))
                ->paginate(10);
        }

        $selectedYear = request('year');
        $selectedMonth = request('month');

        $selectyear = Transaction::whereYear('created_at', $selectedYear)->get();
        $selectmonth = Transaction::whereMonth('created_at', $selectedMonth)->get();


        return view('chef.chef', [
            'all' => $all,
            'today' => $today,
            'thisMonth' => $thisMonth,
            'month' => $selectmonth,
            'year' => $selectyear
        ]);
    }

    public function updateStatus(Transaction $transaction)
    {

        $transaction->update(['pesanan' => 'selesai']);

        // Tambahkan pemberitahuan atau pesan sukses di sini jika diperlukan.

        return redirect()->back(); // Redirect kembali ke halaman sebelumnya.
    }

    public function show(Transaction $transaction)
    {
        $user = Auth::user();

        if ($user->level_id === 1 || $user->level_id === 3 || $user->level_id === 2) {
            return redirect()->back();
        }

        return view('chef.show', [
            'data' => $transaction->with(['transaction_details', 'transaction_details.menu', 'user'])->where('id', '=', $transaction->id)->get()
        ]);
    }
}
