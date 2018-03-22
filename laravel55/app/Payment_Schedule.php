<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Payment_Schedule extends Model
{
    protected $fillable = ['Serial_no', 'Due_DateofPayment', 'Installment_Amount','Paid','Balance','Date_of_Payment','Remarks'];
    public $table = "payment_schedule";
}
