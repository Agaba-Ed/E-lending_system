@extends('layouts.app');

@section('content')

<h3 class="text-center fw-bolder">Loan Application</h3>

<div>
@if ($errors->any())
         <div class="alert alert-primary alert-dismissible fade show " role="alert">
         <div >
        <div class="font-medium text-600">
            <i class="fa-regular fa-bell"></i>
        <strong>Hello!</strong> You forgot something
        </div>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
            <ul class="mt-3 list-disc list-inside text-sm text-red-600">
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
          </div>
    </div>
@endif
<form method="POST" action="{{route('submitapplication',encrypt(Auth::user()->id))}}">
    @csrf

<div class="row">
    <label class="col-6 lead fw-bolder" for="loan_type">Loan Type</label>
    <label class="col-6 lead fw-bolder" for="no_of_months">How many months?</label>
</div>
<div class="row" >
    <div class="col-6">
        <input class="w-50" type="text" id="loan_type" >
    </div>
    <div class="col-6" >
        <input class="w-50" type="number" id="no_of_months" >
    </div>
</div>
<div class="row">
    <label  class="col-6 lead fw-bolder" for="loan_amount">Loan Amount</label>
    <label  class="col-6 lead fw-bolder" for="payment_mode">Select payment mode: </label>
</div>
<div class="row" >
    
<div  class="col-6">
    <input class="w-50" type="number" id="loan_amount" re>
</div>

<div class="col-6">
    <select  class="w-50" name="payment_mode_id" id="payment_mode_id" required>
     <option ><-- Select Payment Mode --></option>
     <option value="Airtel Money">Airtel Money</option>
     <option value="Mtn Money">Mtn Money</option>
    </select>
</div>
</div>
<div >
    <label class="lead fw-bolder" for="mobile_money_no">Mobile money number</label>
</div>
<div>
<input class="w-25" type="text" id="mobile_money_no" >
</div>

<div >
    <button class="float-end primarycolor px-4 py-1" >
        Apply
    </button>
</div>
</form>
</div>



@endsection