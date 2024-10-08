@extends('admin.layout.master')
@section('title') Gallery Manage @endsection
@section('body')
<style>
    .member_img{
        border-radius: 50%;
        width: 70px;
    }
</style>
<div class="row">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-body">
                <h4 class="header-title">Manage team table</h4>
                <p class="text-muted font-14 text-danger">{{ Session::get('success') }}</p>
                <div class="table-responsive">
                    <table id="datatable-buttons" class="table table-striped table-hover">
                        <tr>
                            <th>Id</th>
                            <th>Name</th>
                            <th>video</th>
                            <th>Action</th>
                        </tr>
{{--                        @if($teams->count())--}}
                        @foreach($videos as $video)
                        <tr>
                            <td>{{ $loop->iteration}}</td>
                            <td>{{ $video->name }}</td>
                            <td>{{ $video->link }}</td>
                            <td>
                                <a href="{{ route('videos.edit', $video->id) }}" class="btn btn-success btn-sm"
                                    title="Edit">
                                    <i class="ri-edit-box-fill"></i>
                                </a>
                                <form action="{{ route('videos.destroy', $video->id) }}" method="post"
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
                        <tr>
                            <td colspan="8" class="text-center">No data available in the table</td>
                        </tr>
{{--                        @endif--}}
                    </table>
                   <div>
{{--                       {{ $teams->links() }}--}}
                   </div>
                </div>
            </div> <!-- end card-body -->
        </div> <!-- end card -->
    </div> <!-- end col -->
</div>






@endsection

