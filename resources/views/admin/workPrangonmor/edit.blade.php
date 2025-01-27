@extends('admin.layout.master')
@section('title') Work Prangonmore Edit @endsection
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
                    <h4 class="header-title">Edit Work Prangonemor</h4>
                    <p class="text-muted font-14">{{Session::get('message')}}</p>
                    <form class="form-horizontal" action="{{route('workPrangonmors.update',$workPrangonmor->id)}}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('put')
                        <div class="row mb-3">
                            <label for="inputEmail31" class="col-md-3 col-form-label">Title</label>
                            <div class="col-md-9">
                                <input type="text" name="title" class="form-control" value="{{$workPrangonmor->title}}" placeholder="Enter title" />
                               <div class="text-danger mt-1"> @error('title'){{$message}} @enderror</div>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="inputEmail3" class="col-md-3 col-form-label mt-3">Image</label>
                            <div class=" col-md-6 mt-1">
                                <input type="file" class="form-control mt-3 "  name="image" id="imageInput" onchange="previewImage()"/>
                                <div class="text-danger mt-1"> @error('image'){{$message}} @enderror</div>
                            </div>
                            <div class="col-md-3 text-center ">
                                <div class="image_preview  " ><img class="image_preview"  src="{{asset($workPrangonmor->image)}}"></div>

                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="inputEmail31" class="col-md-3 col-form-label">Date</label>
                            <div class="col-md-9">
                                <input type="date" name="date" class="form-control" value="{{$workPrangonmor->date}}" />
                               <div class="text-danger mt-1"> @error('date'){{$message}} @enderror</div>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="inputEmail31" class="col-md-3 col-form-label">Description</label>
                            <div class="col-md-9">
                                <textarea id="editor" name="description" class="form-control ck" placeholder="Enter about Prangonemor">{!!$workPrangonmor->description!!}</textarea>
                               <div class="text-danger mt-1"> @error('description'){{$message}} @enderror</div>
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

