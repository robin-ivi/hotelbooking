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
            <form action="{{ route('store-rooms')}}" method="POST" enctype="multipart/form-data">
                @csrf
                        <div class="card-header">
                            <h4>Add New Room</h4>
                        </div>
                        <div class="card-body">
                            <div class="alert alert-primary">
                                <div class="media align-items-center">
                                    <i class="feather icon-alert-circle h2"></i>
                                    <div class="media-body ms-3">
                                        Please Add All Room List Here.
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                    <label class="form-label" for="exampleSelect1">Room Category</label>
                                    <select name="room_category" id="" class="form-control @error('room_category') is-invalid @enderror">
                                        <option value="">--- Select Room Category ---</option>
                                        @foreach($cdata as $value)
                                            <option value="{{ $value->category_name }}">{{ $value->category_name }}</option>
                                        @endforeach
                                    </select>
                                    @error('room_category')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                            </div>
                            <div class="form-group">
                                <label class="form-label" for="exampleSelect1">Room Name</label>
                                    <input type="text" name="room_name" class="form-control @error('room_name') is-invalid @enderror" placeholder="Room Name ...">
                                    <input type="hidden" name="room_status" value="checkout">
                                    @error('room_name')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                            </div>
                            <div class="form-group">
                                    <label class="form-label" for="room_floor">Room Floor</label>
                                    <select name="room_floor" id="room_floor" class="form-control @error('room_floor') is-invalid @enderror">
                                      <option value="">--- Select Floor ---</option>
                                      <option value="Ground Floor">Ground Floor</option>
                                      <option value="First Floor">First Floor</option>
                                      <option value="Second Floor">Second Floor</option>
                                      <option value="Third Floor">Third Floor</option>
                                      <option value="Fourth Floor">Fourth Floor</option>
                                    </select>
                                    @error('room_floor')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                            </div>
                            <div class="form-group">
                                    <label class="form-label" for="room_bhk">Room BHK</label>
                                    <select name="room_bhk" id="room_bhk" class="form-control @error('room_bhk') is-invalid @enderror">
                                      <option value="">--- Select BHK ---</option>
                                      <option value="1 BHK">1 BHK</option>
                                      <option value="2 BHK">2 BHK</option>
                                      <option value="3 BHK">3 BHK</option>
                                      <option value="4 BHK">4 BHK</option>
                                      <option value="5 BHK">5 BHK</option>
                                    </select>
                                    @error('room_bhk')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                            </div>
                            <div class="form-group">
                                <label class="form-label" for="room_features">Room Features</label>
                                    <input type="text" name="room_features" class="form-control" placeholder="Room Name ...">
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
                            <h4>All Room List</h4>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-styling table-danger">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Room Category</th>
                                            <th>Room Name</th>
                                            <th>Room Floor</th>
                                            <th>Room BHK</th>
                                            <th>Room Features</th>
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
                                            <td>{{ $item['room_category']; }}</td>
                                            <td>{{ $item['room_name']; }}</td>
                                            <td>{{ $item['room_floor']; }}</td>
                                            <td>{{ $item['room_bhk']; }}</td>
                                            <td>{{ $item['room_features']; }}</td>
                                            <td>
                                                <a href="delete-rooms/{{ $item->id }}"><i class="ti ti-trash"></i></a>
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
