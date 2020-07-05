@extends('master')

@section('table')
<div>
  <div class="ml-3 mt-4 mr-3">
    <div class="card card-primary">
        <div class="card-header">
          <h3 class="card-title">ANSWER SECTION</h3>
        </div>
        <!-- /.card-header -->
        <!-- form start -->
        <form role="form" action="/jawaban/{{pertanyaan_id}}" method="POST">
            @csrf
          <div class="card-body">
            <div class="form-group">
              <label for="isi">Jawaban</label>
              <input 
              type="text" 
              class="form-control" 
              id="isi" 
              name="isi" 
              placeholder="Masukkan Isi">
            </div>    
          </div>
          <!-- /.card-body -->
          <div class="card-footer">
            <button type="submit" class="btn btn-primary">Submit</button>
          </div>
        </form>
    </div>
  </div>
</div>

@endsection