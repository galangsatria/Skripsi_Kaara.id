<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Feedbacks;
use App\Models\Requests;
use App\Http\Controllers\DB;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }

    public function req_barang(Request $request){
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'phone' => ['required', 'string'],
            'nama_barang' => ['required', 'string'],
            'kategori' => ['required', 'string'],
        ]);

        $reqs = new Requests ([
            'name' => $request->name,
            'phone' => $request->phone,
            'nama_barang' => $request->nama_barang,
            'kategori' => $request->kategori,
            'status' => 'Menunggu konfirmasi',
        ]);

        $reqs->save();

        return redirect()->route('beranda')->with('success', 'Request has been added!');
    }

    public function feedback(Request $request){
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string'],
            'phone' => ['required', 'string'],
            'pesan' => ['required', 'string'],
        ]);
        
        $reqs = new Feedbacks ([
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            'pesan' => $request->pesan,
        ]);
        
        $reqs->save();

        return redirect()->route('contact')->with('success', 'Request has been added!');
    }

    public function delete(Request $request, $id)
   {
    $req = \DB::table('requests')->where('id', $id)->delete();
    return redirect()->route('admin.home');
   }

   public function update(Request $request, $id, $status)
   {
    $req = \DB::table('requests')->where('id', $id)->update([
        'status' => $status,
    ]);
    return redirect()->route('admin.home');
   }
}
