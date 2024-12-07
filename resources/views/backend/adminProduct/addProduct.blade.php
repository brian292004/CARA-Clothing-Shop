@extends('adminLayout')
@section('body')
<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet">
@if ($errors->any())
    <div class="alert alert-danger" id="alert-box" >
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
<form action="{{ route('admin.storeProduct') }}" method="post" enctype="multipart/form-data" > 
    @csrf
<div class="container">
<div class="row flex-lg-nowrap">
  <div class="col">
    <div class="row">
      <div class="col mb-3">
        <div class="card">
          <div class="card-body">
            <div class="e-profile">
              <div class="row">
              </div>
              <ul class="nav nav-tabs">
                <li class="nav-item"><a href="" class="active nav-link">Settings</a></li>
              </ul>
              <div class="tab-content pt-3">
                <div class="tab-pane active">
                  <form class="form" novalidate="">
                    <div class="row">
                      <div class="col">
                        <div class="row">
                          <div class="col">
                            <div class="form-group">
                            <label>Product Name <span class="text-danger">(*)</span></label>
                            <input 
                            class="form-control" 
                            type="text" 
                            name="name"
                            >
                            </div>
                          </div>
                        </div>
                        <div class="row">
                          <div class="col">
                            <div class="form-group">
                              <label>Description <span class="text-danger">(*) Tối đa 40 ký tự</span></label>
                              <input 
                              class="form-control" 
                              type="text" 
                              name="description" 
                              {{-- placeholder="user@example.com"  --}}
                              >
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-12 col-sm-6 mb-3">
                        <div class="row">
                          <div class="col">
                            <div class="form-group">
                              <label>Price <span class="text-danger">(*)</span></label>
                              <input 
                              type="text" 
                              name="price" 
                              class="form-control" 
                              {{-- value="00.000.000"  --}}
                              >
                          </div>
                        </div>
                        </div>
                        {{-- <div class="form-group">
                          <label for="discount">Giảm giá (%)</label>
                          <input type="number" name="discount" value="{{ $product->discount }}" min="0" max="100" step="0.01" required>
                      </div> --}}
                        <div class="row">
                            <div class="col">
                              <div class="form-group">
                                <label>Image Product <span class="text-danger">(*)</span></label>
                                <input 
                                class="form-control" 
                                type="file" 
                                name="image">
                            </div>
                            </div>
                          </div>
                          </div>
                      </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col d-flex justify-content-end">
                        <button class="btn btn-primary" type="submit">Save Changes</button>
                      </div>
                    </div>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
</div>
</form>
<script src="BE/products/js/mesAlert.js"></script>
@endsection