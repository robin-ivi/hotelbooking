<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <!-- [ Main Content ] start -->
<div class="page-content-wrapper">
    <div class="content-container">
        <div class="page-content">
            <div class="content-header">
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="card">
            <form action="{{ route('store-roomCategory')}}" method="POST" enctype="multipart/form-data">
                @csrf
                        <div class="card-header">
                            <h4>Add New Category</h4>
                        </div>
                        <div class="card-body">
                            <div class="alert alert-primary">
                                <div class="media align-items-center">
                                    <i class="feather icon-alert-circle h2"></i>
                                    <div class="media-body ms-3">
                                        Place one add-on or button on either side of an input. You may also place one on
                                        both sides of an input.
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                    <input type="text" name="category_name" class="form-control @error('category_name') is-invalid @enderror" placeholder="Room Category ...">
                                    <input type="hidden" name="status" value="active">
                                    @error('category_name')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                            </div>
                        </div>
                        <div class="card-footer">
                            <button class="btn btn-primary me-2">Submit</button>
                        </div>
            </form>
                    </div>
                    
                </div>
                <div class="col-md-6">
                    <div class="card">
                        <div class="card-header">
                            <h4>All Room Category List</h4>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-styling table-danger">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Category Name</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                            @php 
                                                $i = 0;
                                            @endphp
                                        @foreach ($data as $item)
                                            @php 
                                                $i++;
                                            @endphp
                                        <tr>
                                            <td>{{ $i; }}</td>
                                            <td>{{ $item['category_name']; }}</td>
                                            <td>
                                                <a href="delete-roomCategory/{{ $item->id }}"><i class="ti ti-trash"></i></a>
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
        </div>
    </div>
</div>
<!-- [ Main Content ] end -->
</x-app-layout>
