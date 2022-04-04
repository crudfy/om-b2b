<?php

namespace App\Models;

use Crudfy\OmB2b\Interfaces\IHasTransaction;
use Crudfy\OmB2b\Traits\HasTransaction;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaction extends Model implements IHasTransaction
{
    use HasFactory, HasTransaction;

    public function getTransactionIdAttribute()
    {
        // TODO: Implement getTransactionIdAttribute() method.
    }

    public function getOmNumberAttribute()
    {
        // TODO: Implement getOmNumberAttribute() method.
    }

    public function getAmountAttribute()
    {
        // TODO: Implement getAmountAttribute() method.
    }

    public function getAddToTransactionAttribute()
    {
        // TODO: Implement getAddToTransactionAttribute() method.
    }
}
