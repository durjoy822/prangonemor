@extends('admin.layout.master')
@section('title') Booking Edit @endsection
@section('body')
<style>
    .image_preview{
        width: 70px;
         border-radius: 10px;
        margin-top: 5px;
    }
    .ck{
        height: 200px;
    }
</style>
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="header-title">Edit Booking</h4>
                    <p class="text-muted font-14">{{Session::get('message')}}</p>
                    <form class="form-horizontal" action="{{route('bookings-update',$booking->id)}}" method="POST" enctype="multipart/form-data">
                        @csrf 
                        <div class="row mb-3">
                            <label for="inputEmail3" class="col-md-3 col-form-label mt-3">Name</label>
                            <div class=" col-md-6 mt-1">
                                <input type="text" class="form-control mt-3 "  name="name" value="{{$booking->name}}" id="imageInput" />
                                <div class="text-danger mt-1"> @error('name'){{$message}} @enderror</div>
                            </div>
                            
                        </div>
                        <div class="row mb-3">
                            <label for="inputEmail31" class="col-md-3 col-form-label">Mobile</label>
                            <div class="col-md-9">
                                <input type="text" class="form-control mt-3 "  name="phone" value="{{$booking->phone}}" id="imageInput" />
                               <div class="text-danger mt-1"> @error('phone'){{$message}} @enderror</div>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="inputEmail31" class="col-md-3 col-form-label">Email</label>
                            <div class="col-md-9">
                                <input type="text" class="form-control mt-3 "  name="email" value="{{$booking->email}}" id="imageInput" />
                               <div class="text-danger mt-1"> @error('email'){{$message}} @enderror</div>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="inputEmail31" class="col-md-3 col-form-label">Price</label>
                            <div class="col-md-9">
                               <select name="price_id" class="form-control mt-3">
                                    @foreach ($dramaPrice as $price ) 
                                        <option value="{{$price->id}}" @if ($booking->price_id == $price->id) {{ 'selected' }} @endif>{{$price->label}}->{{$price->price}}</option>
                                    @endforeach
                               </select>
                               <div class="text-danger mt-1"> @error('price'){{$message}} @enderror</div>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="inputEmail31" class="col-md-3 col-form-label">Status</label>
                            <div class="col-md-9">
                               <select name="status" class="form-control mt-3"> 
                                    <option value="1"  @if ($booking->status == 1) {{ 'selected' }} @endif >Pending</option> 
                                    <option value="2" @if ($booking->status == 2) {{ 'selected' }} @endif>Approved</option> 
                                    <option value="3" @if ($booking->status == 3) {{ 'selected' }} @endif>Canceld</option> 
                               </select>
                               <div class="text-danger mt-1"> @error('email'){{$message}} @enderror</div>
                            </div>
                        </div>
                        <div class="justify-content-end row mt-1">
                            <div class="col-md-9">
                                <button type="submit" class="btn btn-info">Save</button>
                            </div>
                        </div>
                    </form>
                </div>  <!-- end card-body -->
            </div>  <!-- end card -->
        </div>  <!-- end col -->
    </div>


    <script>
        function previewImage() {
            var input = document.getElementById('imageInput');
            var preview = document.querySelector('.image_preview');

            preview.innerHTML = '';

            if (input.files && input.files[0]) {
                var reader = new FileReader();

                reader.onload = function (e) {
                    var image = document.createElement('img');
                    image.src = e.target.result;
                    image.classList.add('img-fluid');
                    preview.appendChild(image);
                };

                reader.readAsDataURL(input.files[0]);
            }
        }
    </script>
@endsection

