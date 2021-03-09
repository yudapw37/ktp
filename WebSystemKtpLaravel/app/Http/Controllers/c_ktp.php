<?php

namespace App\Http\Controllers;
use App\ktp;
use App\Exports\KtpExport;
use App\Imports\KtpImport;
use Maatwebsite\Excel\Facades\Excel;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class c_ktp extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $ktp=ktp::paginate(10);
        // dd($ktp);
        return view('halamanKtp', ['dataKtp'=>$ktp]);
    }

    public function ktpexport(){
        return Excel::download(new KtpExport, 'ktp.xlsx');
    }
    public function ktpimport(Request $request){
        $file = $request->file('file');
        $namaFile = $file->getClientOriginalName();
        $file->move('DataKtp', $namaFile);

        Excel::import(new KtpImport, public_path('/DataKtp/'.$namaFile));
        return redirect('/ktp');
    }

    public function addKtp(Request $request){
        $request->validate([
            'Nama'=>'required',
            'TempatLahir'=>'required',
            'TanggalLahir'=>'required',
            'Jenis_Kelamin'=>'required',
            'Gol_Darah'=>'required',
            'Alamat'=>'required',
            'RT_RW'=>'required',
            'Dk'=>'required',
            'Ds'=>'required',
            'Kec'=>'required',
            'Agama'=>'required',
            'Status'=>'required',
            'Kerja'=>'required',
            'Kewarganegaraan'=>'required',
            'file'=>'required'
        ]);

            $tgl = str_replace("-", "", $request->TanggalLahir);
            
            $nik='3310107'.$tgl.'0001';

            $file = $request->file;
            $fileget2=$_FILES['file']['name'];

            $namafotodb='';
            if($request->file){
                $fileget = $request->file('file');
                
                $ext = $file->getClientOriginalExtension();

                $nama_file = $nik."_".time().".".$ext;
                // dd($fileget2.'__'.$fileget.'__'.$ext.'__'.$nama_file);
                $tujuan_upload = 'uploads';
                $namafotodb='uploads/'.$nama_file;
                $file->move($tujuan_upload,$nama_file);
            }
            else{$nama_file="-";}

            // var_dump($request->file);

            ktp::create([
                'NIK' => '3310107'.$tgl.'0001',
                'Nama' => $request->Nama,
                'TempatLahir' => $request->TempatLahir,
                'TanggalLahir' => $request->TanggalLahir,
                'Jenis_Kelamin' => $request->Jenis_Kelamin,
                'Gol_Darah' => $request->Gol_Darah,
                'Alamat' => $request->Alamat,
                'RT_RW' => $request->RT_RW,
                'Dk' => $request->Dk,
                'Ds' => $request->Ds,
                'Kec' => $request->Kec,
                'Agama' => $request->Agama,
                'Status' => $request->Status,
                'Kerja' => $request->Kerja,
                'Kewarganegaraan' => $request->Kewarganegaraan,
                'foto' => $namafotodb,
            ]);

        return redirect('/ktp')->with('statusSukses', 'Data Ktp Berhasil Ditambah!');;
    }
    public function getEditKtp(ktp $ktp){
        $dataktp=ktp::where('id','=',$ktp->id)->first();
        // var_dump($dataktp->id);
        return view('editKtp', ['dataktp'=>$dataktp]);
    }
    public function getDetailKtp(ktp $ktp){
        $dataktp=ktp::where('id','=',$ktp->id)->first();
        // var_dump($dataktp->id);
            if(isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on') {$url = "https://";   }
            else  {$url = "http://";   }
            $url.= $_SERVER['HTTP_HOST'];

            $umur = 0;
            $date1=date_create($dataktp->TanggalLahir);
            $date2=date_create(date("Y-m-d"));
            $diff=date_diff($date1,$date2);
            $umur = $diff->format("%y");
        
        return view('detailKtp', ['dataktp'=>$dataktp, 'url'=>$url, 'umur'=>$umur]);
    }
    public function editKtp(Request $request, Ktp $ktp){
        $request->validate([
            'Nama'=>'required',
            'TempatLahir'=>'required',
            'TanggalLahir'=>'required',
            'Jenis_Kelamin'=>'required',
            'Gol_Darah'=>'required',
            'Alamat'=>'required',
            'RT_RW'=>'required',
            'Dk'=>'required',
            'Ds'=>'required',
            'Kec'=>'required',
            'Agama'=>'required',
            'Status'=>'required',
            'Kerja'=>'required',
            'Kewarganegaraan'=>'required',
            'file'=>'required'
        ]);

            $tgl = str_replace("-", "", $request->TanggalLahir);
            
            $nik='3310107'.$tgl.'0001';

            $file = $request->file;
            $fileget2=$_FILES['file']['name'];

            $namafotodb='';
            if($request->file){
                $fileget = $request->file('file');
                
                $ext = $file->getClientOriginalExtension();

                $nama_file = $nik."_".time().".".$ext;
                // dd($fileget2.'__'.$fileget.'__'.$ext.'__'.$nama_file);
                $tujuan_upload = 'uploads';
                $namafotodb='uploads/'.$nama_file;
                $file->move($tujuan_upload,$nama_file);
            }
            else{$nama_file="-";}

            ktp::where('id', '=', $ktp->id)
                ->update([
                    'NIK' => '3310107'.$tgl.'0001',
                    'Nama' => $request->Nama,
                    'TempatLahir' => $request->TempatLahir,
                    'TanggalLahir' => $request->TanggalLahir,
                    'Jenis_Kelamin' => $request->Jenis_Kelamin,
                    'Gol_Darah' => $request->Gol_Darah,
                    'Alamat' => $request->Alamat,
                    'RT_RW' => $request->RT_RW,
                    'Dk' => $request->Dk,
                    'Ds' => $request->Ds,
                    'Kec' => $request->Kec,
                    'Agama' => $request->Agama,
                    'Status' => $request->Status,
                    'Kerja' => $request->Kerja,
                    'Kewarganegaraan' => $request->Kewarganegaraan,
                    'foto' => $namafotodb,
            ]);

        return redirect('/ktp')->with('statusSukses', 'Data Ktp Berhasil Diubah!');
    }
    public function delKtp(Request $request){
        return redirect('/ktp');
    }
    public function deleteKtp(Request $request){
        // dd($request->id);
        // ktp::where('id', '=', $request->id)->delete();

        return redirect('/ktp');
    }
    public function destroy(ktp $ktp)
    {
        ktp::destroy($ktp->id);
        return redirect('/ktp')->with('statusSukses', 'Data KTP Berhasil Dihapus!');
    }

}
