@extends('master')

@section('table')
  <div class="ml-3 mt-3">
      <h1>Detail Pertanyaan</h1>


      <table class="table table-head-fixed text-nowrap">
        <thead>
          <tr>
            <th>ID</th>
            <th>Judul</th>
            <th>Pertanyaan</th>
            <th>Action</th>
          </tr>
        </thead>
        <tbody>

          <tr>
            <td>{{$item->id}}</td>
            <td>{{$item->judul}}</td>
            <td>{{$item->isi}}</td>
            <td><td><a href="/jawaban/create" class="btn btn-sm btn-info">Reply</a></td></td>
          </tr>
              
        </tbody>
      </table>

  </div>
    
@endsection