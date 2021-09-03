@extends('backend.master')

@section('content')
<div class="row">
    <div class="col-md-5">
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
            <table class="table table-ecommerce-simple table-striped mb-0">
                <thead style="background:#2e353e;;">
                    <tr>

                        <th style="color:#fff;" width="8%">Name</th>
                        <th style="color:#fff;" width="28%">Qty</th>
                        <th style="color:#fff;" width="18%">Singel Price</th>
                        <th style="color:#fff;" width="18%">Sub Total</th>
                        <th style="color:#fff;" width="18%">Acton</th>

                    </tr>
                </thead>

                @foreach($cart as $key => $cat)
                <tbody>
                    <tr>

                        <td>{{$cat->menu->item_name}}</td>
                        <td>
                            <form role="form" action="{{route('CartUpdate')}}" method="post" enctype="multipart/form-data">
                                @csrf
                                <input type="hidden" name="cat_id[]" value="{{$cat->id}}">
                                <input type="number" name="item_quntity[]" value="{{$cat->item_quntity}}" style="width:40px;">
                                <button type="submit" class="btn btn-sm btn-success" style="margin-top:-2px;"><i class="fas fa-check"></i></button>
                            </form>
                        </td>
                        <td>{{$cat->menu->item_price}}</td>
                        <td>{{$cat->menu->item_price * $cat->item_quntity }}</td>
                        <td>

                            <a href="{{route('SingelCartDelete', $cat->id)}}"><i class="fas fa-trash" style="color:red;"></i></a>

                        </td>


                    </tr>

                </tbody>





                @endforeach

            </table>
        </div>
        <div class="pricing-footer text-center" style="background-color:#2e353e; padding-top:20px; padding-bottom:20px;">
            <p class="text-white" style="font-size:19px;">Quntity : {{$qty}}</p>
            <p class="text-white" style="font-size:19px;">Subtotal : {{$sub_total}}</p>

            <p class="text-white" style="font-size:19px;">Vat :</p>

            <hr>
            <p>
                <h2 class="text-white">Total:</h2>
                <h1 class="text-white">৳ {{ $sub_total}}</h1>
            </p>
        </div>

        <form method="post" action="{{route('CreateInvoice')}}">
            @csrf

            <div class="panel"><br> <br>

                <h4 class="text-info bg-dark">Select Table No</h4>
               
                <select class="form-control form-control-modern" name="tbl_id" id="tbl_id" class="form-control @error('tbl_id') is-invalid @enderror">
                    <option value="percentage" selected>Select the table</option>
                    @foreach($tables as $key => $tbl)
                    <option value="{{$tbl->id}}">{{$tbl->table_no}}</option>
                    @endforeach

                </select>
                @error('tbl_id')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>

            <button class="btn btn-info">Create Invoice</button>
        </form>
    </div>

    <div class="col-md-7">
        {{-- Success message --}}
        @if(session('success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            <strong>Hey!</strong> {{ session('success') }}
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
        @endif
        <div class="card-body">
            <div class="datatables-header-footer-wrapper">
                <div class="datatable-header">
                    <div class="row align-items-center mb-3">
                        <div class="col-6 col-lg-auto mb-3 mb-lg-0">
                            <a href="{{route('AddMenu')}}" class="btn btn-md btn-warning font-weight-semibold btn-py-2 px-4">+ Add Table</a>
                        </div>
                        <div class="col-8 col-lg-auto ml-auto mb-3 mb-lg-0">
                            <div class="d-flex align-items-lg-center flex-column flex-lg-row">
                                <label class="ws-nowrap mr-3 mb-0">Filter By:</label>
                                <select class="form-control select-style-1 filter-by" name="filter-by">
                                    <option value="all" selected>All</option>
                                    <option value="1">Category Name</option>
                                    <option value="2">Menu Name</option>
                                    <option value="3">Price</option>
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
                            <th width="3%">ID</th>
                            <th width="18%">Item Image</th>
                            <th width="8%">Category</th>
                            <th width="18%">Menu Name</th>
                            <th width="8%">Price</th>
                            <th width="18%">Acton</th>

                        </tr>
                    </thead>
                    <?php
                    $sl = 1;
                ?>

                    <tbody>

                        @foreach($menus as $key => $men)
                        <tr>
                            <td width="30">{{$sl++}}</td>
                            <td><img src="{{ asset('MenuImage/'.$men->item_image) }}" alt="Image" width="50" height="50"></td>
                            <td>{{$men->category->category_name}}</td>
                            <td>{{$men->item_name}}</td>
                            <td>{{$men->item_price}}</td>
                            <td>

                                <a href="{{route('SingelCart', $men->id)}}" class="btn btn-sm btn-primary" style="font-size:20px; background:orange"><i class="fas fa-plus-square"></i></a>

                            </td>

                        </tr>
                        @endforeach



                    </tbody>
                </table>
                <hr class="solid mt-5 opacity-4">
                <div class="datatable-footer">
                    <div class="row align-items-center justify-content-between mt-3">

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

        </div>
    </div>
</div>


@endsection
