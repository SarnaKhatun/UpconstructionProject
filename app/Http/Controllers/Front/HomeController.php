<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Blog;
use App\Models\BlogCategory;
use App\Models\Construction;
use App\Models\Project;
use App\Models\ProjectCategory;
use App\Models\Service;
use App\Models\ServiceCategory;
use App\Models\Slider;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function home ()
    {
        return view('front.home.home', [
            'sliders' => Slider::latest()->get(),
            'services' => Service::latest()->take(3)->get(),
            'projectCategories' => ProjectCategory::latest()->get(),
            'projects' => Project::latest()->take(3)->get(),
            'blogs' => Blog::latest()->take(3)->get(),
            'constructions' => Construction::orderBy('id', "DESC")->get(),
        ]);
    }


    public function serviceDetails($id)
    {
        return view('front.service.details', [
            'serviceCategories' => ServiceCategory::latest()->get(),
            'service' => Service::find($id),
        ]);
    }

    public function projectDetails($id)
    {
        return view('front.project.details', [
            'projectCategories' => ProjectCategory::latest()->get(),
            'project' => Project::find($id),
        ]);
    }

    public function blogDetails($id)
    {
        return view('front.blog.details', [
            'blogCategories' => BlogCategory::latest()->get(),
            'blog' => Blog::find($id),
        ]);
    }

    public function serviceAll ()
    {
        return view('front.service.all', [
            'services' => Service::latest()->get(),
        ]);
    }

    public function projectAll ()
    {
        return view('front.project.all', [
            'projectCategories' => ProjectCategory::latest()->get(),
            'projects' => Project::latest()->get(),
        ]);
    }

    public function blogAll ()
    {
        return view('front.blog.all', [
            'blogCategories' => BlogCategory::latest()->get(),
            'blogs' => Blog::latest()->get(),
        ]);
    }


    public function about()
    {
        return view('front.about.about');
    }

    public function contact()
    {
        return view('front.contact.contact');
    }
}
