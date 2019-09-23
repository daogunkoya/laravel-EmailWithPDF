<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use PDF;
use App\Mail\EmailReport;
use Illuminate\Support\Facades\Mail;

class LoanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
        //
        //return $request->all();

        // Fetch all customers from database
  
    $email = $request->email;;
    $loans = \App\Loan::where('user_id',$request->id)->get();

    // Send data to the view using loadView function of PDF facade
    $pdf = PDF::loadView('loan', compact('loans'));
    // If you want to store the generated pdf to the server then you can use the store function
    $pdf->save(storage_path().'/report.pdf');
    // Finally, you can download the file using download function
    Mail::to($email)->send(new EmailReport( $loans));
    return $pdf->download('loan.pdf');
        return redirect()->route('customers.index');
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
          //
          $loans = \App\Loan::where('user_id',$id)->get();
          return view('loan',compact('loans','id'));
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
