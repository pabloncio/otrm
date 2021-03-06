<?php

namespace App\Http\Controllers;
use App\Otrm;
use Illuminate\Http\Request;

class OtrmController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
      if($request->ajax()){
        return response()->json([
            ['id' => 1, 'date_in' =>'27-12-2018', 'date_out'=>'30-12-2018', 'amount'=>20000, 'payment'=>3000, 'status'=>'pending'],
            ['id' => 1, 'date_in' =>'27-12-2018', 'date_out'=>'30-12-2018', 'amount'=>20000, 'payment'=>3000, 'status'=>'pending'],
            ['id' => 1, 'date_in' =>'27-12-2018', 'date_out'=>'30-12-2018', 'amount'=>20000, 'payment'=>3000, 'status'=>'pending'],
            ['id' => 1, 'date_in' =>'27-12-2018', 'date_out'=>'30-12-2018', 'amount'=>20000, 'payment'=>3000, 'status'=>'pending'],
            ['id' => 1, 'date_in' =>'27-12-2018', 'date_out'=>'30-12-2018', 'amount'=>20000, 'payment'=>3000, 'status'=>'pending'],
            ['id' => 1, 'date_in' =>'27-12-2018', 'date_out'=>'30-12-2018', 'amount'=>20000, 'payment'=>3000, 'status'=>'pending'],
            ['id' => 1, 'date_in' =>'27-12-2018', 'date_out'=>'30-12-2018', 'amount'=>20000, 'payment'=>3000, 'status'=>'pending'],
            ['id' => 1, 'date_in' =>'27-12-2018', 'date_out'=>'30-12-2018', 'amount'=>20000, 'payment'=>3000, 'status'=>'pending'],
            ['id' => 1, 'date_in' =>'27-12-2018', 'date_out'=>'30-12-2018', 'amount'=>20000, 'payment'=>3000, 'status'=>'pending'],
            ['id' => 1, 'date_in' =>'27-12-2018', 'date_out'=>'30-12-2018', 'amount'=>20000, 'payment'=>3000, 'status'=>'pending']
        ], 200);
      }
        return view('otrm.index');
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
        if($request->ajax()){
          $otrm = new Otrm();
          $otrm->date_in = $request->input('date_in');
          $otrm->date_out = $request->input('date_out');
          $otrm->amount = $request->input('amount');
          $otrm->payment = $request->input('payment');
          $otrm->save();

          return response()->json([
            "message"=>"Otrm saved"
          ], 200);
        }
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
