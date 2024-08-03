<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    use HasFactory;

    
    // The table associated with the model.
    protected $table = 'transactions';

    // The attributes that are mass assignable.
    protected $fillable = [
        'user_id',
        'or_no',
        'account_name',
        'plan_type',
        'contract_price',
        'balance',
        'effectivity_date',
        'expiration_date',
        'quota_comm',
        'installment',
        'status',
        'mode_of_payment',
        'account_type'
    ];

    // The attributes that should be cast to native types.
    protected $casts = [
        'effectivity_date' => 'date',
        'expiration_date' => 'date',
        'contract_price' => 'decimal:2',
        'balance' => 'decimal:2',
        'quota_comm' => 'decimal:2',
        'installment' => 'decimal:2'
    ];

    /**
     * Get the customer that owns the transaction.
     */
    // 
    

    
}
