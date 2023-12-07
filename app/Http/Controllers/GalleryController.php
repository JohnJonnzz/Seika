<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class GalleryController extends Controller
{
    public function addGallery() {
         return view('add_gallery');
    }

    public function insertGallery(Request $request){
        $request->validate([
            'img' => 'required',
            'gallery_image' => 'required|image|mimes:jpeg,png,jpg|max:2048',
        ]);
        $path = public_path('assets/img/');
        !is_dir($path) &&
            mkdir($path, 0777, true);
        
        $request->gallery_image->move($path, $request->img . "." . $request->gallery_image->getClientOriginalExtension());

        $affected = DB::table('gallery')->insert([
            'img' => $request->img . "." . $request->gallery_image->getClientOriginalExtension(),
        ]);

        if($affected <= 0){
            return redirect()->route('adminGallery')
            ->with('error', 'Gambar gagal ditambahkan');
        }

        return redirect()->route('adminGallery')
        ->with('success', 'Gallery berhasil ditambahkan');
    }
    
    public function editGallery($id){
        $gallery = DB::table('gallery')->where("gallery_id", $id)->get();
        return view('edit_gallery')
        ->with("galleryId", $gallery[0]->gallery_id)
        ->with('existingImageName', $gallery[0]->img);
    }

    public function updateGallery(Request $request){
        $request->validate([
            'img' => 'required',
            'gallery_id' => 'required',
        ]);

        $data = DB::table('gallery')
              ->where('gallery_id', $request->gallery_id)
              ->get();

        $affected = DB::table('gallery')
              ->where('gallery_id', $request->gallery_id)
              ->update(['img' => $request->img]);
        
        if($affected <= 0){
            return redirect()->route('adminGallery')
            ->with('error', 'Gambar gagal diupdate');
        }

        rename(public_path('assets/img/'. $data[0]->img), public_path('assets/img/'.$request->img));
        
        return redirect()->route('adminGallery')
        ->with('success', 'Gallery berhasil diedit');
    }

    public function deleteGallery($id){
        $gallery =  $gallery = DB::table('gallery')->where("gallery_id", $id)->get();
        $affected = DB::table('gallery')->where('gallery_id', $id)->delete();

        if(file_exists(public_path('assets/img/' . $gallery[0]->img))){ 
            $file =public_path('assets/img/' . $gallery[0]->img);
            $img= unlink($file);
        }else{
            return redirect()->route('adminGallery')
            ->with('error', 'Gambar tidak ditemukan');
        }

        if($affected <= 0){
            return redirect()->route('adminGallery')
            ->with('error', 'Gambar gagal dihapus');
        }

        return redirect()->route('adminGallery')
        ->with('success', 'Gallery berhasil dihapus');
    }
}
