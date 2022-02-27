@extends('adminhtml.base.list')

@section('admin_title')
    category list
@endsection

@section('admin_content')
<div class="row">
    <div class="col-sm-12">
        <div class="card">
            <div class="card-body">
                <div class="d-md-flex">
                    <h4 class="card-title col-md-10 mb-md-0 mb-3 align-self-center">all of categories</h4>
                    <div class="col-md-4 ms-auto">
                        <a href="{{ route('admin_cate_add') }}">
                            <button class="btn btn-info">add new category</button>
                        </a>
                    </div>
                </div>
                <div class="table-responsive mt-5">
                    <table class="table stylish-table no-wrap">
                        <thead>
                            <tr>
                                <th class="border-top-0">id</th>
                                <th class="border-top-0">Name</th>
                                <th class="border-top-0">parent_id</th>
                                <th class="border-top-0">active</th>
                                <th class="border-top-0">actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($categories as $category)
                            <tr>
                                <td class="align-middle"><?= $category->id ?></td>
                                <td class="align-middle"><?= $category->name ?></td>
                                <td class="align-middle"><?= $category->parent_id ?></td>
                                <td class="align-middle"><?= $category->active ?></td>
                                <td class="align-middle">
                                    <a href="{{ route('admin_cate_edit', ['category_id' => $category->id]) }}"><button class="btn btn-info">edit</button></a>
                                    <a href="{{ route('admin_cate_delete', ['category_id' => $category->id]) }}"><button class="btn btn-danger">delete</button></a>
                                </td>
                            </tr>
                            @endforeach
                            {{-- <tr>
                                <td style="width:50px;"><span class="round">S</span></td>
                                <td class="align-middle">
                                    <h6>Sunil Joshi</h6><small class="text-muted">Web Designer</small>
                                </td>
                                <td class="align-middle">Elite Admin</td>
                                <td class="align-middle">$3.9K</td>
                            </tr>
                            <tr class="active">
                                <td><span class="round"><img src="{{ asset('adminhtml/assets/images/users/2.jpg') }}"
                                            alt="user" width="50"></span></td>
                                <td class="align-middle">
                                    <h6>Andrew</h6><small class="text-muted">Project Manager</small>
                                </td>
                                <td class="align-middle">Real Homes</td>
                                <td class="align-middle">$23.9K</td>
                            </tr> --}}

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection