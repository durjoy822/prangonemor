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
                    <form class="form-horizontal" action="{{route('teams-conditions.update',$teamsCondition->id)}}" method="POST" enctype="multipart/form-data">
                        @csrf
                       @method('put')
                        <div class="row ">
                            <label for="inputEmail31" class="col-md-3 col-form-label">Name</label>
                            <div class="col-md-9">
                                <input type="text" class="form-control" value="{{ $teamsCondition->title }}" name="title" id="inputEmail31" placeholder="Enter name"/>
                                <div class="text-danger mt-1"> @error('title'){{$message}} @enderror</div>
                            </div>
                        </div>
                        <div class="row ">
                            <label for="inputEmail31" class="col-md-3 col-form-label">Description</label>
                            <div class="col-md-9">
                                <textarea class="form-control" name="description">{{ $teamsCondition->description }}</textarea>
                                <div class="text-danger mt-1"> @error('description'){{$message}} @enderror</div>
                            </div>
                        </div>
                        <div class="row mb-3 justify-content-end">
                            <label for="inputEmail33" class="col-md-3 col-form-label pt-0">Type</label>
                            <div class="col-md-9">

                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="type" id="inlineRadio2" value="2">
                                    <label class="form-check-label" for="inlineRadio2">General member add procedure</label>
                                </div>

                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio"  name="type" id="inlineRadio3" value="3">
                                    <label class="form-check-label" for="inlineRadio3">Associate member  add procedure</label>
                                </div>
                                <div class="text-danger mt-1"> @error('type'){{$message}} @enderror</div>

                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="inputEmail3" class="col-md-3 col-form-label mt-3">Image</label>
                            <div class=" col-md-6 mt-1">
                                <input type="file" class="form-control mt-3 " name="image" id="imageInput" onchange="previewImage()"/>
                                <img src="{{ asset($teamsCondition->image) }}" alt="img" style="width: 50px; height: 50px">
                                <div class="text-danger mt-1"> @error('image'){{$message}} @enderror</div>
                            </div>
                            <div class="col-md-3 text-center ">
                                <div class="image_preview " ></div>
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
