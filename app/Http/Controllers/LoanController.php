<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Validator;

use App\Models\ClientDetail;

class LoanController extends Controller
{
    //



    public function applyforloan(Request $request, $id){
        
        return view('applyforloan', compact('id'));

    }

    
    public function loanprofile(Request $request, $id){

        $client = ClientDetail::find(decrypt($id));
        
        return view('loanprofile', compact('client'));
    }

    
    public function loanhistory(Request $request, $id){

        return view('loanhistory', compact('id'));
        
    }

    
    public function settlebalance(Request $request, $id){

        return view('settlebalance', compact('id'));
    }

    public function clientdetails(Request $request, $id){
        $validate=Validator::make($request->all(),
        ['firstname'=>['required','string'],
        'lastname'=>['required','string'],
        'username'=>['required','string'],]);

        if($validate->fails()){
            return redirect()->back()->withErrors($validate)->withInput();
        }
        else
        {
            $client = ClientDetail::find(decrypt($id));
            $client->firstname = $request->firstname;
            $client->lastname = $request->lastname;
            $client->username = $request->username;
            $client->save();
            return redirect()->back()->with('success', 'Client details updated successfully');
        }
    }


    public function loanapplication($id){
        $client=ClientDetail::find(decrypt($id));
        $client_detail=ClientDetail::where('username',"=",$client->username)->firstOrFail();
        $payment_mode=PaymentMode::all();

        return view('loanapplication',compact('client','client_detail','payment_mode'));

    }

    public function submitapplication(Request $request, $id){
        $validate=Validator::make($request->all(),
        [
        'loan_type'=>['required','string'],
        'loan_amount'=>['required','numeric'],
        'payment_mode_id'=>['required','string'],
        'mobile_money_no'=>['required','string'],
        'no_of_months'=>['required','numeric'],
    ]);

        if($validate->fails()){
            return redirect()->back()->withErrors($validate)->withInput();
        }
        else
        {
            $client=ClientDetail::find(decrypt($id));
            $client_detail=ClientDetail::where('username',"=",$client->username)->firstOrFail();
            $payment_mode=PaymentMode::all();

            $loan_number = rand(1000000000, 9999999999);
            $loan = new LoanApplication;
            $loan->client_id = $client_detail->id;
            $loan->loan_amount = $request->loan_amount;
            $loan->payment_mode_id = $request->payment_mode_id;
            $loan->mobile_money_no = $request->mobile_money_no;
            $loan->no_of_months = $request->no_of_months;
            $loan->loan_type=$request->loan_type;
            $loan->approved = 0;
            $loan->loan_number = $loan_number;
            $loan->save();
            return redirect()->back()->with('success', 'Loan application submitted successfully');
        }
    }
    
}
