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
                <div class="col-md-12">
                    <div class="card">
            <form action="{{ route('store-booking')}}" method="POST" enctype="multipart/form-data">
                @csrf
                        <div class="card-header">
                            <h4>Add New Booking</h4>
                        </div>
                        <div class="card-body">
                            <div class="alert alert-primary">
                                <div class="media align-items-center">
                                    <i class="feather icon-alert-circle h2"></i>
                                    <div class="media-body ms-3">
                                        Please Add New Booking Here.
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="form-label" for="exampleSelect1">Customer Name</label>
                                            <input type="text" name="name" class="form-control @error('name') is-invalid @enderror" placeholder="Customer Name ...">
                                            <input type="hidden" name="status" value="booked">
                                            @error('name')
                                                <div class="alert alert-danger">{{ $message }}</div>
                                            @enderror
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="form-label" for="exampleSelect1">Customer Email</label>
                                            <input type="text" name="email" class="form-control @error('email') is-invalid @enderror" placeholder="Customer Email ...">
                                            @error('email')
                                                <div class="alert alert-danger">{{ $message }}</div>
                                            @enderror
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="form-label" for="exampleSelect1">Customer Phone Number</label>
                                            <input type="text" name="phone_no" class="form-control @error('phone_no') is-invalid @enderror" placeholder="Customer Phone Number ...">
                                            @error('phone_no')
                                                <div class="alert alert-danger">{{ $message }}</div>
                                            @enderror
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                            <label class="form-label" for="travel_type">Travel Type</label><br>
                                            <div class="form-check-inline">
                                                <input class="form-check-input" type="radio" name="travel_type" value="Business" id="Business">
                                                <label class="form-check-label" for="Business">
                                                    Business
                                                </label>
                                            </div>
                                            <div class="form-check-inline">
                                                <input class="form-check-input" type="radio" name="travel_type" value="Leisure" id="Leisure">
                                                <label class="form-check-label" for="Leisure">
                                                    Leisure
                                                </label>
                                            </div>
                                            <div class="form-check-inline">
                                                <input class="form-check-input" type="radio" name="travel_type" value="Other" id="Other">
                                                <label class="form-check-label" for="Other">
                                                    Other
                                                </label>
                                            </div>
                                            @error('travel_type')
                                                <div class="alert alert-danger">{{ $message }}</div>
                                            @enderror
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                            <label class="form-label" for="id_proof_type">ID Proof Type</label><br>
                                            <div class="form-check-inline">
                                                <input class="form-check-input" type="checkbox" name="id_proof_type[]" value="Passport" id="Passport">
                                                <label class="form-check-label" for="Passport">
                                                    Passport
                                                </label>
                                            </div>
                                            <div class="form-check-inline">
                                                <input class="form-check-input" type="checkbox" name="id_proof_type[]" value="PAN Card" id="PAN Card">
                                                <label class="form-check-label" for="PAN Card">
                                                    PAN Card
                                                </label>
                                            </div>
                                            <div class="form-check-inline">
                                                <input class="form-check-input" type="checkbox" name="id_proof_type[]" value="D/Licence" id="D/Licence">
                                                <label class="form-check-label" for="D/Licence">
                                                    D/Licence
                                                </label>
                                            </div>
                                            <div class="form-check-inline">
                                                <input class="form-check-input" type="checkbox" name="id_proof_type[]" value="Aadhar Card" id="Aadhar Card">
                                                <label class="form-check-label" for="Aadhar Card">
                                                    Aadhar Card
                                                </label>
                                            </div>
                                            <div class="form-check-inline">
                                                <input class="form-check-input" type="checkbox" name="id_proof_type[]" value="Voter Card" id="Voter Card">
                                                <label class="form-check-label" for="Voter Card">
                                                    Voter Card
                                                </label>
                                            </div>
                                            <div class="form-check-inline">
                                                <input class="form-check-input" type="checkbox" name="id_proof_type[]" value="CO.ID" id="CO.ID">
                                                <label class="form-check-label" for="CO.ID">
                                                    CO.ID
                                                </label>
                                            </div>
                                            @error('id_proof_type')
                                                <div class="alert alert-danger">{{ $message }}</div>
                                            @enderror
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                            <label class="form-label" for="booked_via">Booked VIA</label><br>
                                            <div class="form-check-inline">
                                                <input class="form-check-input" type="radio" name="booked_via" value="Direct" id="Direct">
                                                <label class="form-check-label" for="Direct">
                                                    Direct
                                                </label>
                                            </div>
                                            <div class="form-check-inline">
                                                <input class="form-check-input" type="radio" name="booked_via" value="Walk In" id="Walk In">
                                                <label class="form-check-label" for="Walk In">
                                                    Walk In
                                                </label>
                                            </div>
                                            <div class="form-check-inline">
                                                <input class="form-check-input" type="radio" name="booked_via" value="Online Travel Agency" id="Online Travel Agency">
                                                <label class="form-check-label" for="Online Travel Agency">
                                                    Online Travel Agency
                                                </label>
                                            </div>
                                            @error('booked_via')
                                                <div class="alert alert-danger">{{ $message }}</div>
                                            @enderror
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                            <label class="form-label" for="billing_instr">Billing Instr</label><br>
                                            <div class="form-check-inline">
                                                <input class="form-check-input" type="radio" name="billing_instr" value="Direct" id="Direct">
                                                <label class="form-check-label" for="Direct">
                                                    Direct
                                                </label>
                                            </div>
                                            <div class="form-check-inline">
                                                <input class="form-check-input" type="radio" name="billing_instr" value="BTC" id="BTC">
                                                <label class="form-check-label" for="BTC">
                                                    BTC
                                                </label>
                                            </div>
                                            @error('billing_instr')
                                                <div class="alert alert-danger">{{ $message }}</div>
                                            @enderror
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                            <label class="form-label" for="payment_mode">Payment Mode</label><br>
                                            <div class="form-check-inline">
                                                <input class="form-check-input" type="radio" name="payment_mode" value="CASH" id="CASH">
                                                <label class="form-check-label" for="CASH">
                                                    CASH
                                                </label>
                                            </div>
                                            <div class="form-check-inline">
                                                <input class="form-check-input" type="radio" name="payment_mode" value="CHEQUE" id="CHEQUE">
                                                <label class="form-check-label" for="CHEQUE">
                                                    CHEQUE
                                                </label>
                                            </div>
                                            <div class="form-check-inline">
                                                <input class="form-check-input" type="radio" name="payment_mode" value="C/CARD" id="C/CARD">
                                                <label class="form-check-label" for="C/CARD">
                                                    C/CARD
                                                </label>
                                            </div>
                                            <div class="form-check-inline">
                                                <input class="form-check-input" type="radio" name="payment_mode" value="RTGS/NEFT" id="RTGS/NEFT">
                                                <label class="form-check-label" for="RTGS/NEFT">
                                                    RTGS/NEFT
                                                </label>
                                            </div>
                                            @error('payment_mode')
                                                <div class="alert alert-danger">{{ $message }}</div>
                                            @enderror
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                            <label class="form-label" for="country">Countery</label>
                                            <select name="country" id="single-select" class="form-select  @error('country') is-invalid @enderror"
                                                data-placeholder="--- Select Countery ---">
                                                <option value=""></option>
                                                @foreach ($rcountery as $item)                                                    
                                                    <option value="{{ $item->name }}">{{ $item->name }}</option>
                                                @endforeach
                                            </select>
                                            @error('country')
                                                <div class="alert alert-danger">{{ $message }}</div>
                                            @enderror
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                            <label class="form-label" for="type_of_room">Type Of Room</label>
                                            <select name="type_of_room[]" id="type_of_room-select" class="form-select  @error('type_of_room') is-invalid @enderror"
                                                data-placeholder="--- Select Room Type ---" multiple>
                                                <option value=""></option>
                                                @foreach ($roomCategory as $item)                                                    
                                                    <option value="{{ $item->category_name }}">{{ $item->category_name }}</option>
                                                @endforeach
                                            </select>
                                            @error('type_of_room')
                                                <div class="alert alert-danger">{{ $message }}</div>
                                            @enderror
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                            <label class="form-label" for="room">Room</label>
                                            <select name="room[]" id="room-select" class="form-select  @error('room') is-invalid @enderror"
                                                data-placeholder="--- Select Room ---" multiple>
                                                <option value=""></option>
                                               
                                            </select>
                                            @error('room')
                                                <div class="alert alert-danger">{{ $message }}</div>
                                            @enderror
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                            <label class="form-label" for="room_category">Room Category</label>
                                            <select name="room_category"  class="form-select  @error('room_category') is-invalid @enderror">
                                                <option value="">--- Select Room Category ---</option>
                                                <option value="AC">AC</option>
                                                <option value="NON AC">NON AC</option>                                               
                                            </select>
                                            @error('room_category')
                                                <div class="alert alert-danger">{{ $message }}</div>
                                            @enderror
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                            <label class="form-label" for="occupancy">Occupancy</label>
                                            <select name="occupancy"  class="form-select  @error('occupancy') is-invalid @enderror">
                                                <option value="">--- Select Occupancy ---</option>
                                                <option value="Single">Single</option>
                                                <option value="Double">Double</option>
                                                <option value="EX/PERSON">EX/PERSON</option>                                               
                                            </select>
                                            @error('occupancy')
                                                <div class="alert alert-danger">{{ $message }}</div>
                                            @enderror
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                            <label class="form-label" for="addvanced_amount">Advanced Amount</label>
                                            <input type="text" name="addvanced_amount" id="" placeholder="Enter Advanced Amount" class="form-control  @error('addvanced_amount') is-invalid @enderror">
                                            @error('addvanced_amount')
                                                <div class="alert alert-danger">{{ $message }}</div>
                                            @enderror
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                            <label class="form-label" for="amount">Amount</label>
                                            <input type="text" name="amount" id="" placeholder="Enter Amount" class="form-control  @error('amount') is-invalid @enderror">
                                            @error('amount')
                                                <div class="alert alert-danger">{{ $message }}</div>
                                            @enderror
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                            <label class="form-label" for="booked_by">Booked By</label>
                                            <input type="text" name="booked_by" id="" placeholder="Enter Booked By" class="form-control  @error('booked_by') is-invalid @enderror">
                                            @error('booked_by')
                                                <div class="alert alert-danger">{{ $message }}</div>
                                            @enderror
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                            <label class="form-label" for="check_in">Check In Date</label>
                                            <input type="text" name="check_in" id="" class="form-control datepicker flatpickr-input  @error('check_in') is-invalid @enderror">
                                            @error('check_in')
                                                <div class="alert alert-danger">{{ $message }}</div>
                                            @enderror
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                            <label class="form-label" for="check_out">Check Out Date</label>
                                            <input type="text" name="check_out" id="" class="form-control datepicker flatpickr-input  @error('check_out') is-invalid @enderror">
                                            @error('check_out')
                                                <div class="alert alert-danger">{{ $message }}</div>
                                            @enderror
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card-footer">
                            <button class="btn btn-primary me-2">Submit</button>
                        </div>
                    </form>
                    </div>
                    
                </div>
            </div>
        </div>
    </div>
