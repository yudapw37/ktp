@extends('main')
@section('title', 'Data Ktp')
    @section('body')

    <div class="container">
    <div class="row">
        <div class="col-12">
        <h2>Detail Data KTP</h2>
        <hr style="height:5px;background-image: linear-gradient(120deg, #89f7fe 0%, #66a6ff 100%);;border-radius:5px">

            <div>
                <label for="recipient-name" class="col-form-label">Nama:</label> <label for="recipient-name" class="col-form-label"> {{ $dataktp->Nama}}</label>
            </div>
            <div>
                <label for="recipient-name" class="col-form-label">Tempat & Tanggal Lahir:</label> <label for="recipient-name" class="col-form-label"> {{ $dataktp->TempatLahir}}</label> <label for="recipient-name" class="col-form-label">, {{ $dataktp->TanggalLahir}}</label>
            </div>
            <div >
                <label for="recipient-name" class="col-form-label">Umur :</label> <label for="recipient-name" class="col-form-label"> {{ $umur}}</label>
            </div>
            <div >
                <label for="recipient-name" class="col-form-label">Jenis Kelamin:</label> <label for="recipient-name" class="col-form-label"> {{ $dataktp->Jenis_Kelamin}}</label>
            </div>
            <div >
                <label for="recipient-name" class="col-form-label">Gol Darah:</label> <label for="recipient-name" class="col-form-label"> {{ $dataktp->Gol_Darah}}</label>
            </div>
            <div >
                <label for="recipient-name" class="col-form-label">Alamat :</label> <label for="recipient-name" class="col-form-label"> {{ $dataktp->Alamat}}</label>
            </div>
            <div >
                <label for="recipient-name" class="col-form-label">RT/RW :</label> <label for="recipient-name" class="col-form-label"> {{ $dataktp->RT_RW}}</label>
            </div>
            <div >
                <label for="recipient-name" class="col-form-label">Dukuh:</label> <label for="recipient-name" class="col-form-label"> {{ $dataktp->Dk}}</label>
            </div>
            <div > 
                <label for="recipient-name" class="col-form-label">Desa:</label> <label for="recipient-name" class="col-form-label"> {{ $dataktp->Ds}}</label>
            </div>
            <div >
                <label for="recipient-name" class="col-form-label">Kecamatan:</label> <label for="recipient-name" class="col-form-label"> {{ $dataktp->Kec}}</label>
            </div>
            <div >
                <label for="recipient-name" class="col-form-label">Agama :</label> <label for="recipient-name" class="col-form-label"> {{ $dataktp->Agama}}</label>
            </div>
            <div >
                <label for="recipient-name" class="col-form-label">Status :</label> <label for="recipient-name" class="col-form-label"> {{ $dataktp->Status}}</label>
            </div>
            <div >
                <label for="recipient-name" class="col-form-label"> Kerja :</label> <label for="recipient-name" class="col-form-label"> {{ $dataktp->Kerja}}</label>
            </div>
            <div >
                <label for="recipient-name" class="col-form-label">Kewarganegaraan:</label> <label for="recipient-name" class="col-form-label"> {{ $dataktp->Kewarganegaraan}}</label>
            </div>
            <div >
                <label for="recipient-name" class="col-form-label">Foto :</label>
                <img src="{{ $url}}/{{ $dataktp->foto}}" alt="" class="img-reponsive">
            </div> 
        </div>
    </div>
    </div>

@endsection