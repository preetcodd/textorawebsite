<?php

namespace App\Http\Controllers;

use App\Models\VlogMasters;
use Illuminate\Http\Request;

class VlogMastersController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        return view('vlog.vlog_index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function blog_list()
    {
        $vlogMasters = VlogMasters::all();
        return view('Website.blog_list', ['vlogMasters' => $vlogMasters]);
    }

    public function blog_details($id)
    {
        $vlogMaster = VlogMasters::findOrFail($id); // Assumes 'id' is the primary key
        $recent_blog = VlogMasters::where('id', '!=', $id)->get();

        return view('Website.blog_details', [
            'blog_details' => $vlogMaster,
            'recent_blog' => $recent_blog
        ]);
    }
}
