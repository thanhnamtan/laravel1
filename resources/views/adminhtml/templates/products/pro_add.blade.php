@extends('adminhtml.base.list')

@section('admin_title')
    product add
@endsection

@section('admin_content')
 
            <div class="col-sm-9">
                <div class="card">
                    <div class="card-body">
                        {{-- <img src="{{ asset('public/product/pro/ILAPl20b70aJ.jpeg') }}" style="width: 120px; height: 120px" alt=""> --}}
                        @if (session("status"))
                            <div class="alert alert-success">
                                {{ session('status') }}
                            </div>
                        @endif
                        <h4 class="card-title" style="color: rebeccapurple">insert new product</h4>
                        
                        <form 
                            action="{{ route('admin_product_insert') }}" 
                            method="POST" enctype="multipart/form-data" >
                            @csrf
                            <div class="form-row">
                                <div class="form-group">
                                  <label for="inputProName4">product name</label>
                                  <input type="text" name="pro_name" class="form-control" id="inputProName4" placeholder="name for product" required>
                                </div>
              
                                <div class="form-group">
                                  <label for="inputTitle4">Title</label>
                                  <input type="text" name="pro_title" class="form-control" id="inputTitle4" placeholder="Title" required>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="myeditorinstance">Content</label>
                                <textarea  height="320px" name="pro_content" class="form-control" id="myeditorinstance" placeholder="product content" > </textarea>
                            </div>

                            <div class="form-group" style="display: flex">
                                <div class="col-sm-5">
                                    <label for="pro_price">Price</label>
                                    <input type="number" min="0" class="form-control" required name="pro_price" id="pro_price">
                                </div>

                                <div class="col-sm-5">
                                    <label for="pro_sale_off">Sale off</label>
                                    <input type="number" min="0" class="form-control" name="pro_sale_off" id="pro_sale_off">
                                </div>
                            </div>

                            

                            <div class="form-group">
                                <label for="inputState">Category: one or multiple</label>
                                <select id="inputState" name="pro_categories[]" style="height: auto" class="form-control" class="pro_categories" multiple="multiple" required>
                                  {{-- <option selected>Choose...</option> --}}
                                  @php
                                    echo($categories);
                                  @endphp
                                </select>
                            </div>

                            <div class="form-group">
                                <label for="inputImage">Image</label>
                                <input type="file" name="image_link" class="form-control" id="inputImage" >
                            </div>
              
                            <div class="form-group">
                                <label for="inputImages">Image content</label>
                                <input type="file" name="image_links[]" class="form-control" id="inputImages" multiple>
                            </div>
                            
                            <div class="form-group form-check">
                              <input type="checkbox" value="1" class="form-check-input" name="active" checked />
                              <label class="form-check-label" for="exampleCheck1">active</label>
                            </div>

                            <center><button type="submit" class="btn btn-primary">Submit</button></center>

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