<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Ppdb;
use App\Models\Payment;
use Illuminate\Http\Request;
use PDF;

class RegisterController extends Controller
{
    public function index()
    {
        return view('register.index');
    }
    
    public function store(Request $request)
    {
        $message = [
            'required' => 'Form harus disii',
        ];

        $validateData=$request->validate([
            'name'=>'required|min:3',
            'username'=>'required',
            'email'=>'required|email',
            'password'=>'required',
            'role' => 'user'
        ],$message);

        $validateData['password'] = bcrypt($validateData['password']);

        User::create($validateData);

        return redirect('/login')->with('success', 'Register Berhasil!, silahkan login');
    }

    // public function proof(Payment $payment)
    // {
    //     $payments = Payment::all();
    //     return view('payments.bukti_pe',compact('payments'),['payment' => $payment])->with('i');
    // }

    public function proof($id)
    {
        $payments = Payment::find($id);
        return view('payments.bukti_pe',compact('payments','id'));
    }

    public function detail($id)
    {
        $ppdb = Ppdb::find($id);
        return view('payments.detail_pem',compact('ppdb','id'));
    }

    public function tabel()
    {
        $ppdb = Ppdb::all();
        $payments = Payment::latest()->paginate(5);
        return view('payments.tables',compact('payments')
                    )->with('i', (request()->input('page', 1) - 1) * 5);
    }

    public function user(Request $request)
    {
        $user = User::latest()->paginate(5);
        return view('payments.user',compact('user'))->with('i');
    }

    public function validasi(Payment $payments, $id)
    {
        Payment::where('id','=',$id)->update([
            'status' => 1,
        ]);
        return redirect()->back()->with('done','Berhasil Divalidasi');
    }

    public function reject(Payment $payments, $id)
    {
        Payment::where('id','=',$id)->update([
            'status' => 2,
        ]);
        return redirect()->back()->with('done','Permintaan DiTolak');
    }
}