@extends('adminhtml.base.list')

@section('admin_title')
    category list
@endsection

@section('admin_content')
 
            <div class="col-sm-9">
                <div class="card">
                    <div class="card-body">
                        @if (session("status"))
                            <div class="alert alert-success">
                                {{ session('status') }}
                            </div>
                        @endif
                        <h4 class="card-title" style="color: rebeccapurple">insert new categories</h4>
                        
                        <form action="{{ route('admin_cate_insert') }}" method="POST" >
                            @csrf
                            <div class="form-group">
                              <label for="exampleInputEmail1">category name</label>
                              <input type="text" class="form-control" name="category_name"  required placeholder="Enter category name" />
                              <small class="form-text text-muted">day la truong bat buoc phai co.</small>
                            </div>

                            {{-- <div class="form-group">
                              <label for="exampleInputPassword1">Password</label>
                              <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password" />
                            </div> --}}

                            <div class="form-group">
                                <label for="exampleInputEmail1">category parent</label>
                                <select class="form-select" aria-label="Default select example" name="parent_id">
                                    @php
                                        echo($parent_options);
                                    @endphp
                                    {{-- <option selected>Open this select menu</option>
                                    <option value="1">__One</option>
                                    <option value="2">____Two</option>
                                    <option value="3">_______Three</option> --}}
                                  </select>
                            </div>
                            
                            <div class="form-group form-check">
                              <input type="checkbox" value="1" class="form-check-input" name="active" checked />
                              <label class="form-check-label" for="exampleCheck1">active</label>
                            </div>

                            <center><button type="submit" class="btn btn-primary">Submit category</button></center>

                          </form>

                        {{-- <div class="text-end">
                            <h2 class="font-light mb-0"><i class="ti-arrow-up text-success"></i> $120</h2>
                            <span class="text-muted">Todays Income</span>
                        </div>
                        <span class="text-success">80%</span>
                        <div class="progress">
                            <div class="progress-bar bg-success" role="progressbar"
                                style="width: 80%; height: 6px;" aria-valuenow="25" aria-valuemin="0"
                                aria-valuemax="100"></div>
                        </div> --}}

                    </div>
                </div>
            </div>
          
            <div class="col-sm-3">
                <div class="card">
                    <div class="card-body">
                        <a class="card-title" href="{{ route('admin_cate_list') }}">
                            <button class="btn btn-primary">
                                list categories
                            </button>
                        </a>
                    </div>
                </div>
            </div>
@endsection