</div>
<!-- [ Main Content ] end -->
</x-app-layout>
<script>
    $('#single-select').select2({
       theme: "bootstrap-5",
       width: $(this).data('width') ? $(this).data('width') : $(this).hasClass('w-100') ? '100%' : 'style',
       placeholder: $(this).data('placeholder'),
   });
   $('#type_of_room-select').select2({
        theme: "bootstrap-5",
        width: $(this).data('width') ? $(this).data('width') : $(this).hasClass('w-100') ? '100%' : 'style',
        placeholder: $(this).data('placeholder'),
        closeOnSelect: false,
    });

   $('#room-select').select2({
        theme: "bootstrap-5",
        width: $(this).data('width') ? $(this).data('width') : $(this).hasClass('w-100') ? '100%' : 'style',
        placeholder: $(this).data('placeholder'),
        closeOnSelect: false,
    });
    $(document).ready(function(){
    $('#type_of_room-select').on('change', function(){
        var categoryId = $(this).val();
        if(categoryId){
            $.ajax({
                url: '/categories/'+categoryId+'/rooms',
                type: 'GET',
                dataType: 'json',
                success: function(data){
                    $('#room-select').empty();
                    $.each(data, function(key, value){
                        $('#room-select').append('<option value="'+value.room_name+'">'+value.room_name+'</option>');
                    });
                    $('#room-select').selectpicker('refresh'); // Initialize or refresh Bootstrap Select
                }
            });
        }else{
            $('#room-select').empty();
            $('#room-select').selectpicker('refresh'); // Initialize or refresh Bootstrap Select
        }
    });
});
  

</script>