@extends('layouts.layout')

@section('title','Subjects')

@section('content')

  <!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Add Subject</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          ...
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          <button type="button" class="btn btn-primary">Save changes</button>
        </div>
      </div>
    </div>
</div>

<table>
    <thead>
      <tr>
        <th colspan="2">Current subjects</th>
        <th><a id="add-button" class="btn btn-secondary" href="/register" role="button" data-toggle="modal" data-target="#exampleModal"><i class="fas fa-book"></i> Add Subject</a></th>
      </tr>
      <tr>
        <th>#</th>
        <th colspan="2">Subject name</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>1</td>
        <td><a href="/">Algorithms and programming II</a></td>
        <td>
          <a href=""><i class="fas fa-edit"></i></a>
          <a href=""><i class="fas fa-trash-alt"></i></a>
        </td>
      </tr>
    </tbody>
  </table>
    
@endsection
