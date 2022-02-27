@extends('adminhtml.base.list')

@section('admin_title')
    product list
@endsection

@section('admin_content')
 
            <div class="row">
                <div class="col-sm-3">
                    <div class="card">
                        <div class="card-body">
                            <a class="card-title" href="{{ route('admin_product_addProduct') }}">
                                <button class="btn btn-primary">
                                    add new product
                                </button>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="row">
                <div class="col-sm-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="table-responsive mt-5">
                                <table class="table stylish-table no-wrap">
                                    <thead>
                                        <tr>
                                            <th class="border-top-0">id</th>
                                            <th class="border-top-0">Name</th>
                                            {{-- <th class="border-top-0">title</th> --}}
                                            <th class="border-top-0">active</th>
                                            {{-- <th class="border-top-0">content</th> --}}
                                            <th class="border-top-0">price</th>
                                            <th class="border-top-0">sale off</th>
                                            <th class="border-top-0">image_link</th>
                                            <th class="border-top-0">actions</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($product_list as $pro)
                                        <tr>
                                            <td class="align-middle"><?= $pro->id ?></td>
                                            <td class="align-middle"><?= $pro->name ?></td>
                                            {{-- <td class="align-middle"></td> --}}
                                            <td class="align-middle"><?= $pro->active ?></td>
                                            {{-- <td class="align-middle">s</td> --}}
                                            <td class="align-middle"><?= $pro->price ?></td>
                                            <td class="align-middle"><?= $pro->sale_off ?></td>
                                            <td class="align-middle">
                                                <img src="{{ asset($pro->image_link) }}" style="width: 160px; height:120px" alt="<?=$pro->id ?>">
                                            </td>
                                            <td class="align-middle">
                                                <p><a href="{{ route('admin_product_edit', ['product_id' => $pro->id]) }}"><button class="btn btn-info">edit</button></a></p>
                                                <p><a href="{{ route('admin_product_delete', ['product_id' => $pro->id]) }}"><button class="btn btn-danger">delete</button></a></p>
                                            </td>
                                        </tr>
                                        @endforeach
            
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
@endsection