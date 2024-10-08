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
                <h4 class="header-title">Manage Workshop table</h4>
                <p class="text-muted font-14 text-danger">{{ Session::get('success') }}</p>
                <div class="table-responsive">
                    <table id="datatable-buttons" class="table table-striped table-hover">
                        <tr>
                            <th>Sl</th>
                            <th>Title</th>
                            <th>Title Image</th>
                            <th>Feature Image</th>
                            <th>Video Background Image</th>
                            <th>Video Link</th> 
                            <th>Action</th>
                        </tr>
{{--                        @if($teams->count())--}}
                        @foreach($workshops as $workshop)
                        <tr>
                            <td>{{ $loop->iteration}}</td>
                            <td>{{ $workshop->title }}</td>
                            <td>
                                <img style="width:80px" src="{{ asset($workshop->title_image) }}">
                            </td>
                            <td>
                                <img style="width:80px" src="{{ asset($workshop->feature_image) }}">
                            </td>
                            <td>
                                <img style="width:80px" src="{{ asset($workshop->video_image) }}">
                            </td>
                            <td>{{ $workshop->video_link }}</td>
                            <td>
                                <a href="{{ route('workshops.edit', $workshop->id) }}" class="btn btn-success btn-sm"
                                    title="Edit">
                                    <i class="ri-edit-box-fill"></i>
                                </a>
                                <form action="{{ route('workshops.destroy', $workshop->id) }}" method="post"
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

