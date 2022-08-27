<?php

namespace App\Models;

use App\helper\Helper;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;

class Project extends Model
{
    use HasFactory;

    protected $fillable = [
        'category_id',
        'author_id',
        'title',
        'short_description',
        'long_description',
        'image',
        'status',
    ];


    public static function saveProjectData($request, $id = null)
    {
        Project::updateOrCreate(['id' => $id], [
            'category_id' => $request->category_id,
            'author_id' => Auth::id(),
            'title' => $request->title,
            'short_description' => $request->short_description,
            'long_description' => $request->long_description,
            'image' => Helper::imageUpload($request->file('image'), 'project/image/', isset($id) ? Project::find($id)->image : null),
            'status' => $request->status,
        ]);
    }


    public function category ()
    {
        return $this->belongsTo(ProjectCategory::class);
    }

    public function user ()
    {
        return $this->belongsTo(User::class);
    }



}
