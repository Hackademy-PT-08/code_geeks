<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Announcement;
use Illuminate\Http\Request;

class AnnouncementController extends Controller
{

    public function index(){
        $announcements = Announcement::where('is_accepted',true)->simplePaginate(12);
        $categories = Category::all();
        return view('announcements.index', [
            'announcements' => $announcements,
            'categories' => $categories,
        ]);
    }
    public function create(){
        $announcements = Announcement::all();
        $categories = Category::all();
        return view('announcements.create', [
            'announcements' => $announcements,
            'categories' => $categories,
        ]);
    }

    public function show($id){
        $announcement = Announcement::find($id);

        return view ('announcements.show', ['announcement' => $announcement])

    ;}

    public function searchAnnouncements(Request  $request){
     
        
    {
     $announcements = Announcement::search($request->searched)->where('is_accepted',true)->paginate(12);

        return view('announcements.index', compact('announcements'));
    }



    }
};