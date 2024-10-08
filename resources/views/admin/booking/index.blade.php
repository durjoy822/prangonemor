@extends('admin.layout.master')
@section('title') Booking Manage @endsection
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
                <h4 class="header-title">Manage Booking</h4>
                <p class="text-muted font-14 text-danger">{{ Session::get('success') }}</p>
                <div class="table-responsive">
                    <table class="table table-striped table-hover">
                        <tr>
                            <th>Sl</th>
                            <th>Drama Name</th>
                            <th>Name</th>
                            <th>Mobile</th>
                            <th>Email</th>
                            <th>Price</th>
                            <th>Status</th>
                            <th>Action</th>
                        </tr> 
                        @foreach($bookings as $booking)
                        <tr>
                            <td>{{$loop->iteration}} </td>
                            <td>
                                {{$booking->drama->title}}
                            </td>
                            <td>
                                {{$booking->name}}
                            </td>
                            </td>
                            <td>
                                {{$booking->phone}}
                            </td>
                            </td>
                            <td>
                                {{$booking->email}}
                            </td>
                            </td>
                            <td> 
                                {{$booking->dramaPrice->price}}
                            </td>
                            <td> 
                                @if ($booking->status == 1)
                                    Pending
                                @elseif ($booking->status == 2)
                                    Approved
                                @else
                                    Cancel
                                    
                                @endif

                            </td>
                            <td> 
                                <a href="{{route('bookings-edit',$booking->id)}}" class="btn btn-success btn-sm"
                                    title="Edit">
                                    <i class="ri-edit-box-fill"></i>
                                </a>
                                {{-- <form action="{{ route('abouts.destroy', $about->id) }}" method="post"
                                    class="d-inline">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger btn-sm d-inline" title="Delete"
                                        onclick="return confirm('Are you sure to delete this..');">
                                        <i class="ri-chat-delete-fill"></i>
                                    </button>
                                </form> --}}
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

