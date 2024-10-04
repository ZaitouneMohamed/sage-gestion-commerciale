<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Plan extends Model
{
    use HasFactory;

    protected $table = 'plans';

    protected $fillable = [
        'name',
        'gateway_id',
        'amount',
        'interval',
    ];

    static public function getData()
    {
        $data = self::select("table_name.*");

        // if (Request()->get('name')) {
        //     $data = $data->where('name', 'like', '%' . Request()->get('name') . '%');
        // }

        return $data->latest()->paginate(10);
    }
}
