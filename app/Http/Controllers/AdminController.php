<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AdminController extends Controller
{
    public function index() {
        $units = DB::table('units')->get(['unit_id', 'unit_name']);

        $unitResult = [];

        if($units){
            foreach ($units as $unitRow) {
                $unitResult[] = $unitRow;
            }
        }

        return view('admin')
        ->with('unitsList', $unitResult);
    }

    public function adminProfile(){
        $users = DB::table('users')->get();

        $adminData = [];

        if($users){
            foreach ($users as $adminRow) {
                $adminData[] = $adminRow;
            }
        }

        return view('adminprofile')
        ->with('adminData', $adminData);
    }

    public function adminCarousel(){
        $carousel = DB::table('carousel')->get();
        $finalCarousel = [];

        if ($carousel) {
            foreach ($carousel as $carouselRow) {
                $finalCarousel[] = $carouselRow;
            }
        }

        return view('admincarousel')
        ->with('carouselData', $finalCarousel);
    }

    public function adminGallery(){
        $gallery = DB::table('gallery')->get();
        $finalGallery = [];

        if ($gallery) {
           foreach ($gallery as $galleryRow) {
                $finalGallery[] = $galleryRow;
            }
        }

        return view('admingallery')
        ->with('galleryData', $finalGallery);
    }
}
