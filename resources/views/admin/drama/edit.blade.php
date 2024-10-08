@extends('admin.layout.master')
@section('title') Drama Edit @endsection
@section('body')
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="header-title">Add Role form</h4>
                    <p class="text-muted font-14">{{Session::get('message')}}</p>
                    <form class="form-horizontal" action="{{route('dramas.update',$drama->id)}}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PUT') 
                        <div class="row mb-3">
                            <label for="inputEmail3" class="col-3 col-form-label">Title</label>
                            <div class="col-9">
                                <input type="text" class="form-control" name="title" id="inputEmail3" value="{{$drama->title}}" placeholder="Drama Title"/>
                                <div class="text-danger mt-1"> @error('title') {{$message}}@enderror</div>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="short_biography" class="col-3 col-form-label">Short Biography</label>
                            <div class="col-9">

                                <textarea class="form-control" name="short_biography" id="short_biography" placeholder="Short Biography">{{$drama->short_biography}}</textarea>
                                <div class="text-danger mt-1"> @error('short_biography') {{$message}}@enderror</div>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="director" class="col-3 col-form-label">Director</label>
                            <div class="col-9">
                                <input type="text" class="form-control"  name="director" id="director" value="{{$drama->director}}" placeholder="Drama director"/> 
                                <div class="text-danger mt-1"> @error('director') {{$message}}@enderror</div>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="writer" class="col-3 col-form-label">Writer</label>
                            <div class="col-9"> 
                                <input type="text" class="form-control" name="writer" id="writer"  value="{{$drama->writer}}" placeholder="Writer"/>  
                                <div class="text-danger mt-1"> @error('writer') {{$message}}@enderror</div>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="producer" class="col-3 col-form-label">Producer</label>
                            <div class="col-9">
                                <input type="text" class="form-control" name="producer" id="producer"  value="{{$drama->producer}}" placeholder="Producer"/>  
                                <div class="text-danger mt-1"> @error('writer') {{$message}}@enderror</div>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="music" class="col-3 col-form-label">Music</label>
                            <div class="col-9">
                                <input type="text" class="form-control" name="music" id="music"  value="{{$drama->music}}" placeholder="music"/>  
                                <div class="text-danger mt-1"> @error('music') {{$message}}@enderror</div> 
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="makeup" class="col-3 col-form-label">Makeup</label>
                            <div class="col-9">
                                <input type="text" class="form-control" name="makeup" id="makeup" placeholder="Makeup"  value="{{$drama->makeup}}"/>  
                                <div class="text-danger mt-1"> @error('makeup') {{$message}}@enderror</div>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="sound" class="col-3 col-form-label">Sound</label>
                            <div class="col-9">
                                <input type="text" class="form-control" name="sound" id="sound" placeholder="Sound" value="{{$drama->sound}}"/> 
                                <div class="text-danger mt-1"> @error('sound') {{$message}}@enderror</div>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="stage_designer" class="col-3 col-form-label">Stage Designer</label>
                            <div class="col-9">
                                <input type="text" class="form-control"name="stage_designer" id="stage_designer" placeholder="Stage Designer" value="{{$drama->stage_designer}}"/>  
                                <div class="text-danger mt-1"> @error('stage_designer') {{$message}}@enderror</div>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="production_start_date" class="col-3 col-form-label mt-2">Production Start Date</label>
                            <div class="col-9 mt-2">
                                <input type="date" class="form-control" name="production_start_date" id="production_start_date" value="{{$drama->production_start_date}}"/>
                                <div class="text-danger mt-1"> @error('production_start_date') {{$message}}@enderror</div>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="release_date" class="col-3 col-form-label mt-2">Release Date</label>
                            <div class="col-9 mt-2">
                                <input type="date" class="form-control" name="release_date" id="release_date" value="{{$drama->realease_date}}"/>
                                <div class="text-danger mt-1"> @error('release_date') {{$message}}@enderror</div>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="title_image" class="col-3 col-form-label mt-2">Title Image</label>
                            <div class="col-9 mt-2">
                                <input type="file" class="form-control" name="title_image" id="title_image" value="{{$drama->title_image}}"/>
                                 
                                <img class="title_image" style="width:80px" src="{{ asset($drama->title_image)}}">
                                <div class="text-danger mt-1"> @error('title_image') {{$message}}@enderror</div>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="feature_image" class="col-3 col-form-label mt-2">Feature Image</label>
                            <div class="col-9 mt-2">
                                <input type="file" class="form-control" name="feature_image" id="feature_image"  value="{{$drama->feature_image}}"/>
                                <img class="feature_image" style="width:80px" src="{{ asset($drama->feature_image)}}">
                                <div class="text-danger mt-1"> @error('feature_image') {{$message}}@enderror</div>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="slider_image" class="col-3 col-form-label mt-2">Slider Image</label>
                            <div class="col-9 mt-2">
                                <input type="file" class="form-control" name="slider_image" id="slider_image" value="{{$drama->slider_image}}"/>
                                <img class="slider_image" style="width:80px" src="{{ asset($drama->slider_image)}}">
                                <div class="text-danger mt-1"> @error('slider_image') {{$message}}@enderror</div>
                            </div>
                        </div>
                        
                        <div class="row mb-3">
                            <label for="inputEmail3" class="col-3 col-form-label mt-2">Video link</label>
                            <div class="col-9 mt-2">
                                <input type="text" class="form-control" name="video_link" id="inputEmail3" value="{{$drama->video_link}}" placeholder="Video link"/>
                                <div class="text-danger mt-1"> @error('video_link') {{$message}}@enderror</div>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="video_background_image" class="col-3 col-form-label mt-2">Video Background Image</label>
                            <div class="col-9 mt-2">
                                <input type="file" class="form-control" name="video_background_image" id="video_background_image" value="{{$drama->video_background_image}}"/> 
                                <img class="video_background_image" style="width:80px" src="{{ asset($drama->video_background_image)}}">
                                <div class="text-danger mt-1"> @error('video_background_image') {{$message}}@enderror </div>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="inputEmail3" class="col-3 col-form-label">Description One</label>
                            <div class="col-9"> 
                                <textarea  class="form-control " id="summernote" name="description_one"  placeholder="Description One">  {!! $drama->description_one !!}</textarea>
                               
                                <div class="text-danger mt-1"> @error('description_one') {{$message}}@enderror</div>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="inputEmail3" class="col-3 col-form-label">Description Two</label>
                            <div class="col-9"> 
                                <textarea  class="form-control " id="summernote2" name="description_two"  placeholder="Description One">  {!! $drama->description_two !!}</textarea>
                               
                                <div class="text-danger mt-1"> @error('description_two') {{$message}}@enderror</div>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label class="col-md-3">Ticket Price</label>
                            <div class="col-md-9">
                                <table class="table table-bordered">
                                    <thead>
                                    <tr>
                                        <th>Ticket Label</th>
                                        <th>Price</th>
                                        <th>Action</th>
                                    </tr>
                                    </thead>
                                    <tbody id="ticketPriceTBody">
                                        @foreach ($drama->dramaPrice as $dramaPrice) 
                                            <tr>
                                                <td><input type="text" class="form-control" name="ticket[{{$dramaPrice->id}}][label]" value="{{$dramaPrice->label}}" required/></td>
                                                <td><input type="number" class="form-control" name="ticket[{{$dramaPrice->id}}][price]" value="{{$dramaPrice->price}}" min="1" required/></td>
                                                <td><input type="button" class="btn btn-success btn-sm rounded-0" id="ticketPriceAddBtn" value="+"/></td>
                                                <td><input type="button" class="btn btn-danger btn-sm rounded-0 remove-ticket-price-btn" value="-"></td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div class="row mb-3 justify-content-end">
                            <label class="col-3 col-form-label">Drama Status</label>
                            <div class="col-9">
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input"  type="radio" name="drama_status" id="inlineRadio1" value="1" @if ($drama->status == 1) checked  @endif>
                                    <label class="form-check-label" for="inlineRadio1">Upcoming Show</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio"  name="drama_status" id="inlineRadio2" value="2" @if ($drama->status == 2) checked  @endif>
                                    <label class="form-check-label" for="inlineRadio2">Upcoming Production</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio"  name="drama_status" id="inlineRadio3" value="3" @if ($drama->status == 3) checked  @endif>
                                    <label class="form-check-label" for="inlineRadio3">Now Showing</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio"  name="drama_status" id="inlineRadio4" value="4" @if ($drama->status == 4) checked  @endif>
                                    <label class="form-check-label" for="inlineRadio4">Complete Show</label>
                                </div>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="inputEmail3" class="col-3 col-form-label">Status</label>
                            <div class="col-9 mt-1">
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" checked type="radio"  name="status" id="inlineRadio33" value="1">
                                    <label class="form-check-label" for="inlineRadio33">Published</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input"  type="radio"  name="status" id="inlineRadio44" value="0">
                                    <label class="form-check-label" for="inlineRadio44">Unpublished</label>
                                </div>
                            </div>
                        </div>
                        <div class="justify-content-end row">
                            <div class="col-9">
                                <button type="submit" class="btn btn-info">Update</button>
                            </div>
                        </div>
                    </form>
                </div>  <!-- end card-body -->
            </div>  <!-- end card -->
        </div>  <!-- end col -->
    </div>
@endsection
