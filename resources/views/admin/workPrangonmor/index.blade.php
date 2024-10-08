@extends('admin.layout.master')
@section('title') Work Prangonmore @endsection
@section('body')
<style>
    .about_img{
        border-radius: 50%;
        width: 70px;
    }
</style>
<div class="row">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-body">
                <h4 class="header-title">Work Prangonemor </h4>
                <p class="text-muted font-14 text-danger">{{ Session::get('success') }}</p>
                <div class="table-responsive">
                    <table class="table table-striped table-hover">
                        <tr>
                            <th>Id</th>
                            <th>Title</th>
                            <th>Image</th>
                            <th>Description</th>
                            <th>Date</th>
                            <th>Action</th>
                        </tr> 
                        @foreach($workPrangonmors as $workPrangonmor)
                        <tr>
                            <td>{{$loop->iteration}}</td>
                            <td>
                                {{$workPrangonmor->title}}
                            </td>
                            <td>
                               <img src="{{$workPrangonmor->image}}"  width="50" alt="">
                            </td>
                            <td>
                                {!! $workPrangonmor->description !!}
                            </td>
                            <td>
                                {{ $workPrangonmor->date}}
                            </td>
                            <td>
                                <a href="{{ route('workPrangonmors.edit', $workPrangonmor->id) }}" class="btn btn-success btn-sm"
                                    title="Edit">
                                    <i class="ri-edit-box-fill"></i>
                                </a>
                                <form action="{{ route('workPrangonmors.destroy', $workPrangonmor->id) }}" method="post"
                                    class="d-inline">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger btn-sm d-inline" title="Delete"
                                        onclick="return confirm('Are you sure to delete this..');">
                                        <i class="ri-chat-delete-fill"></i>
                                    </button>
                                </form>
                            </td>
                        </tr>
                        @endforeach 
                        
                    </table>
                </div>
            </div> <!-- end card-body -->
        </div> <!-- end card -->
    </div> <!-- end col -->
</div>






@endsection

