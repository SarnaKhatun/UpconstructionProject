<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Slider;
use Illuminate\Http\Request;

class SliderController extends Controller
{
    public function addSlider ()
    {
        return view('admin.slider.add');
    }

    public function newSlider (Request $request)
    {
        Slider::createSlider($request);
        return redirect()->back()->with('message', 'Slider data created successfully');
    }

    public function manageSlider ()
    {
        return view('admin.slider.manage', [
            'sliders' => Slider::all(),
        ]);
    }

    public function editSlider ($id)
    {
        return view('admin.slider.edit', [
            'slider' => Slider::find($id),
        ]);
    }

    protected static $slider;

    public function deleteSlider($id)
    {
        self::$slider = Slider::find($id);
        if (file_exists(self::$slider->image))
        {
            unlink(self::$slider->image);
        }
        self::$slider->delete();
        return back()->with('message', 'Slider data deleted successfully');

    }


    public function updateSlider(Request $request, $id)
    {
        Slider::updateSlider($request, $id);
        return redirect('/manage-slider')->with('message', 'Slider data updated successfully');
    }
}
