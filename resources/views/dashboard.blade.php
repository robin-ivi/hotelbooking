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
                <h1 class="mb-0">Dashboard</h1>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-body bg-primary rounded-3">
                                    <div class="row">
                                      <div class="col-lg-12 col-md-12 col-12">
                                        <div class="d-lg-flex justify-content-between align-items-center ">
                                          <div class="d-md-flex align-items-center">
                                            <img src="assets/images/user/avatar-2.jpg" alt="Image" class="rounded-circle avatar avatar-xl">
                                            <div class="ms-md-4 mt-3">
                                              <h2 class="text-white fw-600 mb-1">Hello,  {{ Auth::user()->name }}</h2>
                                              <p class="text-white"> Have a Nice Day</p>
                                            </div>
                                          </div>
                                        </div>
                                      </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-sm-6">
                            <div class="card">
                                <div class="card-body rounded border border-success bg-light-success">
                                    <div class="d-flex align-items-center">
                                        <div class="numbers flex-grow-1 pe-3">
                                            <p class="fw-600 mb-1 text-muted">Total Booking</p>
                                            <h4 class="fw-700 mb-0 text-dark-black">2</h4>
                                        </div>
                                        <div class="icon-shape bg-success ">
                                            <i class="ti ti-users"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-sm-6">
                            <div class="card">
                                <div class="card-body rounded border border-danger bg-light-danger">
                                    <div class="d-flex align-items-center">
                                        <div class="numbers flex-grow-1 pe-3">
                                            <p class="fw-600 mb-1 text-muted">Total Check Out</p>
                                            <h4 class="fw-700 mb-0 text-dark-black">4</h4>
                                        </div>
                                        <div class="icon-shape bg-danger ">
                                            <i class="ti ti-users"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-sm-6">
                            <div class="card">
                                <div class="card-body  rounded border border-success bg-light-success">
                                    <div class="d-flex align-items-center">
                                        <div class="numbers flex-grow-1 pe-3">
                                            <p class="fw-600 mb-1 text-muted">Total Available Room</p>
                                            <h4 class="fw-700 mb-0 text-dark-black">{{ count($data) }}</h4>
                                        </div>
                                        <div class="icon-shape bg-success ">
                                            <i class="ti ti-home"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-sm-6">
                            <div class="card">
                                <div class="card-body rounded border border-danger bg-light-danger">
                                    <div class="d-flex align-items-center">
                                        <div class="numbers flex-grow-1">
                                            <p class="fw-600 mb-1 text-muted">Total Booked Room</p>
                                            <h4 class="fw-700 mb-0 text-dark-black">{{ count($bdata) }}</h4>
                                        </div>
                                        <div class="icon-shape bg-danger ">
                                            <i class="ti ti-home"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <div class="card table-card">
                                <div class="card-header">
                                    <h4>Latest Booking</h4>
                                </div>
                                <div class="card-body">
                                    <div class="table-responsive">
                                        <table class="table">
                                            <thead>
                                                <tr>
                                                    <th>#</th>
                                                    <th>Customer Name</th>
                                                    <th>Email</th>
                                                    <th>Phone No</th>
                                                    <th>Room</th>
                                                    <th>Check In date</th>
                                                    <th>Check Out date</th>
                                                    <th>Status</th>
                                                </tr>
                                            </thead>
                                            <tbody>

                                @php
                                $i = 0;  

                                @endphp
                                                @foreach($bookiing as $item)
                                                <tr>

                                                    @php
                                                    $i++;  
                                                    @endphp
                                                    <tr>
                                                      <td>{{ $i; }}</td>
                                                    <td>{{ $item['name'] }}</td>
                                                    <td>{{ $item['email'] }}</td>
                                                    <td>{{ $item['phone_no'] }}</td>
                                                    <td><?php
                                                        // Decode the JSON string to an array
                                                        $type_of_rooms = json_decode($item['room']);
                                                        
                                                        // Check if $type_of_rooms is an array
                                                        if (is_array($type_of_rooms)) {
                                                            // Loop through each room and display its name
                                                            foreach ($type_of_rooms as $room_name) {
                                                                echo $room_name . "<br>";
                                                            }
                                                        } else {
                                                            // Handle case where $type_of_rooms is not an array (e.g., if JSON decoding fails)
                                                            echo "No rooms found.";
                                                        }
                                                        ?></td>
                                                    <td>{{ $item['check_in'] }}</td>
                                                    <td>{{ $item['check_out'] }}</td>
                                                    <td>
                                                      @if($item['status'] == 'booked')
                                                          <span class="badge bg-success">Booked</span>
                                                      @else
                                                          <span class="badge bg-danger">Checkout</span>
                                                      @endif
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
    </div>
</div>
<!-- [ Main Content ] end -->
</x-app-layout>
