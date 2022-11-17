<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Transaction;
use App\Models\Room;
use App\Models\Service;
use App\Models\Customer;
use App\Models\User;
use Dompdf\Dompdf;

class TransactionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $transaction = Transaction::all();
        return view('transactions.index', compact('transaction'));
    }

    public function printPdf()
    {
        $printpdf_transaction = Transaction::get();
        $html = view('transactions.printpdf', compact('printpdf_transaction'));
    
        $dompdf = new Dompdf();
        $dompdf->loadHtml($html);

        $dompdf->setPaper('A4', 'landscape');

        $dompdf->render();

        $dompdf->stream('Laporan_Transaksi.pdf');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $user = User::all();
        $customer = Customer::all();
        $room = Room::all();
        $service = Service::all();
        return view('transactions.create', compact('user','customer','room','service'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'user_id' => 'required',
            'customer_id' => 'required',
            'room_id' => 'required',
            'service_id' => 'required',
            'cekin_date' => 'required',
            'cekout_date' => 'required',
            'total_cost' => 'required'
        ],[
            'user_id.required' => 'The Pengguna / User field is required.',
            'customer_id.required' => 'The Konsumen / Customer field is required.',
            'room_id.required' => 'The Kamar / Room field is required.',
            'service_id.required' => 'The Layanan / Service field is required.',
            'cekin_date.required' => 'The Cek In field is required.',
            'cekout_date.required' => 'The Cek Out field is required.',
            'total_cost.required' => 'The Total Biaya / Total Const field is required.'
        ]);

        $transaction = new Transaction;
        $transaction->user_id = $request->user_id;
        $transaction->customer_id = $request->customer_id;
        $transaction->room_id = $request->room_id;
        $transaction->service_id = $request->service_id;
        $transaction->cekin_date = $request->cekin_date;
        $transaction->cekout_date = $request->cekout_date;
        $transaction->total_cost = $request->total_cost;
        $transaction->save();

        return redirect('/transactions')->with('toast_success', 'Data Berhasil Tersimpan!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Transaction $transaction)
    {
        return view('transactions.show', compact('transaction'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Transaction $transaction)
    {
        $user = User::all();
        $customer = Customer::all();
        $room = Room::all();
        $service = Service::all();
        return view('transactions.edit', compact('transaction','user','customer','room','service'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Transaction $transaction)
    {
        $request->validate([
            'user_id' => 'required',
            'customer_id' => 'required',
            'room_id' => 'required',
            'service_id' => 'required',
            'cekin_date' => 'required',
            'cekout_date' => 'required',
            'total_cost' => 'required'
        ],[
            'user_id.required' => 'The Pengguna / User field is required.',
            'customer_id.required' => 'The Konsumen / Customer field is required.',
            'room_id.required' => 'The Kamar / Room field is required.',
            'service_id.required' => 'The Layanan / Service field is required.',
            'cekin_date.required' => 'The Cek In field is required.',
            'cekout_date.required' => 'The Cek Out field is required.',
            'total_cost.required' => 'The Total Biaya / Total Const field is required.'
        ]);


        Transaction::where('id', $transaction->id)
            ->update([
                'user_id' => $request->user_id,
                'customer_id' => $request->customer_id,
                'room_id' => $request->room_id,
                'service_id' => $request->service_id,
                'cekin_date' => $request->cekin_date,
                'cekout_date' => $request->cekout_date,
                'total_cost' => $request->total_cost
            ]);
            return redirect('/transactions')->with('toast_success', 'Data Berhasil Diubah!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Transaction $transaction)
    {
        Transaction::destroy($transaction->id);
        return redirect('/transactions')->with('toast_success', 'Data Berhasil Dihapus!');
    }
}
