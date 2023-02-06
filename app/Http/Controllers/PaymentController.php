<?php

namespace App\Http\Controllers;

use App\Models\Payment;
use App\Models\Ppdb;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PaymentController extends Controller
{
    public function index()
    {
        if (Auth::user()->username == 'admin') {
            $ppdb = Ppdb::all();
            $payments = Payment::latest()->paginate(5);
            return view('payments.tables',compact('payments')
                        )->with('i', (request()->input('page', 1) - 1) * 5);
        }else {
            return redirect()->route('payments.create');
        }
    }

    public function create()
    {
        return view('payments.form');
    }

    public function store(Request $request)
    {
        $validatedata=$request->validate([
            'bank' => 'required',
            'n_bank' => 'nullable',
            'nama_pem' => 'required',
            'nominal' => 'required',
            'image' => 'required|image|file|mimes:jpeg,png,jpg,gif,svg',
            'status' => '0'
        ]);

        $image = $request->file('image');
        $image->storeAs('assets/img', $image->hashName());

        $payment = Payment::create([
            'bank' => $request->bank,
            'n_bank' => $request->n_bank,
            'nama_pem' => $request->nama_pem,
            'nominal' => $request->nominal,
            'image' => $image->hashName(),
            'status' => 0
        ]);

        
            //redirect dengan pesan sukses
            return redirect('/data')->with('success', 'Pembayaran telah dilakukan, silahkan menunggu admin melakukan validasi!');
    }

    public function show(Payment $payments)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\payments  $payments
     * @return \Illuminate\Http\Response
     */
    public function edit(Payment $payments)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\payments  $payments
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Payment $payments)
    {
        $request->validate([
            'bank' => 'required',
            'n_bank' => 'nullable',
            'nama_pem' => 'required',
            'nominal' => 'required',
            'image' => 'required|image|file|mimes:jpeg,png,jpg,gif,svg'
        ]);

        $payments = Payment::find($payments->id);


        $payments->update([
            'bank' => $request->bank,
            'n_bank' => $request->n_bank,
            'nama_pem' => $request->nama_pem,
            'nominal' => $request->nominal,
            'image' => $image->hashName(),
            'status' => 0
        ]);

        return redirect()->route('payments.index')->with('success','Berhasil Update!');   
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\payments  $payments
     * @return \Illuminate\Http\Response
     */
    public function destroy(Payment $payments)
    {
        //
    }

}
