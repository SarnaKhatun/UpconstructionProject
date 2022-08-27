<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Slider extends Model
{
    use HasFactory;

    protected static $slider;
    protected static $image;
    protected static $imageName;
    protected static $imageDirectory;
    protected static $imageUrl;

    public static function createSlider ($request)
    {
        self::$image = $request->file('image');
        self::$imageUrl = Slider::uploadImage(self::$image);

        self::$slider = new Slider();

        self::$slider->description   = $request->description;
        self::$slider->image         = self::$imageUrl;
        self::$slider->save();

    }


    public static function updateSlider($request, $id)
    {
        self::$slider = Slider::find($id);
        self::$image = $request->file('image');

        Slider::uploadImage(self::$image, self::$slider);

        self::$slider->description   = $request->description;
        self::$slider->image         = self::$imageUrl;
        self::$slider->save();
    }

    public static function uploadImage ($image, $slider = null)
    {
        if ($image)
        {
            if (isset($slider))
            {
                if (file_exists($slider->image))
                {
                    unlink($slider->image);
                }
            }

            self::$imageName = time().rand(10,1000).'.'.$image->getClientOriginalExtension();
            self::$imageDirectory = 'slider/image/';
            $image->move(self::$imageDirectory, self::$imageName);
            self::$imageUrl = self::$imageDirectory.self::$imageName;
        }
        else {
            self::$imageUrl = $slider->image;
        }

        return self::$imageUrl;
    }
}
