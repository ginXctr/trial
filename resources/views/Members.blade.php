@extends('dashboard.main')

@section('container')

<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-1 pb-3 mb-1 border-bottom">
  <div class="row g-3 align-items-center">
    <div class="col-auto">
      <label for="inputPassword6" class="col-form-label">Search</label>
    </div>
    <div class="col-auto">
      <form action="/Members">
      <input type="search" class="form-control" name="search" value="{{ request('search') }}">
      </form>
    </div>
  </div>
  <div class="btn-toolbar mb-2 mb-md-0">
    <div class="btn-group me-2">
      <a href="/tambahdata" type="button" class="btn btn-sm btn-outline-secondary">Tambah data</a>
    </div>
  </div>
</div>

<table class="table table-striped mt-2">
    <thead class="text-center">
      <tr>
        <th scope="col">NO</th>
        <th scope="col">CODE</th>
        <th scope="col">NAMA</th>
        <th scope="col">PHONE</th>
        <th scope="col">ALAMAT</th>
        <th scope="col">TEAM</th>
        <th scope="col">JERSEY</th>
        <th scope="col">KATEGORI</th>
        <th scope="col">PAKET</th>
        <th scope="col">STATUS</th>
        <th scope="col" class="text-center">Edit</th>
      </tr>
    </thead>
    <tbody class="text-center">
    @foreach ($data as $row)
        <tr>
            <th scope="row">{{ $row->id }}</th>
            <td>{{ $row->code }}</td>
            <td>{{ $row->nama }}</td>
            <td>{{ $row->phone }}</td>
            <td>{{ $row->alamat }}</td>
            <td>{{ $row->team }}</td>
            <td>{{ $row->jersey }}</td>
            <td>{{ $row->kategori }}</td>
            <td>{{ $row->paket }}</td>
            <td>{{ $row->status }}</td>
            <td width="12%">
                <button type="button" class="btn btn-primary btn-sm">Edit</button>
                <button type="button" class="btn btn-danger btn-sm">Hapus</button>
            </td>
        </tr> 
    @endforeach
      
    </tbody>
  </table>
  {{ $data->links() }}
@endsection