<?php

namespace App\Http\Controllers;

use App\Models\blog;
use App\Models\about;
use App\Models\product;
use App\Models\course;
use App\Models\latest_new;
use App\Models\event;
use App\Models\contact;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class admin extends Controller
{
    public function __invoke(Request $request)
    {
        //
    }

//------------------------- Service Section -------------------------- //

    public function services()
    {
        $data = DB::table('service_category')->get();
        return view('panel.services', ['data' => $data]);
    }


//------------------------- About Page Section -------------------------//

    public function about()
    {
        return view('panel.about');
    }

    public function add_about()
    {
        return view('panel.panelpages.add_about');
    }

    public function insert_about(Request $request)
    {
        $request->validate([
         'title' => 'required',
         'name' => 'required',
         'slug' => 'required',
         'banner' => 'required',
         'image' => 'required|mimes:jpg,jpeg,png',
         'short_description' => 'required',
         'description' => 'required'
        ]);

        $about = new about;
        $about->title = $request->input('title');
        $about->name = $request->input('name');
        $about->slug = $request->input('slug');
        $about->short_desc = $request->input('short_description');
        $about->description = $request->input('description');
        
        if ($request->hasFile('banner')) {
            $file = $request->file('banner');
            $name = $file->getClientOriginalName();
            $filename = time() . '_' . $name;
            $file->move('images/banners/', $filename);
            $about->banner = $filename;
        }
        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $name = $file->getClientOriginalName();
            $filename = time() . '_' . $name;
            $file->move('images/about/', $filename);
            $about->image = $filename;
        }

        $about->save();
        return redirect()->back()->with('status', 'About page Added Successfully!');
    }

    public function about_list()
    {
        $data = DB::table('abouts')->get();
        return view('panel.panelpages.about_list', ['data' => $data]);
    }

    public function edit_about($id)
    {
        $data = about::find($id);
        return view('panel.panelpages.edit_about', ['data' => $data]);
    }

    public function update_about(Request $request, $id)
    {
        $request->validate([
         'title' => 'required',
         'name' => 'required',
         'slug' => 'required',
         'short_description' => 'required',
         'description' => 'required'
        ]);

        $about = about::find($id);
        $about->title = $request->input('title');
        $about->name = $request->input('name');
        $about->slug = $request->input('slug');
        $about->short_desc = $request->input('short_description');
        $about->description = $request->input('description');
        
        if ($request->hasFile('banner')) {
            $file = $request->file('banner');
            $name = $file->getClientOriginalName();
            $filename = time() . '_' . $name;
            $file->move('images/banners/', $filename);
            $about->banner = $filename;
        }
        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $name = $file->getClientOriginalName();
            $filename = time() . '_' . $name;
            $file->move('images/about/', $filename);
            $about->image = $filename;
        }

        $about->update();
        return redirect()->back()->with('status', 'About page Updated Successfully!');
    }

    public function delete_about($id)
    {
        $about = about::find($id);
        $about->delete();
        return redirect()->back();
    }


//------------------------- Our Products Section --------------------------//

    public function products()
    {
        return view('panel.product');
    }

    public function add_product_gallery()
    {
        return view('panel.panelpages.add_product_gallery');
    }

    public function add_glossary_herb()
    {
        return view('panel.panelpages.add_glossary_herb');
    }


//-------------------------------Product ---------------------------------//

public function add_product()
{
    return view('panel.panelpages.add_product');
}

