@extends('admin.layout.app')
@section('content')
    <div class="page-content">
        <!--breadcrumb-->
        <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
            <div class="breadcrumb-title pe-3">Admin</div>
            <div class="ps-3">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb mb-0 p-0">
                        <li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt"></i></a>
                        </li>
                        <li class="breadcrumb-item active" aria-current="page">All Branches</li>
                    </ol>
                </nav>
            </div>
            <div class="ms-auto">
                <div class="btn-group">
                    <a href="{{ route('admin-branch-create') }}" class="btn btn-primary">Add Branch</a>
                </div>
            </div>
        </div>
        <!--end breadcrumb-->

        <hr />
        <div class="card">
            <div class="card-body">
                <div class="table-responsive">
                    <table id="example" class="table table-striped table-bordered" style="width:100%">
                        <thead>
                            <tr>
                                <th>Sl</th>
                                <th> Branch Name </th>
                                <th> Branch Address </th>
                                <th> Branch Area </th>
                                <th> Branch State </th>
                                <th> Branch City </th>
                                <th> Branch Pincode </th>
                                <th> Branch Map </th>
                                <th> Branch Time </th>
                                <th> Branch Day </th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($datas as $key => $item)
                                <tr>
                                    <td> {{ $key + 1 }} </td>
                                    <td>{{ $item->name }}</td>
                                    <td>{{ $item->address }}</td>
                                    <td>{{ $item->area }}</td>
                                    <td>{{ $item->state->name }}</td>
                                    <td>{{ $item->city->name }}</td>
                                    <td>{{ $item->pincode }}</td>
                                    <td>{{ $item->map }}</td>
                                    <td>{{ $item->time }}</td>
                                    <td>{{ $item->day }}</td>
                                </tr>
                            @endforeach
                        </tbody>
                        <tfoot>
                            <tr>
                                <th>Sl</th>
                                <th> Branch Name </th>
                                <th> Branch Address </th>
                                <th> Branch Area </th>
                                <th> Branch State </th>
                                <th> Branch City </th>
                                <th> Branch Pincode </th>
                                <th> Branch Map </th>
                                <th> Branch Time </th>
                                <th> Branch Day </th>
                            </tr>
                        </tfoot>
                    </table>
                </div>
            </div>
        </div>



    </div>
@endsection
