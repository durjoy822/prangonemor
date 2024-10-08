@extends('admin.layout.master')
@section('title') Performer Create @endsection
@section('body')
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="header-title">Add performer form</h4>
                    <p class="text-muted font-14">{{Session::get('message')}}</p>
                    <form class="form-horizontal" action="{{route('performers.store')}}" method="POST" >
                        @csrf
                        <div class="row mb-3">
                            <label for="inputEmail31" class="col-3 col-form-label">Name</label>
                            <div class="col-9">
                                <input type="text" class="form-control" name="name" id="inputEmail31" placeholder="Enter name"/>
                               <div class="text-danger mt-1"> @error('name'){{$message}} @enderror</div>
                            </div>
                        </div>
                         <div class="row mb-3 justify-content-end">
                            <label for="inputEmail33" class="col-3 col-form-label pt-0">Position</label>
                            <div class="col-9">
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="position" id="inlineRadio1" value="1">
                                    <label class="form-check-label" for="inlineRadio1">Front Stage</label>
                                </div>

                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="position" id="inlineRadio2" value="0">
                                    <label class="form-check-label" for="inlineRadio2">Back Stage</label>
                                </div>
                                <div class="text-danger mt-1"> @error('position'){{$message}} @enderror</div>

                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="inputEmail32" class="col-3 col-form-label">Character</label>
                            <div class="col-9">
                                <input type="text" class="form-control" name="character" id="inputEmail32" placeholder="Character Name"/>
                                <div class="text-danger mt-1"> @error('position'){{$message}} @enderror</div>
                            </div>
                        </div>
                        <div class="justify-content-end row mt-1">
                            <div class="col-9">
                                <button type="submit" class="btn btn-info">Save</button>
                            </div>
                        </div>
                    </form>
                </div>  <!-- end card-body -->
            </div>  <!-- end card -->
        </div>  <!-- end col -->
    </div>

@endsection