public function insert_product(Request $request)
{
    $request->validate([
     'title' => 'required',
     'name' => 'required',
     'slug' => 'required',
     'banner' => 'required',
     'image' => 'required|mimes:jpg,jpeg,png',
     'short_description' => 'required',
     'description' => 'required'
    ]);

    $product = new product;
    $product->title = $request->input('title');
    $product->name = $request->input('name');
    $product->slug = $request->input('slug');
    $product->short_desc = $request->input('short_description');
    $product->description = $request->input('description');
    
    if ($request->hasFile('banner')) {
        $file = $request->file('banner');
        $name = $file->getClientOriginalName();
        $filename = time() . '_' . $name;
        $file->move('images/banners/', $filename);
        $product->banner = $filename;
    }
    if ($request->hasFile('image')) {
        $file = $request->file('image');
        $name = $file->getClientOriginalName();
        $filename = time() . '_' . $name;
        $file->move('images/products/', $filename);
        $product->image = $filename;
    }

    $product->save();
    return redirect()->back()->with('status', 'Product page Added Successfully!');
}

public function product_list()
{
    $data = DB::table('products')->get();
    return view('panel.panelpages.product_list', ['data' => $data]);
}

public function edit_product($id)
{
    $data = product::find($id);
    return view('panel.panelpages.edit_product', ['data' => $data]);
}

public function update_product(Request $request, $id)
{
    $request->validate([
     'title' => 'required',
     'name' => 'required',
     'slug' => 'required',
     'short_description' => 'required',
     'description' => 'required'
    ]);

    $product = product::find($id);
    $product->title = $request->input('title');
    $product->name = $request->input('name');
    $product->slug = $request->input('slug');
    $product->short_desc = $request->input('short_description');
    $product->description = $request->input('description');
    
    if ($request->hasFile('banner')) {
        $file = $request->file('banner');
        $name = $file->getClientOriginalName();
        $filename = time() . '_' . $name;
        $file->move('images/banners/', $filename);
        $product->banner = $filename;
    }
    if ($request->hasFile('image')) {
        $file = $request->file('image');
        $name = $file->getClientOriginalName();
        $filename = time() . '_' . $name;
        $file->move('images/products/', $filename);
        $product->image = $filename;
    }

    $product->update();
    return redirect()->back()->with('status', 'Product page Updated Successfully!');
}

public function delete_product($id)
{
    $product = product::find($id);
    $product->delete();
    return redirect()->back();
}


//----------------------------- Course -------------------------------------//

public function add_course()
{
    return view('panel.panelpages.add_course');
}

public function insert_course(Request $request)
{
    $request->validate([
     'title' => 'required',
     'name' => 'required',
     'slug' => 'required',
     'image' => 'required|mimes:jpg,jpeg,png',
     'description' => 'required'
    ]);

    $course = new course;
    $course->title = $request->input('title');
    $course->name = $request->input('name');
    $course->slug = $request->input('slug');
    $course->description = $request->input('description');
    
    if ($request->hasFile('image')) {
        $file = $request->file('image');
        $name = $file->getClientOriginalName();
        $filename = time() . '_' . $name;
        $file->move('images/courses/', $filename);
        $course->image = $filename;
    }

    $course->save();
    return redirect()->back()->with('status', 'Course page Added Successfully!');
}

public function course_list()
{
    $data = DB::table('courses')->get();
    return view('panel.panelpages.course_list', ['data' => $data]);
}

public function edit_course($id)
{
    $data = course::find($id);
    return view('panel.panelpages.edit_course', ['data' => $data]);
}

public function update_course(Request $request, $id)
{
    $request->validate([
     'title' => 'required',
     'name' => 'required',
     'slug' => 'required',
     'description' => 'required'
    ]);

    $course = course::find($id);
    $course->title = $request->input('title');
    $course->name = $request->input('name');
    $course->slug = $request->input('slug');
    $course->description = $request->input('description');
    
    if ($request->hasFile('image')) {
        $file = $request->file('image');
        $name = $file->getClientOriginalName();
        $filename = time() . '_' . $name;
        $file->move('images/courses/', $filename);
        $course->image = $filename;
    }

    $course->update();
    return redirect()->back()->with('status', 'Course Updated Successfully!');
}

public function delete_course($id)
{
    $course = product::find($id);
    $course->delete();
    return redirect()->back();
}


//------------------------------ Latest news ----------------------------//

