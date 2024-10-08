@extends('admin.layout.master')

@section('body')

    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="header-title">Drama Details table</h4>
                    <p class="text-muted font-14">{{Session::get('message')}}</p>
                        <table class="table table-striped table-hover"> 
                            <tr>
                                <td>Title</td>
                                <td>{{$drama->title}}</td>
                            </tr> 
                            <tr>
                                <td>Short Biography</td>
                                <td>{{$drama->short_biography}}</td>
                            </tr> 
                            <tr>
                                <td>Director</td>
                                <td>{{$drama->director}}</td>
                            </tr> 
                            <tr>
                                <td>Writer</td>
                                <td>{{$drama->writer}}</td>
                            </tr> 
                            <tr>
                                <td>Producer</td>
                                <td>{{$drama->producer}}</td>
                            </tr> 
                            <tr>
                                <td>Music</td>
                                <td>{{$drama->music}}</td>
                            </tr>
                            <tr>
                                <td>Makeup</td>
                                <td>{{$drama->makeup}}</td>
                            </tr>
                            <tr>
                                <td>Sound</td>
                                <td>{{$drama->sound}}</td>
                            </tr>
                            <tr>
                                <td>Stage Designer</td>
                                <td>{{$drama->stage_designer}}</td>
                            </tr>
                            <tr>
                                <td>Production Start Date</td>
                                <td>{{$drama->production_start_date}}</td>
                            </tr>
                            <tr>
                                <td>Release Date</td>
                                <td>{{$drama->release_date}}</td>
                            </tr>
                            <tr>
                                <td>Title Image</td>
                                <td><img src="{{asset($drama->title_image)}}" style="width:100px;height:100px" alt=""></td>
                            </tr>
                            <tr>
                                <td>Feature_image</td>
                                <td><img src="{{asset($drama->feature_image)}}" style="width:100px;height:100px" alt=""></td>
                            </tr>
                            <tr>
                                <td>Slider Image</td>
                                <td><img src="{{asset($drama->slider_image)}}" style="width:100px;height:100px" alt=""></td>
                            </tr>
                            <tr>
                                <td>Video Background Image</td>
                                <td><img src="{{asset($drama->video_background_image)}}" style="width:100px;height100px" alt=""></td>
                            </tr>
                            <tr>
                                <td>Video Link </td>
                                <td>{{$drama->video_link}}</td>
                            </tr>
                            
                            <tr>
                                <td>Description One</td>
                                <td>
                                    <textarea class="form-control "  style="background: transparent" rows="5">{!! strip_tags($drama->description_one) !!} </textarea>
                                </td>
                            </tr>
                            <tr>
                                <td>Description Two</td>
                                <td>
                                    <textarea class="form-control " style="background: transparent" rows="5">{!! strip_tags($drama->description_two) !!} </textarea>
                                </td>
                            </tr> 
                            <tr>
                                <td>Drama Price</td>
                                <td>
                                    <table class="table table-bordered table-sm" style="width:200px">
                                        <thead>
                                        <tr>
                                            <th>Ticket Label</th>
                                            <th>Price</th> 
                                        </tr>
                                        </thead>
                                        <tbody id="ticketPriceTBody">
                                            @foreach ($drama->dramaPrice as $dramaPrice) 
                                                <tr>
                                                    <td>
                                                        {{$dramaPrice->label}} 
                                                    </td>
                                                    <td> 
                                                        {{$dramaPrice->price}}
                                                    </td>
                                                   
                                                </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </td>
                            </tr>
                            <tr>
                                <td>Drama Status</td>
                                <td>
                                    @if($drama->drama_status=='1')
                                    <p  class=" text-primary  " title="Edit">
                                        <b>Upcoming Show</b>
                                    </p>
                                    @elseif($drama->drama_status=='2')
                                    <p  class=" text-primary  " title="Edit">
                                        <b>Upcoming Production</b>
                                    </p> 
                                    @elseif($drama->drama_status=='3')
                                     <p  class=" text-primary  " title="Edit">
                                        <b>Now showing</b>
                                    </p>  
                                    @elseif($drama->drama_status=='4')
                                     <p  class=" text-primary  " title="Edit">
                                        <b>Complete Show</b>
                                    </p>  
                                    @endif
                                </td>
                                

                            </tr>
                            <tr>
                                <td>Status</td>
                                <td>   {{$drama->drama_status=='1'?'Published':'Unpublished'}}</td>
                            </tr>


                        </table>
                </div>  <!-- end card-body -->
            </div>  <!-- end card -->
        </div>  <!-- end col -->
    </div>
    <!-----drama details ----->
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="header-title">Drama Internal Details</h4>
                        <table class="table table-striped table-hover">
                            <tr class="text-center">
                                <td >Image </td>
                                <td>Description</td>

                            </tr>
                            @foreach ($dramaPrices as $dramasDetail)
                            <tr>
                                <td class="text-center">
                                    
                                </td>
                                <td> </td>
                            </tr>
                            @endforeach
                        </table>
                </div>  <!-- end card-body -->
            </div>  <!-- end card -->
        </div>  <!-- end col -->
    </div>
@endsection
