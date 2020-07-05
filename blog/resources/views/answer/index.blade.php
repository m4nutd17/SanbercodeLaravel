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
            <th>Jawaban</th>
            <th>Pertanyaan</th>
            <th>Kode Pertanyaan</th>
          </tr>
        </thead>
        <tbody>
          @foreach ($items as $key => $item)

          <tr>
            <td>{{$item->id}}</td>
            <td>{{$item->isi}}</td>
            <td>{{$item->isi}}</td>
            <td>{{$item->pertanyaan_id}}</td>
          <td><a href="/pertanyaan/{{$item->id}}" class="mr-2 btn btn-sm btn-info">Show</a>
            <form action="/pertanyaan/{{ $item->id }}" method="POST" style="display: inline;">
              @csrf
              @method("DELETE")
              <button class="btn btn-danger btn-sm" onclick="return confirm('Ingin menghapus pertanyaan dengan ID {{$item->id}} ?')"><i class="far fa-trash-alt"></i> Delete</button>
          </form></td>
          </tr>
              
          @endforeach
        </tbody>
      </table>
      <a href="/" class="mr-2 btn btn-primary">Back</a>

  </div>
    
@endsection