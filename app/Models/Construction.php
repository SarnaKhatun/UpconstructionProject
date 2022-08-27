<?php

namespace App\Models;

use App\helper\Helper;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Construction extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'description',
        'image',
    ];

    public static function saveData($request, $id = null)
    {
        Construction::updateOrCreate(['id' => $id], [
            'title' => $request->title,
            'description' => $request->description,
            'image' => Helper::imageUpload($request->file('image'), 'construction/img/', isset($id) ? Construction::find($id)->image : null),
        ]);
    }
}
