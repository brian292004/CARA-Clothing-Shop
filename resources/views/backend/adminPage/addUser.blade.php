@extends('adminLayout')
@section('body')
<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet">
<form action="{{ route('admin.store') }}" method="post">
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
                            <label>Full Name <span class="text-danger">(*)</span></label>
                            <input 
                            class="form-control" 
                            type="text" 
                            name="name"
                            {{-- value="{{ $user->name }}" --}}
                            >
                            </div>
                          </div>
                        </div>
                        <div class="row">
                          <div class="col">
                            <div class="form-group">
                              <label>Email <span class="text-danger">(*)</span></label>
                              <input 
                              class="form-control" 
                              type="text" 
                              name="email" 
                              placeholder="user@example.com" 
                              {{-- value="{{ $user->email }}" --}}
                              >
                            </div>
                          </div>
                        </div>
                        {{-- <div class="row">
                          <div class="col mb-3">
                            <div class="form-group">
                              <label>About</label>
                              <textarea class="form-control" rows="5" placeholder="My Bio"></textarea>
                            </div>
                          </div>
                        </div> --}}
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-12 col-sm-6 mb-3">
                        <div class="row">
                          <div class="col">
                            <div class="form-group">
                              <label>Confirm <span class="d-none d-xl-inline" 
                                >Password</span><span class="text-danger">(*)</span></label>
                              <input class="form-control" type="password" name="password" ></div>
                          </div>
                          <div class="col">
                            <div class="form-group">
                              <label>Confirm <span class="d-none d-xl-inline" 
                                >Role</span><span class="text-danger">(*)</span></label>
                              <input class="form-control" type="text" name="Role" ></div>
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
@endsection