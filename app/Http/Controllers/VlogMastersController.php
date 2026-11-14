<?php

namespace App\Http\Controllers;

use App\Models\VlogMasters;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class VlogMastersController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('vlog.vlog_index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function blog_list()
    {
        try {
            $vlogMasters = VlogMasters::all();
        } catch (\Throwable $e) {
            Log::warning('Blog list database query failed: ' . $e->getMessage());
            $vlogMasters = collect();
        }

        return view('Website.blog_list', ['vlogMasters' => $vlogMasters]);
    }

    public function blog_details($id)
    {
        try {
            $vlogMaster = VlogMasters::findOrFail($id);
            $recent_blog = VlogMasters::where('id', '!=', $id)->get();
        } catch (\Throwable $e) {
            Log::warning('Blog details database query failed: ' . $e->getMessage());
            abort(404, 'Blog post not found');
        }

        return view('Website.blog_details', [
            'blog_details' => $vlogMaster,
            'recent_blog' => $recent_blog
        ]);
    }
}
