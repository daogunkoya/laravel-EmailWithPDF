<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Loan extends Model
{
    //
    protected $fillable = [
        'user_id', 'borrowed', 'Amount_paid','interest','total'
    ];

    

}
