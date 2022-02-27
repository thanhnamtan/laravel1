@extends('adminhtml.base.list')

@section('admin_title')
    category list
@endsection

@section('admin_content')
 
            <div class="col-sm-9">
                <div class="card">
                    <div class="card-body">
                        @if (session("message"))
                            <div class="alert alert-success">
                                {{ session('message') }}
                            </div>
                        @endif
                        <h4 class="card-title" style="color: rebeccapurple">edit category</h4>
                        
                        <form action="{{ route('admin_cate_update', ['category_id' => $category->id]) }}" method="POST" >
                            @csrf
                            <div class="form-group">
                              <label for="exampleInputEmail1">category name</label>
                              <input type="text" class="form-control" value="{{ $category->name }}" name="category_name"  required placeholder="Enter category name" />
                              <small class="form-text text-muted">day la truong bat buoc phai co.</small>
                            </div>
                            
                            <div class="form-group form-check">
                              <input type="checkbox" value="1" {{ $category->active ? 'checked' : '' }} class="form-check-input" name="active" />
                              <label class="form-check-label" for="exampleCheck1">active</label>
                            </div>

                            <center><button type="submit" class="btn btn-primary">update category</button></center>

                          </form>

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