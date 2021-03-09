@extends('main')
@section('title', 'Data Ktp')
    @section('body')

    <div class="container">
    <div class="row">
        <div class="col-12">
        <h2>Tambah Data KTP</h2>
        <hr style="height:5px;background-image: linear-gradient(120deg, #89f7fe 0%, #66a6ff 100%);;border-radius:5px">
        <form action="/AddKtp" method="post" enctype="multipart/form-data">
            {{ csrf_field()}}
            <div class="form-group">
                <label for="recipient-name" class="col-form-label">Nama:</label>
                <input required type="text" class="form-control" id="Nama" name="Nama" >
            </div>
            <div class="form-group">
                <label for="recipient-name" class="col-form-label">Tempat Lahir:</label>
                <input required type="text" class="form-control" id="TempatLahir" name="TempatLahir">
            </div>
            <div class="form-group">
                <label for="recipient-name" class="col-form-label">Tanggal Lahir:</label>
                <input required type="date" class="form-control" id="TanggalLahir" name="TanggalLahir">
            </div>
            <div class="form-group">
                <label for="recipient-name" class="col-form-label">Jenis Kelamin:</label>
                <select required class="form-control" id="Jenis_Kelamin" name="Jenis_Kelamin">
                    <option selected>Choose...</option>
                    <option value="Laki-Laki">Laki-Laki</option>
                    <option value="Perempuan">Perempuan</option>
                </select>
            </div>
            <div class="form-group">
                <label for="recipient-name" class="col-form-label">Gol Darah:</label>
                <select required class="form-control" id="Gol_Darah" name="Gol_Darah">
                    <option selected>Choose...</option>
                    <option value="A">A</option>
                    <option value="AB">AB</option>
                    <option value="B">B</option>
                    <option value="O">O</option>
                </select>
            </div>
            <div class="form-group">
                <label for="recipient-name" class="col-form-label">Alamat :</label>
                <input required type="text" class="form-control" id="Alamat" name="Alamat">
            </div>
            <div class="form-group">
                <label for="recipient-name" class="col-form-label">RT/RW :</label>
                <input required type="text" class="form-control" id="RT_RW" name="RT_RW">
            </div>
            <div class="form-group">
                <label for="recipient-name" class="col-form-label">Dukuh:</label>
                <input required type="text" class="form-control" id="Dk" name="Dk">
            </div>
            <div class="form-group">
                <label for="recipient-name" class="col-form-label">Desa:</label>
                <input required type="text" class="form-control" id="Ds" name="Ds">
            </div>
            <div class="form-group">
                <label for="recipient-name" class="col-form-label">Kecamatan:</label>
                <input required type="text" class="form-control" id="Kec" name="Kec">
            </div>
            <div class="form-group">
                <label for="recipient-name" class="col-form-label">Agama :</label>
                <input required type="text" class="form-control" id="Agama" name="Agama">
            </div>
            <div class="form-group">
                <label for="recipient-name" class="col-form-label">Status :</label>
                <select required class="form-control" id="Status" name="Status">
                    <option selected>Choose...</option>
                    <option value="Kawin">Kawin</option>
                    <option value="BelumKawin">Belum Kawin</option>
                </select>
            </div>
            <div class="form-group">
                <label for="recipient-name" class="col-form-label"> Kerja :</label>
                <input required type="text" class="form-control" id="Kerja" name="Kerja">
            </div>
            <div class="form-group">
                <label for="recipient-name" class="col-form-label">Kewarganegaraan:</label>
                <input required type="text" class="form-control" id="Kewarganegaraan" name="Kewarganegaraan">
            </div>
            <div class="form-group">
                <label for="recipient-name" class="col-form-label">Upload Foto:</label>
                <input type="file" name="file" required="required">
            </div>          
            
            <div class="row">
                <button type="submit" class="btn btn-primary">Simpan Data</button>
            </div>
        </form>
        </div>
    </div>
    </div>

@endsection