@extends('backend.master')

@section('content')
<div class="card-body">
    {{-- Success message --}}
    @if(session('success'))
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        <strong>Hey!</strong> {{ session('success') }}
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>
    @endif
    <div class="datatables-header-footer-wrapper">
        <div class="datatable-header">
            <div class="row align-items-center mb-3">
                <div class="col-12 col-lg-auto mb-3 mb-lg-0">
                    <a href="{{route('AddMenu')}}" class="btn btn-md btn-warning font-weight-semibold btn-py-2 px-4">+ Add Food Menu</a>
                </div>
                <div class="col-8 col-lg-auto ml-auto mb-3 mb-lg-0">
                    <div class="d-flex align-items-lg-center flex-column flex-lg-row">
                        <label class="ws-nowrap mr-3 mb-0">Filter By:</label>
                        <select class="form-control select-style-1 filter-by" name="filter-by">
                            <option value="all" selected>All</option>
                            <option value="1">ID</option>
                            <option value="2">Category Name</option>
                            <option value="3">Date</option>
                            <option value="4">Acton</option>

                        </select>
                    </div>
                </div>
                <div class="col-4 col-lg-auto pl-lg-1 mb-3 mb-lg-0">
                    <div class="d-flex align-items-lg-center flex-column flex-lg-row">
                        <label class="ws-nowrap mr-3 mb-0">Show:</label>
                        <select class="form-control select-style-1 results-per-page" name="results-per-page">
                            <option value="12" selected>12</option>
                            <option value="24">24</option>
                            <option value="36">36</option>
                            <option value="100">100</option>
                        </select>
                    </div>
                </div>
                <div class="col-12 col-lg-auto pl-lg-1">
                    <div class="search search-style-1 search-style-1-lg mx-lg-auto">
                        <div class="input-group">
                            <input type="text" class="search-term form-control" name="search-term" id="search-term" placeholder="Search Order" style="background: #1d2127;">
                            <span class="input-group-append">
                                <button class="btn btn-default" type="submit" style="background: #1d2127;"><i class="bx bx-search"></i></button>
                            </span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <table class="table table-ecommerce-simple table-striped mb-0" id="datatable-ecommerce-list" style="min-width: 640px;">
            <thead>
                <tr>
                    <th width="3%"><input type="checkbox" name="select-all" class="select-all checkbox-style-1 p-relative top-2" value="" /></th>
                    <th width="8%">ID</th>
                    <th width="28%">Category Name</th>
                    <th width="28%">Menu Item Name</th>
                    <th width="28%">Menu Image</th>
                    <th width="18%">Acton</th>

                </tr>
            </thead>
            <?php 
                $sl =1;
            ?>
            <tbody>
                @foreach($menus as $key => $men)
                <tr>
                    <td width="30"><input type="checkbox" name="id" class="checkbox-style-1 p-relative top-2" value="id" /></td>
                    <td><a href="ecommerce-orders-detail.html"><strong>{{$sl++}}</strong></a></td>
                    <td>{{$men->category->category_name}}</td>
                    <td>{{$men->item_name}}</td>
                    <td><img src="{{ asset('MenuImage/'.$men->item_image) }}" alt="Image" width="100" height="100"></td>
                    <td class="action-btn">
                        <a href="{{ url('edit-menu') }}/{{ $men->id }}" class="btn btn-sm btn-info" style="margin: 5px;"><i class="far fa-edit"></i></a>
                        <a href="{{ url('delete-menu') }}/{{ $men->id }}" class="btn btn-sm btn-danger" style="margin: 5px;"><i class="fas fa-trash-alt"></i></a>
                        <a href="{{ url('view-menu')}}/{{ $men->id}}" class="btn btn-sm btn-primary" style="margin: 5px;"><i class="far fa-eye"></i></a>

                    </td>

                </tr>
                @endforeach


            </tbody>
        </table>
        <hr class="solid mt-5 opacity-4">
        <div class="datatable-footer">
            <div class="row align-items-center justify-content-between mt-3">
                <div class="col-md-auto order-1 mb-3 mb-lg-0">
                    <div class="d-flex align-items-stretch">
                        <select class="form-control select-style-1 bulk-action mr-3" name="bulk-action" style="min-width: 170px;">
                            <option value="" selected>Bulk Actions</option>
                            <option value="delete">Delete</option>
                        </select>
                        <a href="ecommerce-orders-detail.html" class="bulk-action-apply btn btn-light btn-px-4 py-3 border font-weight-semibold text-color-dark text-3">Apply</a>
                    </div>
                </div>
                <div class="col-lg-auto text-center order-3 order-lg-2">
                    <div class="results-info-wrapper"></div>
                </div>
                <div class="col-lg-auto order-2 order-lg-3 mb-3 mb-lg-0">
                    <div class="pagination-wrapper"></div>
                </div>
            </div>
        </div>
        </table>
    </div>
    @endsection
