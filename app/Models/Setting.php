<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Setting extends Model
{
    use HasFactory;

    protected $table = 'settings';

    protected $fillable = [

    ];

    static public function getData()
    {
        $data = self::select("settings.*");

        // if (Request()->get('name')) {
        //     $data = $data->where('name', 'like', '%' . Request()->get('name') . '%');
        // }

        return $data->latest()->paginate(10);
    }
}
