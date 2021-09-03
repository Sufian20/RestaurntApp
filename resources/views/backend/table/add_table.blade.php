@extends('backend.master')

@section('content')

<div class="row">
    <div class="col">

         {{-- Success message --}}
                @if(session('success'))
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    <strong>Hey!</strong> {{ session('success') }}
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                @endif
        <section class="card card-modern card-big-info">
            <div class="card-body">
           
                <div class="row">
                    <div class="col-lg-2-5 col-xl-1-5">
                        <i class="card-big-info-icon bx bx-slider"></i>
                        <h2 class="card-big-info-title">Table Number</h2>
                        <p class="card-big-info-desc">Add the each noumber of table individualy</p>
                    </div>

                    <div class="col-lg-3-5 col-xl-4-5" style="background:#2e353e;">
                        <form role="form" action="{{route('PostTable')}}" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group row align-items-center" style="margin-top:105px;">
                                <label class="col-lg-5 col-xl-3 control-label text-lg-right mb-0">Table No :</label>
                                <div class="col-lg-7 col-xl-6">
                                    <input type="text" class="form-control form-control-modern" name="table_no" @error('table_no') is-invalid @enderror value="{{ old('table_no') }}" />
                                    @error('table_no')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                                <br>
                                <button type="submit" class="mb-1 mt-1 mr-1 btn btn-info">Save</button>

                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </section>
    </div>
</div>
@endsection
