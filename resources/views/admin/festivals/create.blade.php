@extends('admin.layout.master')
@section('title') Drama Create @endsection
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
                    <h4 class="header-title">Add Festival form</h4>
                    <p class="text-muted font-14">{{Session::get('message')}}</p>
                    <form class="form-horizontal" action="{{route('festivals.store')}}" method="POST" enctype="multipart/form-data">
                        @csrf 
                        <div class="row ">
                            <label for="inputEmail31" class="col-md-3 col-form-label">Title</label>
                            <div class="col-md-9">
                                <input type="text" class="form-control" name="title" id="inputEmail31" placeholder="Enter name"/>
                                <div class="text-danger mt-1"> @error('title'){{$message}} @enderror</div>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="title_image" class="col-3 col-form-label mt-2">Title Image</label>
                            <div class="col-9 mt-2">
                                <input type="file" class="form-control" name="title_image" id="title_image"/>
                                <div class="text-danger mt-1"> @error('title_image') {{$message}}@enderror</div>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="feature_image" class="col-3 col-form-label mt-2">Feature Image</label>
                            <div class="col-9 mt-2">
                                <input type="file" class="form-control" name="feature_image" id="feature_image"/>
                                <div class="text-danger mt-1"> @error('feature_image') {{$message}}@enderror</div>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="video_image" class="col-3 col-form-label mt-2">Video Background Image</label>
                            <div class="col-9 mt-2">
                                <input type="file" class="form-control" name="video_image" id="video_image"/> 
                                <div class="text-danger mt-1"> @error('video_image') {{$message}}@enderror </div>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="inputEmail3" class="col-3 col-form-label mt-2">Video link</label>
                            <div class="col-9 mt-2">
                                <input type="text" class="form-control" name="video_link" id="inputEmail3" placeholder="Video link"/>
                                <div class="text-danger mt-1"> @error('video_link') {{$message}}@enderror</div>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="inputEmail3" class="col-3 col-form-label">Description One</label>
                            <div class="col-9">
                                <textarea  class="form-control " id="summernote" name="description_one"  placeholder="Description One"> </textarea>
                                <div class="text-danger mt-1"> @error('description_one') {{$message}}@enderror</div>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="inputEmail3" class="col-3 col-form-label">Description Two</label>
                            <div class="col-9"> 
                                <textarea  class="form-control " id="summernote2" name="description_two"  placeholder="Description Two">  </textarea>
                               
                                <div class="text-danger mt-1"> @error('description_two') {{$message}}@enderror</div>
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

