<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Profile') }}
        </h2>
    </x-slot>
    @foreach ($data as $item)
    <div class="page-content-wrapper">
        <div class="content-container">
            <div class="page-content">
                <div class="content-header">
                    
                </div>
                            
                <form action="{{ route('update-booking')}}" method="POST" enctype="multipart/form-data">
                    @csrf
                <div class="row">
                    <div class="col-12">
                        <div class="row">
                            <div class="col-xl-4 col-lg-5 col-md-5 order-1 order-md-0">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="user-image-section">
                                            <div class="d-flex flex-column gap-4">
                                                {{-- <img class="img-fluid rounded" src="../assets/images/user/avatarxl-6.jpg" alt=""> --}}
                                                <div class="user-info w-100 gap-2 d-flex justify-content-between align-items-center">
                                                    <h3 class="mb-2">{{ $item->name }}</h3>
                                                    <span class="badge bg-light-secondary fw-bold text-uppercase">{{ $item->status }}</span>
                                                </div>
                                                <div class="user-info w-100 gap-2 d-flex justify-content-between align-items-center">
                                                    <h5 class="mb-0">Email</h5>
                                                    <label class="block font-medium text-sm text-gray-700" for="name">
                                                        {{ $item->email }}
                                                    </label>
                                                </div>
                                                <div class="user-info w-100 gap-2 d-flex justify-content-between align-items-center">
                                                    <h5 class="mb-0">Phone No</h5>
                                                    <label class="block font-medium text-sm text-gray-700" for="name">
                                                        {{ $item->phone_no }}
                                                    </label>
                                                </div>
                                                <div class="user-info w-100 gap-2 d-flex justify-content-between align-items-center">
                                                    <h5 class="mb-0">Travel Type</h5>
                                                    <label class="block font-medium text-sm text-gray-700" for="name">
                                                        {{ $item->travel_type }}
                                                    </label>
                                                </div>
                                                <div class="user-info w-100 gap-2 d-flex justify-content-between align-items-center">
                                                    <h5 class="mb-0">Countery</h5>
                                                    <label class="block font-medium text-sm text-gray-700" for="name">
                                                        {{ $item->country }}
                                                    </label>
                                                </div>
                                                <div class="user-info w-100 gap-2 d-flex justify-content-between align-items-center">
                                                    <h5 class="mb-0">Id Proof Type</h5>
                                                    <label class="block font-medium text-sm text-gray-700" for="name">
                                                        <?php
                                                            // Decode the JSON string to an array
                                                            $id_proof_type = json_decode($item['id_proof_type']);
                                                            
                                                            // Check if $id_proof_type is an array
                                                            if (is_array($id_proof_type)) {
                                                                // Loop through each room and display its name
                                                                foreach ($id_proof_type as $room_name) {
                                                                    echo $room_name . ",";
                                                                }
                                                            } else {
                                                                // Handle case where $id_proof_type is not an array (e.g., if JSON decoding fails)
                                                                echo "No rooms found.";
                                                            }
                                                            ?>
                                                    </label>
                                                </div>
                                                <div class="user-info w-100 gap-2 d-flex justify-content-between align-items-center">
                                                    <h5 class="mb-0">Booked Via</h5>
                                                    <label class="block font-medium text-sm text-gray-700" for="name">
                                                        {{ $item->booked_via }}
                                                    </label>
                                                </div>
                                                <div class="user-info w-100 gap-2 d-flex justify-content-between align-items-center">
                                                    <h5 class="mb-0">Billing Instr</h5>
                                                    <label class="block font-medium text-sm text-gray-700" for="name">
                                                        {{ $item->billing_instr }}
                                                    </label>
                                                </div>
                                                <div class="user-info w-100 gap-2 d-flex justify-content-between align-items-center">
                                                    <h5 class="mb-0">Payment Mode</h5>
                                                    <label class="block font-medium text-sm text-gray-700" for="name">
                                                        {{ $item->payment_mode }}
                                                    </label>
                                                </div>
                                                <div class="user-info w-100 gap-2 d-flex justify-content-between align-items-center">
                                                    <h5 class="mb-0">Type Of Room</h5>
                                                    <label class="block font-medium text-sm text-gray-700" for="name">
                                                        <?php
                                                            // Decode the JSON string to an array
                                                            $type_of_rooms = json_decode($item['type_of_room']);
                                                            
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
                                                            ?>
                                                    </label>
                                                </div>
                                                <div class="user-info w-100 gap-2 d-flex justify-content-between align-items-center">
                                                    <h5 class="mb-0">Room</h5>
                                                    <label class="block font-medium text-sm text-gray-700" for="name">
                                                        <?php
                                                            // Decode the JSON string to an array
                                                            $type_of_rooms = json_decode($item['room']);
                                                            
                                                            // Check if $type_of_rooms is an array
                                                            if (is_array($type_of_rooms)) {
                                                                // Loop through each room and display its name
                                                                foreach ($type_of_rooms as $room_name) {
                                                                    echo $room_name . ",";
                                                                }
                                                            } else {
                                                                // Handle case where $type_of_rooms is not an array (e.g., if JSON decoding fails)
                                                                echo "No rooms found.";
                                                            }
                                                            ?>
                                                    </label>
                                                </div>
                                                <div class="user-info w-100 gap-2 d-flex justify-content-between align-items-center">
                                                    <h5 class="mb-0">Room Category</h5>
                                                    <label class="block font-medium text-sm text-gray-700" for="name">
                                                        {{ $item->room_category }}
                                                    </label>
                                                </div>
                                                <div class="user-info w-100 gap-2 d-flex justify-content-between align-items-center">
                                                    <h5 class="mb-0">Occupancy</h5>
                                                    <label class="block font-medium text-sm text-gray-700" for="name">
                                                        {{ $item->occupancy }}
                                                    </label>
                                                </div>
                                                <div class="user-info w-100 gap-2 d-flex justify-content-between align-items-center">
                                                    <h5 class="mb-0">Advanced Amount</h5>
                                                    <label class="block font-medium text-sm text-gray-700" for="name">
                                                        INR {{ $item->addvanced_amount }} /-
                                                    </label>
                                                </div>
                                                <div class="user-info w-100 gap-2 d-flex justify-content-between align-items-center">
                                                    <h5 class="mb-0">Amount</h5>
                                                    <label class="block font-medium text-sm text-gray-700" for="name">
                                                       INR {{ $item->amount }} /-
                                                    </label>
                                                </div>
                                                <div class="user-info w-100 gap-2 d-flex justify-content-between align-items-center">
                                                    <h5 class="mb-0">Booked By</h5>
                                                    <label class="block font-medium text-sm text-gray-700" for="name">
                                                        {{ $item->booked_by }}
                                                    </label>
                                                </div>
                                                <div class="user-info w-100 gap-2 d-flex justify-content-between align-items-center">
                                                    <h5 class="mb-0">Check In</h5>
                                                    <label class="block font-medium text-sm text-gray-700" for="name">
                                                        {{ $item->check_in }}
                                                    </label>
                                                </div>
                                                <div class="user-info w-100 gap-2 d-flex justify-content-between align-items-center">
                                                    <h5 class="mb-0">Check Out</h5>
                                                    <label class="block font-medium text-sm text-gray-700" for="name">
                                                        {{ $item->check_out }}
                                                    </label>
                                                </div>
                                                
                                            </div>
                                        </div>
                                       
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-8 col-lg-7 col-md-7 order-0 order-md-1">
                                <div class="card">
                                    <div class="card-header">
                                        <h5 class="mb-0">Persional Details</h5>
                                    </div>
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label class="form-label" for="exampleSelect1">Customer Name</label>
                                                        <input type="text" name="name" class="form-control @error('name') is-invalid @enderror" placeholder="Customer Name ..." value="{{ $item->name }}">
                                                        @error('name')
                                                            <div class="alert alert-danger">{{ $message }}</div>
                                                        @enderror
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label class="form-label" for="exampleSelect1">Customer Email</label>
                                                        <input type="text" name="email" class="form-control @error('email') is-invalid @enderror" placeholder="Customer Email ..."  value="{{ $item->email }}">
                                                        @error('email')
                                                            <div class="alert alert-danger">{{ $message }}</div>
                                                        @enderror
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label class="form-label" for="exampleSelect1">Customer Phone Number</label>
                                                        <input type="text" name="phone_no" class="form-control @error('phone_no') is-invalid @enderror" placeholder="Customer Phone Number ..."  value="{{ $item->phone_no }}">
                                                        @error('phone_no')
                                                            <div class="alert alert-danger">{{ $message }}</div>
                                                        @enderror
                                                </div>
                                            </div>
                                        </div>
                                                   
                                    </div>
                                </div>
                                <div class="card">
                                    <div class="card-header border-0">
                                        <h5 class="mb-0">Booking Details</h5>
                                    </div>
                                    <div class="card-body">
                                      <div class="row">
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                    <label class="form-label" for="addvanced_amount">Advanced Amount</label>
                                                    <input type="text" name="addvanced_amount" id="" placeholder="Enter Advanced Amount" class="form-control  @error('addvanced_amount') is-invalid @enderror" value="{{ $item->addvanced_amount }}">
                                                    @error('addvanced_amount')
                                                        <div class="alert alert-danger">{{ $message }}</div>
                                                    @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                    <label class="form-label" for="amount">Total Amount</label>
                                                    <input type="text" name="amount" id="" placeholder="Enter Amount" class="form-control  @error('amount') is-invalid @enderror" value="{{ $item->amount }}">
                                                    @error('amount')
                                                        <div class="alert alert-danger">{{ $message }}</div>
                                                    @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                    <label class="form-label" for="food_amount">Food Amount</label>
                                                    <input type="text" name="food_amount" id="" placeholder="Enter Food Amount" class="form-control  @error('food_amount') is-invalid @enderror" value="{{ $item->food_amount }}">
                                                    @error('food_amount')
                                                        <div class="alert alert-danger">{{ $message }}</div>
                                                    @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                    <label class="form-label" for="add_foodgst">Add Food GST (5%)</label><br>
                                                    <input class="form-check-input @error('add_foodgst') is-invalid @enderror" type="checkbox" name="add_foodgst"  @if($item->add_foodgst) checked @endif>
                                                    @error('add_foodgst')
                                                        <div class="alert alert-danger">{{ $message }}</div>
                                                    @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                    <label class="form-label" for="add_gst">Add GST (6% CGST / 6% IGST )</label><br>
                                                    <input class="form-check-input @error('add_gst') is-invalid @enderror" type="checkbox" name="add_gst" @if($item->add_gst) checked @endif>
                                                    @error('add_gst')
                                                        <div class="alert alert-danger">{{ $message }}</div>
                                                    @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                    <label class="form-label" for="check_out">Check Out Date</label>
                                                    <input type="text" name="check_out" id="" class="form-control datepicker flatpickr-input  @error('check_out') is-invalid @enderror" value="{{ $item->check_out }}">
                                                    <input type="hidden" name="room[]" value="{{ $item->room }}">
                                                    <input type="hidden" name="id" value="{{ $item->id }}">
                                                    @error('check_out')
                                                        <div class="alert alert-danger">{{ $message }}</div>
                                                    @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                    <label class="form-label" for="status">Status</label>
                                                    <select name="status" id="" class="form-select  @error('status') is-invalid @enderror">
                                                        <option value="booked" @if($item->status == 'booked') selected @endif>Booked</option>
                                                        <option value="checkout" @if($item->status == 'checkout') selected @endif>Checkout</option>
                                                    </select>
                                                    @error('status')
                                                        <div class="alert alert-danger">{{ $message }}</div>
                                                    @enderror
                                            </div>
                                        </div>
                                      </div>
                                    </div>
                                    <div class="card-footer">
                                        <button class="btn btn-primary me-2">Update</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
            </div>
        </div>
    </div>
    @endforeach
</x-app-layout>
