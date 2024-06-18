<?php

namespace App\Models;

use App\Models\Scopes\CompanyScope;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    protected $fillable = [
        'customer_id', 'order_date', 'order_status','company_id',
    ];
    protected static function booted()
    {
        static::addGlobalScope(new CompanyScope);
    }
    public function Company()
    {
        return $this->belongsTo(Company::class);
    }

    protected $appends = [
        'order_amount',
    ];

    public function customer()
    {
        return $this->belongsTo(Customer::class);
    }

    public function orderDetails()
    {
        return $this->hasMany(OrderDetail::class);
    }

    public function getOrderAmountAttribute()
    {
        $full_price = 0;
        foreach ($this->orderDetails as $item) {
            $productprice = $item->product_price;
            $remise = $item->remise;
            $netprix = $productprice - ($productprice * ($remise / 100));
            $full_price +=  $item->quantity * $netprix;
            /*
            netprix = price - (price * (remise / 100))
            amount = selectedProduct.value.netPrice * quantity;
            */
        }
        return $full_price;
        /*
        netprix = price - (price * (remise / 100))
        amount = selectedProduct.value.netPrice * quantity;
        */
    }
}
