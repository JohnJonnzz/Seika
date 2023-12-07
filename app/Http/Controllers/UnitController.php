<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;

class UnitController extends Controller
{
    public function addUnit(Request $request) {
        $gallery = DB::table('gallery')->get();
        $finalGallery = [];

        if ($gallery) {
           foreach ($gallery as $galleryRow) {
                $finalGallery[] = $galleryRow;
            }
        }

         return view('add_unit')
         ->with('gallery', $finalGallery);
    }

    public function insertUnit(Request $request){
        $fields = $request->validate([
            'gallery_id' => "required",
            'unit_name'  => "required",
            'subjudul' => "required",
            'room' => "required",
            'category' => "required",
            'units_desc' => "required",
            'location_link' => "required",
            'price'=> "required",
            'availability'=> "required"
        ]);

        for ($i = 1; $i <= 8; $i++) {
            if(isset($request->{'display'. $i})){
                $fields['display'. $i] = $request->{'display'. $i};
            }
        }
        
        $affected = DB::table('units')->insert($fields);

        return redirect()->route('admin')
        ->with('success', 'Unit berhasil ditambahkan');
    }

    public function editUnit($id) {
        $gallery = DB::table('gallery')->get();
        $finalGallery = [];

        if ($gallery) {
           foreach ($gallery as $galleryRow) {
                $finalGallery[] = $galleryRow;
            }
        }

        $units = DB::table('units')->where('unit_id', $id)->get();



         return view('edit_unit')
         ->with('gallery', $finalGallery)
         ->with('unitId', $id)
         ->with('unit', $units[0]);
    }

     public function updateUnit(Request $request) {
        $fields = $request->validate([
            'unit_id' => "required",
            'gallery_id' => "required",
            'unit_name'  => "required",
            'subjudul' => "required",
            'room' => "required",
            'category' => "required",
            'units_desc' => "required",
            'location_link' => "required",
            'price'=> "required",
            'availability'=> "required"
        ]);

        for ($i = 1; $i <= 8; $i++) {
            if(isset($request->{'display'. $i})){
                $fields['display'. $i] = $request->{'display'. $i};
            }
        }

        $affected = DB::table('units')
        ->where('unit_id', $fields['unit_id'])
        ->update($fields);

        if($affected <= 0){
            return redirect()->route('admin')
            ->with('error', 'Unit gagal diupdate');
        }

        return redirect()->route('admin')
        ->with('success', 'Unit berhasil ditambahkan');
     }

     public function deleteUnit($id){
        $affected = DB::table('units')->where('unit_id', $id)->delete();

        if($affected <= 0){
            return redirect()->route('admin')
            ->with('error', 'Unit gagal dihapus');
        }

        return redirect()->route('admin')
        ->with('success', 'Unit berhasil dihapus');
     }
}
