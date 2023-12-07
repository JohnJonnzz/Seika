<?php

namespace App\Http\Controllers;

use App\Models\Carousel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;

class HomeController extends Controller
{

    public function index() {
        $carousel = DB::table('carousel')->get(['carousel_id', 'carousel_img_id']);
        $gallery = DB::table('gallery')->get(['gallery_id', 'img']);
        $units = DB::table('units')->get();
        $about = DB::table('about')->where('abt_id', 1)->get();

        $finalGallery = [];
        $finalCarousel = [];
        $unitResult = [];

        if ($gallery) {
           foreach ($gallery as $galleryRow) {
                $finalGallery[$galleryRow->gallery_id] = $galleryRow->img;
            }
        }

        if ($carousel) {
            foreach ($carousel as $carouselRow) {
                $finalCarousel[] = $carouselRow->carousel_img_id;
            }
        }

        if($units){
            foreach ($units as $unitRow) {
                $unitResult[] = $unitRow;
            }
        }

        return view('home')
        ->with('carouselImages', $finalCarousel)
        ->with('gallery', $finalGallery)
        ->with('units', $unitResult)
        ->with('categories', array_unique(array_column($unitResult, 'category')))
        ->with('about', $about[0]);
     }


      public function units($id){
        $unitDetailsResult = DB::table('units')->where('unit_id', $id)->get();
        return view('units')
        ->with('unitDetails',  $unitDetailsResult[0]);
      }

      public function about(){
        $about = DB::table('about')->where('abt_id', 1)->get();

        return view('about')
        ->with('about', $about[0]);
      }

      public function properties() {

        $gallery = DB::table('gallery')->get(['gallery_id', 'img']);
        $units = DB::table('units')->get();

        $finalGallery = [];
        $unitResult = [];

        if ($gallery) {
           foreach ($gallery as $galleryRow) {
                $finalGallery[$galleryRow->gallery_id] = $galleryRow->img;
            }
        }

        if($units){
            foreach ($units as $unitRow) {
                $unitResult[] = $unitRow;
            }
        }

        return view('properties')
        ->with('gallery', $finalGallery)
        ->with('units', $unitResult)
        ->with('categories', array_unique(array_column($unitResult, 'category')));
      }

}
