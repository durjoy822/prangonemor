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
                    <form class="form-horizontal" action="{{route('teams.update',$team->id)}}" method="POST" enctype="multipart/form-data">
                        @csrf
                       @method('put')
                        <div class="row mb-3">
                            <label for="inputEmail3" class="col-md-3 col-form-label mt-3">Image</label>
                            <div class=" col-md-6 mt-1">
                                <input type="file" class="form-control mt-3" name="image" id="imageInput" onchange="previewImage()"/>
                                <img src="{{ asset($team->image) }}" style="height: 50px; width: 50px" alt="img">
                                <div class="text-danger mt-1"> @error('image'){{$message}} @enderror</div>
                            </div>
                            <div class="col-md-3 text-center ">
                                <div class="image_preview " ></div>

                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="inputEmail31" class="col-md-3 col-form-label">Name</label>
                            <div class="col-md-9">
                                <input type="text" class="form-control" value="{{ $team->name }}" name="name" id="inputEmail31" placeholder="Enter name"/>
                                <div class="text-danger mt-1"> @error('name'){{$message}} @enderror</div>
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="inputEmail31" class="col-md-3 col-form-label">Designation</label>
                            <div class="col-md-9">
                                <input type="text" class="form-control" value="{{ $team->name }}" name="designation" id="inputEmail31" placeholder="Enter name"/>
                                <div class="text-danger mt-1"> @error('designation'){{$message}} @enderror</div>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="inputEmail31" class="col-md-3 col-form-label">Email</label>
                            <div class="col-md-9">
                                <input type="email" class="form-control" value="{{ $team->email }}" name="email" id="inputEmail31" placeholder="Enter name"/>
                                <div class="text-danger mt-1"> @error('email'){{$message}} @enderror</div>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="inputEmail31" class="col-md-3 col-form-label">Phone</label>
                            <div class="col-md-9">
                                <input type="text" class="form-control" value="{{ $team->phone }}" name="phone" id="inputEmail31" placeholder="Enter name"/>
                                <div class="text-danger mt-1"> @error('phone'){{$message}} @enderror</div>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="inputEmail31" class="col-md-3 col-form-label">Personal info</label>
                            <div class="col-md-9">
                                <textarea class="form-control" name="personal_info">{{ $team->personal_info }}</textarea>
                                <div class="text-danger mt-1"> @error('personal_info'){{$message}} @enderror</div>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="inputEmail31" class="col-md-3 col-form-label">Experience</label>
                            <div class="col-md-9">
                                <input type="text" class="form-control" value="{{ $team->experience }}" name="experience" id="inputEmail31" placeholder="Enter name"/>
                                <div class="text-danger mt-1"> @error('experience'){{$message}} @enderror</div>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="inputEmail31" class="col-md-3 col-form-label">Short Description</label>
                            <div class="col-md-9">
                                <textarea class="form-control" name="short_description">{{ $team->short_description }}</textarea>
                                <div class="text-danger mt-1"> @error('short_description'){{$message}} @enderror</div>
                            </div>
                        </div>


                        <div class="row mb-3">
                            <label for="inputEmail31" class="col-md-3 col-form-label">Location </label>
                            <div class="col-md-9">
                                <input type="text" class="form-control" name="location" value="{{ $team->location }}" id="inputEmail31" placeholder="Enter name"/>
                                <div class="text-danger mt-1"> @error('location'){{$message}} @enderror</div>
                            </div>
                        </div>
                        <div class="row mb-3 justify-content-end">
                            <label for="inputEmail33" class="col-md-3 col-form-label pt-0">Member Type</label>
                            <div class="col-md-9">
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" {{ $team->member_type == 1 ? 'checked' : ' '}} name="member_type" id="inlineRadio1" value="1">
                                    <label class="form-check-label" for="inlineRadio1">Founder</label>
                                </div>

                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="member_type" {{ $team->member_type == 2 ? 'checked' : ' '}} id="inlineRadio2" value="2">
                                    <label class="form-check-label" for="inlineRadio2">General Member</label>
                                </div>

                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio"  name="member_type" {{ $team->member_type == 3 ? 'checked' : ' '}} id="inlineRadio3" value="3">
                                    <label class="form-check-label" for="inlineRadio3">Associate Member</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio"  name="member_type" {{ $team->member_type == 4 ? 'checked' : ' '}} id="inlineRadio3" value="4">
                                    <label class="form-check-label" for="inlineRadio3">Permanent  Member</label>
                                </div>
                                <div class="text-danger mt-1"> @error('member_type'){{$message}} @enderror</div>

                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="inputEmail32" class="col-md-3 col-form-label">Twitter link</label>
                            <div class="col-md-9">
                                <input type="text" class="form-control" value="{{ $team->twitter }}" name="twitter" id="inputEmail32" placeholder="Twitter link"/>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="inputEmail33" class="col-md-3 col-form-label">Facebook Link</label>
                            <div class="col-md-9">
                                <input type="text" class="form-control" value="{{ $team->facebook }}" name="facebook" id="inputEmail33" placeholder="Facebook link"/>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="inputEmail33" class="col-md-3 col-form-label">Website Link</label>
                            <div class="col-md-9">
                                <input type="text" class="form-control" value="{{ $team->website }}" name="website" id="inputEmail33" placeholder="website link"/>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="inputEmail33" class="col-md-3 col-form-label">Instagram Link</label>
                            <div class="col-md-9">
                                <input type="text" class="form-control" value="{{ $team->instagram }}" name="instagram" id="inputEmail33" placeholder="Instagram link"/>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="inputEmail33" class="col-md-3 col-form-label">Linkdin Link</label>
                            <div class="col-md-9">
                                <input type="text" class="form-control" value="{{ $team->linkdin }}" name="linkdin" id="inputEmail33" placeholder="Instagram link"/>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="inputEmail33" class="col-md-3 col-form-label">Youtube Link</label>
                            <div class="col-md-9">
                                <input type="text" class="form-control" value="{{ $team->youtube }}" name="youtube" id="inputEmail33" placeholder="Instagram link"/>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="inputEmail33" class="col-md-3 col-form-label">Long Description</label>
                            <div class="col-md-9"> 
                                <textarea class="form-control snow-editor" style="height: 300px" name="long_description"  placeholder="Description">{!! $team->long_description !!}</textarea>
                                <div class="text-danger mt-1"> @error('long_description') {{$message}}@enderror</div>
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
