@extends('backend.master')

@section('content')


<!-- start: page -->

  
    <div class="row">

        <div class="col">
            <section class="card card-modern card-big-info">
                <div class="card-body">
                    <div class="row">
                        <div class="col-lg-2-5 col-xl-1-5">
                            <i class="card-big-info-icon bx bx-box"></i>
                            <h2 class="card-big-info-title">Menu Details</h2>
                            <p class="card-big-info-desc">View the Food Menu information details</p>
                        </div>
                        <div class="col-lg-3-5 col-xl-4-5" style="background: #2e353e;">
                              <div class="form-group row align-items-center">
                                <label class="col-lg-5 col-xl-3 control-label text-lg-right mb-0">Item preview</label>
                                <div class="col-lg-7 col-xl-6">
                                    <img src="{{ asset('MenuImage/'.$menus->item_image) }}" alt="Image" width="500" height="300">
                                </div>
                            </div>
                            <div class="form-group row align-items-center">
                                <label class="col-lg-5 col-xl-3 control-label text-lg-right mb-0">Item Name : </label>
                                <div class="col-lg-7 col-xl-6">
                                   {{$menus->item_name}}
                                </div>
                            </div>
                           <div class="form-group row align-items-center">
                                <label class="col-lg-5 col-xl-3 control-label text-lg-right mb-0">Category Type : </label>
                                <div class="col-lg-7 col-xl-6">
                                   {{$menus->category->category_name}}
                                </div>
                            </div>
                            <div class="form-group row align-items-center">
                                <label class="col-lg-5 col-xl-3 control-label text-lg-right mb-0">Category Type : </label>
                                <div class="col-lg-7 col-xl-6">
                                   {{$menus->item_des}}
                                </div>
                            </div>
                             <div class="form-group row align-items-center">
                                <label class="col-lg-5 col-xl-3 control-label text-lg-right mb-0">Category Type : </label>
                                <div class="col-lg-7 col-xl-6">
                                   {{$menus->item_price}}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </div>

   
   


<!-- end: page -->
</section>

@endsection


