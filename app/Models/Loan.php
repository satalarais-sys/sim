<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Loan extends Model
{
    use HasFactory;

    protected $fillable = [
        'loan_number','member_id','principal','interest_rate','term_months','interest_type','status','approved_at','disbursed_at','approved_by'
    ];

    public function member()
    {
        return $this->belongsTo(Member::class);
    }

    public function installments()
    {
        return $this->hasMany(LoanInstallment::class);
    }
}
