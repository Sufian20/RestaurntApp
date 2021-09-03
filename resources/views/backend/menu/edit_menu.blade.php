@extends('backend.master')

@section('content')


<!-- start: page -->
{{-- Success message --}}
@if(session('success'))
<div class="alert alert-success alert-dismissible fade show" role="alert">
    <strong>Hey!</strong> {{ session('success') }}
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
    </button>
</div>
@endif
<form class="" action="{{route('PostMenu')}}" method="post" enctype="multipart/form-data">
    @csrf
    <div class="row">

        <div class="col">
            <section class="card card-modern card-big-info">
                <div class="card-body">
                    <div class="row">
                        <div class="col-lg-2-5 col-xl-1-5">
                            <i class="card-big-info-icon bx bx-box"></i>
                            <h2 class="card-big-info-title">Update Menu</h2>
                            <p class="card-big-info-desc">Add here the mneu description with all details and necessary information.</p>
                        </div>
                        <div class="col-lg-3-5 col-xl-4-5" style="background: #2e353e;">
                            <div class="form-group row align-items-center">
                            <input type="hidden" name="id" value="{{$menus->id}}">
                                <label class="col-lg-5 col-xl-3 control-label text-lg-right mb-0">Item Name</label>
                                <div class="col-lg-7 col-xl-6">
                                    <input type="text" class="form-control form-control-modern" name="item_name" value="{{ $menus->item_name ?? old('item_name') }}" />
                                   
                                </div>
                            </div>
                            <div class="form-group row align-items-center">
                                <label class="col-lg-5 col-xl-3 control-label text-lg-right mb-0">Category Type</label>
                                <div class="col-lg-7 col-xl-6">
                                    <select class="form-control form-control-modern" name="category_id" id="category_id" class="form-control @error('category_id') is-invalid @enderror">
                                        <option value="percentage" selected>Select category</option>
                                        @foreach($categoris as $key => $cat)
                                        <option  <?php if($menus->category_id == $cat->id) {{ echo "selected";}}?> value="{{$cat->id}}">{{$cat->category_name}}</option>
                                        @endforeach

                                    </select>
                                    @error('category_id')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-lg-5 col-xl-3 control-label text-lg-right pt-2 mt-1 mb-0">Menu Item Description</label>
                                <div class="col-lg-7 col-xl-6">
                                    <textarea class="form-control form-control-modern  @error('item_des') is-invalid @enderror" name="item_des" id="item_des" value="{{old('item_des')}}" rows="6">
                                        {{$menus->item_des}}
                                    </textarea>
                                    @error('item_des')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group row align-items-center">
                                <label class="col-lg-5 col-xl-3 control-label text-lg-right mb-0">Item iamge</label>
                                <div class="col-lg-7 col-xl-6">
                                    <input type="file" class="form-control form-control-modern " name="item_image" value="{{ old('item_image') }}" onchange="photoChange(this)" />
                                   


                                </div>

                            </div>
                            <div class="form-group row align-items-center">
                                <label class="col-lg-5 col-xl-3 control-label text-lg-right mb-0">Item preview</label>
                                <div class="col-lg-7 col-xl-6">


                                    <div id="imgPreview" style="padding-top:10px;">
                                        <td><img id="file_preview" src="{{ asset('MenuImage/'.$menus->item_image) }}" width="150" height="150"></td>

                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </section>
        </div>
    </div>

    <div class="row">
        <div class="col">
            <section class="card card-modern card-big-info">
                <div class="card-body">
                    <div class="tabs-modern row" style="min-height: 490px;">
                        <div class="col-lg-2-5 col-xl-1-5">
                            <div class="nav flex-column" id="tab" role="tablist" aria-orientation="vertical">


                            </div>
                        </div>
                        <div class="col-lg-3-5 col-xl-4-5" style="background: #2e353e;">
                            <div class="tab-content" id="tabContent">
                                <div class="tab-pane fade show active" id="price" role="tabpanel" aria-labelledby="price-tab">

                                    <div class="form-group row align-items-center">
                                        <label class="col-lg-5 col-xl-3 control-label text-lg-right mb-0">Sale Price ( ৳ )</label>
                                        <div class="col-lg-7 col-xl-6">
                                            <input type="text" class="form-control form-control-modern @error('item_price') is-invalid @enderror" name="item_price" value="{{$menus->item_price ?? old('item_price')}}" />
                                        </div>
                                        @error('item_price')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </section>

        </div>
    </div>
    <div class="row action-buttons" style="padding-top:10px;">
        <div class="col-12 col-md-auto">
            <button type="submit" style="background:#2dca2d; border-color: #2dca2d;" class="submit-button btn btn-primary btn-px-4 py-3 d-flex align-items-center font-weight-semibold line-height-1" data-loading-text="Loading...">
                <i class="bx bx-save text-4 mr-2"></i> Update Menu
            </button>
        </div>
        <div class="col-12 col-md-auto px-md-0 mt-3 mt-md-0">
            <a href="ecommerce-products-list.html" class="cancel-button btn btn-light btn-px-4 py-3 border font-weight-semibold text-color-dark text-3">Cancel</a>
        </div>
        <div class="col-12 col-md-auto ml-md-auto mt-3 mt-md-0">
            <a href="#" class="delete-button btn btn-danger btn-px-4 py-3 d-flex align-items-center font-weight-semibold line-height-1">
                <i class="bx bx-trash text-4 mr-2"></i> Delete Product
            </a>
        </div>
    </div>
</form>

<!-- end: page -->
</section>

@endsection

@section('footer_js')
<script>
    function photoChange(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();
            reader.onload = function(e) {
                $('#file_preview')
                    .attr('src', e.target.result)
                    .attr("class", "img-thumbnail")
            };
            reader.readAsDataURL(input.files[0]);
        }
    }

</script>
@endsection
