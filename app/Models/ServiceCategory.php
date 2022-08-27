<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ServiceCategory extends Model
{
    use HasFactory;

    protected $fillable = [
        'category_name',
        'status',
    ];

    public static function saveCategoryData ($request, $id = null)
    {
        ServiceCategory::updateOrCreate(['id' => $id], [
            'category_name' => $request->category_name,
            'status' => $request->status,
        ]);
    }
}
