<?php

namespace App\Http\Controllers;

use App\Models\Event;
use Illuminate\Http\Request;

class EventController extends Controller
{
    public function index($id)
    {
        $event = Event::find($id);
        return view('Event.Event', compact('event'));
    }

    public function create()
    {
        return view('Event.CreateEvent');
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'title' => 'required|string|max:255',
            'content1' => 'nullable|string',
            'content2' => 'nullable|string',
            'note' => 'nullable|string',
            'content3' => 'nullable|string',
            'subtitle1' => 'nullable|string|max:255',
            'image1' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'content4' => 'nullable|string',
            'subtitle2' => 'nullable|string|max:255',
            'image2' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'content5' => 'nullable|string',
            'image3' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'additional_images.*' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        // Handle single image uploads with the preferred format
        foreach (['image1', 'image2', 'image3'] as $imageField) {
            if ($image = $request->file($imageField)) {
                $destinationPath = 'images/';
                $eventImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
                $image->move($destinationPath, $eventImage);
                $data[$imageField] = "$eventImage";
            }
        }

        // Handle multiple additional images
        if ($request->hasFile('additional_images')) {
            $additionalImages = [];
            foreach ($request->file('additional_images') as $file) {
                $destinationPath = 'images/';
                $eventImage = date('YmdHis') . "." . $file->getClientOriginalExtension();
                $file->move($destinationPath, $eventImage);
                $additionalImages[] = "$eventImage";
            }
            $data['additional_images'] = json_encode($additionalImages);
        }

        Event::create($data);

        return redirect()->back()->with('success', 'Event created successfully.');
    }

    public function show()
    {
        $events = Event::all();
        return view('Admin.Event.View-Event', compact('events'));
    }

    public function edit($id)
    {
        $event = Event::find($id);
        return view('Admin.Event.Edit-Event', compact('event'));
    }

    public function update(Request $request, $id)
    {
        $event = Event::find($id);
        $data = $request->validate([
            'title' => 'required|string|max:255',
            'content1' => 'nullable|string',
            'content2' => 'nullable|string',
            'note' => 'nullable|string',
            'content3' => 'nullable|string',
            'subtitle1' => 'nullable|string|max:255',
            'image1' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'content4' => 'nullable|string',
            'subtitle2' => 'nullable|string|max:255',
            'image2' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'content5' => 'nullable|string',
            'image3' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'additional_images.*' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        // Handle single image updates with the preferred format
        foreach (['image1', 'image2', 'image3'] as $imageField) {
            if ($image = $request->file($imageField)) {
                $destinationPath = 'images/';
                $eventImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
                $image->move($destinationPath, $eventImage);
                $data[$imageField] = "$eventImage";
            } elseif ($request->input($imageField) === null) {
                unset($data[$imageField]);
            }
        }

        // Handle multiple additional images
        if ($request->hasFile('additional_images')) {
            $additionalImages = [];
            foreach ($request->file('additional_images') as $file) {
                $destinationPath = 'images/';
                $eventImage = date('YmdHis') . "." . $file->getClientOriginalExtension();
                $file->move($destinationPath, $eventImage);
                $additionalImages[] = "$eventImage";
            }
            $data['additional_images'] = json_encode($additionalImages);
        }

        $event->update($data);

        return redirect()->route('events.show')->with('success', 'Event updated successfully.');
    }

    public function destroy($id)
    {
        $event = Event::find($id);
        $event->delete();
        return redirect()->back()->with('success', 'Event deleted successfully.');
    }
}
