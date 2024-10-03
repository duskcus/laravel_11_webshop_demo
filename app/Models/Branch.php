<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Branch extends Model
{
    protected $searchable = [
        'columns' => [
            'name' => 50,
            'street' => 20,
            'house_number' => 7,
            'zip_code' => 10,
            'city' => 20,
            'country' => 20,
            'business_number' => 10,
            'vat_number' => 10,
        ]
    ];
}
