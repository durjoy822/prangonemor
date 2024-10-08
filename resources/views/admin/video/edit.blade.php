@extends('admin.layout.master')
@section('title') Drama Edit @endsection
@section('body')
<style>
    .image_preview{
        width: 70px;
        border-radius: 10px;
        margin-top: 5px;
    }
</style>
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="header-title">Edit team form</h4>
                    <p class="text-muted font-14">{{Session::get('message')}}</p>
                    <form class="form-horizontal" action="{{route('videos.update',$video->id)}}" method="POST" enctype="multipart/form-data">
                        @csrf
                       @method('put')
                        <div class="row ">
                            <label for="inputEmail31" class="col-md-3 col-form-label">Name</label>
                            <div class="col-md-9">
                                <input type="text" class="form-control" value="{{ $video->name }}" name="name" id="inputEmail31" placeholder="Enter name"/>
                                <div class="text-danger mt-1"> @error('name'){{$message}} @enderror</div>
                            </div>
                        </div>

                        <div class="row ">
                            <label for="inputEmail31" class="col-md-3 col-form-label">Link</label>
                            <div class="col-md-9">
                                <input type="text" class="form-control" value="{{ $video->link }}" name="link" id="inputEmail31" placeholder="Enter link"/>
                                <div class="text-danger mt-1"> @error('name'){{$message}} @enderror</div>
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
