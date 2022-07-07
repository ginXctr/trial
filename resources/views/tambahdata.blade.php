@extends('dashboard.main')

@section('container')
<div class="row justify-content-center">
    <div class="col-8">
        <div class="card">
            <div class="card-body">
            <h5 class="card-title">Tambah Data Peserta</h5>
            <form action="/insertdata" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="mb-3">
                    <label for="exampleInputEmail1">CODE</label>
                    <input type="number" class="form-control" name="code" id="exampleInputEmail1" placeholder="1234">
                    <small id="emailHelp" class="form-text text-muted">Nomor Punggung Peserta</small>
                </div>
                    <div class="mb-3">
                    <label for="exampleInputEmail1">Nama</label>
                    <input type="text" class="form-control" name="nama" id="exampleInputEmail1">
                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1">Phone</label>
                    <input type="number" class="form-control" name="phone" id="exampleInputEmail1">
                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1">Alamat</label>
                    <input type="text" class="form-control" name="alamat" id="exampleInputEmail1">
                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1">Team</label>
                    <input type="text" class="form-control" name="team" id="exampleInputEmail1">
                    <small id="emailHelp" class="form-text text-muted">Minus - jika tidak ada</small>
                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1">Jersey</label>
                    <input type="text" class="form-control" name="jersey" id="exampleInputEmail1">
                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1">Kategori</label>
                    <select class="form-select" name="kategori" aria-label="default select example">
                        <option selected> Pilih Kategori</option>
                        <option value="1">KOM 18-34</option>
                        <option value="2">KOM 35-39</option>
                        <option value="3">KOM 40-44</option>
                        <option value="4">KOM 45-50</option>
                        <option value="5">KOM Up 50</option>
                        <option value="6">Non KOM</option>
                        <option value="7">QOM 18-34</option>
                        <option value="8">QOM Up 35</option>
                    </select> 
                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1">Paket</label>
                    <input type="number" class="form-control" name="paket" id="exampleInputEmail1" placeholder="0">
                    <small id="emailHelp" class="form-text text-muted">tulis angka paket</small>
                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1">Status</label>
                    <select class="form-select" name="status" aria-label="default select example">
                        <option selected> Pilih Status</option>
                        <option value="1">Belum Registrasi</option>
                        <option value="2">Registrasi</option>
                        <option value="3">Racepack</option>
                        <option value="4">Racepack Sudah Diambil</option>
                    </select> 
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
            </div>
        </div>
    </div>
</div>
@endsection