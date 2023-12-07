<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CarouselController extends Controller
{
    public function addCarousel() {
        $gallery = DB::table('gallery')->get();
        $finalGallery = [];

        if ($gallery) {
           foreach ($gallery as $galleryRow) {
                $finalGallery[] = $galleryRow;
            }
        }

         return view('add_carousel')
         ->with('gallery', $finalGallery);
    }

    public function insertCarousel(Request $request){
        $request->validate([
            'new_carousel_img_id' => 'required',
        ]);

        $affected = DB::table('carousel')->insert([
            'carousel_img_id' => $request->new_carousel_img_id,
        ]);

        if($affected <= 0){
            return redirect()->route('adminCarousel')
            ->with('error', 'Carousel gagal ditambahkan');
        }

        return redirect()->route('adminCarousel')
        ->with('success', 'Carousel berhasil ditambahkan');
    }

    public function editCarousel($id) {
        $gallery = DB::table('gallery')->get();
        $carousel = DB::table('carousel')->where('carousel_id', $id)->get();
        $finalGallery = [];

        if ($gallery) {
           foreach ($gallery as $galleryRow) {
                $finalGallery[] = $galleryRow;
            }
        }

         return view('edit_carousel')
         ->with('gallery', $finalGallery)
         ->with('image_id', $carousel[0]->carousel_img_id)
         ->with('carouselId', $carousel[0]->carousel_id);
    }

    public function updateCarousel(Request $request){
        $request->validate([
            'carousel_id' => 'required',
            'new_carousel_img_id' => 'required',
        ]);

        $affected = DB::table('carousel')
              ->where('carousel_id', $request->carousel_id)
              ->update(['carousel_img_id' => $request->new_carousel_img_id]);

        if($affected <= 0){
            return redirect()->route('adminCarousel')
            ->with('error', 'Carousel gagal diupdate');
        }
        
        return redirect()->route('adminCarousel')
        ->with('success', 'Carousel berhasil diedit');
    }

    public function deleteCarousel($id) {
        $affected = DB::table('carousel')->where('carousel_id', $id)->delete();

        if($affected <= 0){
            return redirect()->route('adminCarousel')
            ->with('error', 'Carousel gagal dihapus');
        }

        return redirect()->route('adminCarousel')
        ->with('success', 'Carousel berhasil dihapus');
    }
}