public function add_news()
{
    return view('panel.panelpages.add_news');
}

public function insert_news(Request $request)
{
    $request->validate([
     'title' => 'required',
     'name' => 'required',
     'slug' => 'required',
     'image' => 'required|mimes:jpg,jpeg,png',
     'description' => 'required'
    ]);

    $news = new latest_new;
    $news->title = $request->input('title');
    $news->name = $request->input('name');
    $news->slug = $request->input('slug');
    $news->description = $request->input('description');
    
    if ($request->hasFile('image')) {
        $file = $request->file('image');
        $name = $file->getClientOriginalName();
        $filename = time() . '_' . $name;
        $file->move('images/news/', $filename);
        $news->image = $filename;
    }

    $news->save();
    return redirect()->back()->with('status', 'News Added Successfully!');
}

public function news_list()
{
    $data = DB::table('latest_news')->get();
    return view('panel.panelpages.news_list', ['data' => $data]);
}

public function edit_news($id)
{
    $data = latest_new::find($id);
    return view('panel.panelpages.edit_news', ['data' => $data]);
}

public function update_news(Request $request, $id)
{
    $request->validate([
     'title' => 'required',
     'name' => 'required',
     'slug' => 'required',
     'description' => 'required'
    ]);

    $news = latest_new::find($id);
    $news->title = $request->input('title');
    $news->name = $request->input('name');
    $news->slug = $request->input('slug');
    $news->description = $request->input('description');
    
    if ($request->hasFile('image')) {
        $file = $request->file('image');
        $name = $file->getClientOriginalName();
        $filename = time() . '_' . $name;
        $file->move('images/news/', $filename);
        $news->image = $filename;
    }

    $news->update();
    return redirect()->back()->with('status', 'News Updated Successfully!');
}

public function delete_news($id)
{
    $news = product::find($id);
    $news->delete();
    return redirect()->back();
}

//-----------------------------Event--------------------------------//

public function add_event()
{
    return view('panel.panelpages.add_event');
}

public function insert_event(Request $request)
{
    $request->validate([
     'title' => 'required',
     'name' => 'required',
     'slug' => 'required',
     'image' => 'required|mimes:jpg,jpeg,png',
     'description' => 'required'
    ]);

    $event = new event;
    $event->title = $request->input('title');
    $event->name = $request->input('name');
    $event->slug = $request->input('slug');
    $event->description = $request->input('description');
    
    if ($request->hasFile('image')) {
        $file = $request->file('image');
        $name = $file->getClientOriginalName();
        $filename = time() . '_' . $name;
        $file->move('images/events/', $filename);
        $event->image = $filename;
    }

    $event->save();
    return redirect()->back()->with('status', 'News Added Successfully!');
}

public function event_list()
{
    $data = DB::table('events')->get();
    return view('panel.panelpages.event_list', ['data' => $data]);
}

public function edit_event($id)
{
    $data = event::find($id);
    return view('panel.panelpages.edit_event', ['data' => $data]);
}

public function update_event(Request $request, $id)
{
    $request->validate([
     'title' => 'required',
     'name' => 'required',
     'slug' => 'required',
     'description' => 'required'
    ]);

    $event = event::find($id);
    $event->title = $request->input('title');
    $event->name = $request->input('name');
    $event->slug = $request->input('slug');
    $event->description = $request->input('description');
    
    if ($request->hasFile('image')) {
        $file = $request->file('image');
        $name = $file->getClientOriginalName();
        $filename = time() . '_' . $name;
        $file->move('images/events/', $filename);
        $event->image = $filename;
    }

    $event->update();
    return redirect()->back()->with('status', 'Event Updated Successfully!');
}

public function delete_event($id)
{
    $event = event::find($id);
    $event->delete();
    return redirect()->back();
}


//------------------------------News and Events ----------------------------//


public function contact_list()
{
    $data = DB::table('contacts')->get();
    return view('panel.panelpages.contact_list', ['data' => $data]);
}

}