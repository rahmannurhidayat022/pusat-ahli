<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Coin;
use App\Models\Registers;
use Illuminate\Http\Request;


class RegistersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Coin $coin)
    {
        $data ['data'] = $coin;
        return view('layouts.registers',$data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
        {
    //     $data = $request->validate([
    //         'email'         => 'required|email:rfc,dns|',
    //         'nama'          => 'required',
    //         'no_hp'         => 'required',
    //         'status'        => 'required',
    //         'waiting_fitur' => 'required',
    //         'place'         => 'required'
    //     ], [
    //         'email.required'            => 'Email wajib diisi',
    //         'email.email'               => 'Format email harus benar',
    //         'nama.required'             => 'Nama Lengkap wajib diisi',
    //         'no_hp.required'            => 'Nomor Handphone wajib diisi',
    //         'status.required'           => 'Status wajib diisi',
    //         'waiting_fitur.required'    => 'Fitur Lengkap wajib diisi',
    //         'place.required'            => 'Tempat wajib diisi'
    //     ]);

    //     Registers::insert($data);
    //     return redirect()->route('landing');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
