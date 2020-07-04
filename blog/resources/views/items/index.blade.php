@extends('master')

@section('table')
  <div class="ml-3 mt-3 mr-3">
      <h1>List Pertanyaan</h1>
      <a href="/pertanyaan/create" class="btn btn-primary">
        Input new Question
      </a>

      <table class="mt-4 table table-head-fixed text-nowrap">
        <thead>
          <tr>
            <th>ID</th>
            <th>Judul</th>
            <th>Pertanyaan</th>
            <th>Info</th>
          </tr>
        </thead>
        <tbody>
          @foreach ($items as $key => $item)

          <tr>
            <td>{{$item->id}}</td>
            <td>{{$item->judul}}</td>
            <td>{{$item->isi}}</td>
          <td><a href="/pertanyaan/{{$item->id}}" class="btn btn-sm btn-info">Detail</a></td>
          </tr>
              
          @endforeach
        </tbody>
      </table>

  </div>
    
@endsection