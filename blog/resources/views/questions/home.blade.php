@extends('master')

@section('table')
<div class="card">
  <div class="card-header">
    <h3 class="card-title">Ask me.....</h3>
  </div>
  <div class="card-body">
    <a href="/pertanyaan" class="btn btn-default btn-block">Question List</a>
    <a href="/jawaban" class="btn btn-default btn-block btn-flat">Answer List</a>
    <a href="/pertanyaan/create" class="btn btn-default btn-block btn-sm">Create New Question</a>
  </div>
</div>
    
@endsection