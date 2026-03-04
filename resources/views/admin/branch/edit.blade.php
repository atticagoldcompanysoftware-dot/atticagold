@extends('admin.layout.app')
@section('content')
    <div class="page-content">
        <!--breadcrumb-->
        <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
            <div class="breadcrumb-title pe-3">District</div>
            <div class="ps-3">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb mb-0 p-0">
                        <li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt"></i></a>
                        </li>
                        <li class="breadcrumb-item active" aria-current="page">Edit District</li>
                    </ol>
                </nav>
            </div>
            <div class="ms-auto">

            </div>
        </div>
        <!--end breadcrumb-->
        <div class="container">
            <div class="main-body">
                <div class="row">

                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-body">

                                <form method="post" action="{{ route('admin-branch-update') }}">
                                    @csrf
                                    <input type="hidden" name="id" value="{{ $data->id }}">
                                    <div class="row mb-3">
                                        <div class="col-sm-3">
                                            <h6 class="mb-0">Name</h6>
                                        </div>
                                        <div class="col-sm-9 text-secondary">
                                            <input type="text" name="name"
                                                class="form-control @error('name') is-invalid @enderror" id=""
                                                placeholder="Enter Branch Name" value="{{ $data->name }}" />

                                            @error('name')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="row mb-3">
                                        <div class="col-sm-3">
                                            <h6 class="mb-0">Address</h6>
                                        </div>
                                        <div class="col-sm-9 text-secondary">
                                            <input type="text" name="address"
                                                class="form-control @error('address') is-invalid @enderror" id=""
                                                placeholder="Enter Branch Address" value="{{ $data->address }}" />

                                            @error('address')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="row mb-3">
                                        <div class="col-sm-3">
                                            <h6 class="mb-0">Area</h6>
                                        </div>
                                        <div class="col-sm-9 text-secondary">
                                            <input type="text" name="area"
                                                class="form-control @error('area') is-invalid @enderror" id=""
                                                placeholder="Enter Branch Area" value="{{ $data->area }}" />

                                            @error('area')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="row mb-3">
                                        <div class="col-sm-3">
                                            <h6 class="mb-0">Select State</h6>
                                        </div>
                                        <div class="col-sm-9 text-secondary">
                                            <select class="form-select mb-3" aria-label="Default select example"
                                                name="state_id">
                                                <option selected="">Choose State</option>
                                                @foreach ($states as $item)
                                                    <option value="{{ $item->id }}"
                                                        {{ $item->id == $data->state_id ? 'selected' : '' }}>
                                                        {{ $item->name }} </option>
                                                @endforeach

                                            </select>

                                            @error('state_id')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="row mb-3">
                                        <div class="col-sm-3">
                                            <h6 class="mb-0">Select Cities</h6>
                                        </div>
                                        <div class="col-sm-9 text-secondary">
                                            <select class="form-select mb-3" aria-label="Default select example"
                                                name="city_id">
                                                <option selected="">Choose Cities</option>
                                                @foreach ($cities as $item)
                                                    <option value="{{ $item->id }}"
                                                        {{ $item->id == $data->city_id ? 'selected' : '' }}>
                                                        {{ $item->name }} </option>
                                                @endforeach

                                            </select>

                                            @error('city_id')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="row mb-3">
                                        <div class="col-sm-3">
                                            <h6 class="mb-0">Pincode</h6>
                                        </div>
                                        <div class="col-sm-9 text-secondary">
                                            <input type="text" name="pincode"
                                                class="form-control @error('pincode') is-invalid @enderror" id=""
                                                placeholder="Enter Branch Pincode" value="{{ $data->pincode }}" />

                                            @error('pincode')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>



                                    <div class="row mb-3">
                                        <div class="col-sm-3">
                                            <h6 class="mb-0">Map</h6>
                                        </div>
                                        <div class="col-sm-9 text-secondary">
                                            <input type="text" name="map"
                                                class="form-control @error('map') is-invalid @enderror" id=""
                                                placeholder="Enter Branch Map" value="{{ $data->map }}" />

                                            @error('map')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="row mb-3">
                                        <div class="col-sm-3">
                                            <h6 class="mb-0">Time</h6>
                                        </div>
                                        <div class="col-sm-9 text-secondary">
                                            <input type="text" name="time"
                                                class="form-control @error('time') is-invalid @enderror" id=""
                                                placeholder="Enter Branch Time" value="{{ $data->time }}" />

                                            @error('time')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="row mb-3">
                                        <div class="col-sm-3">
                                            <h6 class="mb-0">Day</h6>
                                        </div>
                                        <div class="col-sm-9 text-secondary">
                                            <input type="text" name="day"
                                                class="form-control @error('day') is-invalid @enderror" id=""
                                                placeholder="Enter Branch Day" value="{{ $data->day }}" />

                                            @error('day')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="row mb-3">
                                        <div class="col-sm-3">
                                            <h6 class="mb-0">Meta Title</h6>
                                        </div>
                                        <div class="col-sm-9 text-secondary">
                                            <input type="text" name="title"
                                                class="form-control @error('title') is-invalid @enderror" id=""
                                                placeholder="Enter Meta Title" value="{{ $data->title }}" />

                                            @error('title')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="row mb-3">
                                        <div class="col-sm-3">
                                            <h6 class="mb-0">Meta Keyword</h6>
                                        </div>
                                        <div class="col-sm-9 text-secondary">
                                            <input type="text" class="form-control" data-role="tagsinput"
                                                name="keyword"
                                                value="22K gold buyers,24K gold buyers,instant cash for gold,live gold rate" />
                                        </div>
                                    </div>



                                    <div class="row mb-3">
                                        <div class="col-sm-3">
                                            <h6 class="mb-0">Meta Description</h6>
                                        </div>
                                        <div class="col-sm-9 text-secondary">
                                            <textarea class="form-control" id="input11" name="description" placeholder="Meta Description" rows="3"></textarea>
                                        </div>
                                    </div>






                                    <div class="row">
                                        <div class="col-sm-3"></div>
                                        <div class="col-sm-9 text-secondary">
                                            <input type="submit" class="btn btn-primary px-4" value="Update Branch" />
                                        </div>
                                    </div>
                            </div>

                            </form>



                        </div>




                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
