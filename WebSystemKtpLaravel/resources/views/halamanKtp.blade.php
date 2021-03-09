@extends('main')
    @section('title', 'Data Ktp')
    @section('body')

    <div class="container">
        <h2>Table Data KTP</h2>
        <hr style="height:5px;background-image: linear-gradient(120deg, #89f7fe 0%, #66a6ff 100%);;border-radius:5px">
        @if (session('statusSukses'))
            <div class="alert alert-success">
                {{ session('statusSukses') }}
            </div>
        @endif
        <div ><a href="/ExportKtp" class="btn btn-success mb-2">Export</a>
        @if (auth()->user()->level == "admin")
        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
            Import
        </button>
        <a href="/addPage" class="btn btn-success mb-2">Tambah Data</a>
        @endif
        <!-- <button type="button" class="btn btn-success" data-toggle="modal" data-target="#exampleModaladd">
            Add Data
        </button> -->
        </div>        
        <div class="table-responsive">          
        <table class="table">
            <thead>
            <tr>
                <th>#</th>
                <th>NIK</th>
                <th>Nama</th>
                <th>Tempat, TanggalLahir</th>
                <th>Jenis Kelamin</th>
                <th>Alamat</th>
                <th></th>
            </tr>
            </thead>
            <tbody>
            @foreach ($dataKtp as $data)
            <tr>
                <th scope="row">{{$loop->iteration}}</th>
                <td>{{$data->NIK}}</td>
                <td>{{$data->Nama}}</td>
                <td>{{$data->TempatLahir}}, {{$data->TanggalLahir}}</td>
                <td>{{$data->Jenis_Kelamin}}</td>
                <td>{{$data->Dk}} {{$data->RT_RW}}, {{$data->Ds}}, {{$data->Kec}}</td>
                <td>
                    <a href="/getDetailKtp/{{$data->id}}/detail" class="btn btn-primary mb-2">Detail</a>
                    @if (auth()->user()->level == "admin")
                    <a href="/getEditKtp/{{$data->id}}/edit" class="btn btn-success mb-2" >Edit</a>
                    <a href="/ktp/delete/{{$data->id}}" class="btn btn-danger">Delete</a>
                    @endif
                </td>
            </tr>
            @endforeach
            </tbody>
        </table>
        </div>
            <div style=" display:flex!important; justify-content:space-between!important; align-items: center!important;">
                <div>Total : {{$dataKtp->total()}}</div>
                <div>{{$dataKtp->links()}}</div>  
            </div> 
        </div>
        </div>
    </div>

    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Import Data Ktp (Csf)</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <form action="/ImportKtp" method="post" enctype="multipart/form-data">
        <div class="modal-body">
            
            {{ csrf_field()}}
            <div class="form-group">
                <input type="file" name="file" required="required">
            </div>
            
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            <button type="submit" class="btn btn-primary">Import Data</button>
        </div>
        </form>
        </div>
    </div>
    </div>

    <!-- Modal Add Data-->
    <div class="modal fade" id="exampleModalDelete" tabindex="-1" role="dialog" aria-labelledby="exampleModalDeleteLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="exampleModaladdLabel">Delete Data Ktp</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <form action="/AddKtp" method="post" enctype="multipart/form-data">
        <div class="modal-body">
            
            {{ csrf_field()}}
            <div class="form-group">
                <label for="recipient-name" class="col-form-label">Nama:</label>
                <input required type="text" class="form-control" id="Nama" name="Nama">
            </div>
            <div class="form-group">
                <label for="recipient-name" class="col-form-label">Tempat Lahir:</label>
                <input required type="text" class="form-control" id="TempatLahir" name="TempatLahir">
            </div>         
            
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            <button type="submit" class="btn btn-primary">Simpan Data</button>
        </div>
        </form>
        </div>
    </div>
    </div>

    @endsection