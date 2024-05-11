<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FileUploadController extends Controller
{
    public function fileUpload(){
        return view('file-upload');
    }

    public function prosesFileUpload(Request $request){
        // dump($request->berkas);
        // dump($request->file('file'));
        // return "Pemrosesan file upload di sini";
        $request->validate([
            'berkas'=>'required|file|image|max:500',]);
            // $path = $request->berkas->store('uploads');
            // $namaFile=$request->berkas->getClientOriginalName(); // fungsi untuk mengambil nama file
            $extfile=$request->berkas->getClientOriginalName();
            $namaFile='web-'.time().".".$extfile;
            // $path = $request->berkas->storeAs('uploads', $namaFile);
            // $path = $request->berkas->storeAs('uploads', 'berkas');
            $path = $request->berkas->storeAs('public', $namaFile);
            // echo "proses upload berhasil, file berada di: $path";
            // echo $request->berkas->getClientOriginalName()."lolos validasi";
            $pathbaru=asset('storage/'.$namaFile);
            echo "proses upload berhasil, data disimpan pada:$path";
            echo "<br>";
            echo "Tampilkan link:<a href='$pathbaru'>$pathbaru</a>";
    }
}