<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LoanApplication extends Model
{
    use HasFactory;

    
    protected $fillable = [
        'client_id',
        'loan_amount',
        'payment_mode_id',
        'mobile_money_no',
        'no_of_months',
        'approved',
        'loan_number',
    ];

}
