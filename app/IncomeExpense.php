<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class IncomeExpense extends Model
{
    protected $table = 'income_expenses';

	protected $fillable = ['amount', 'type', 'description'];
}
