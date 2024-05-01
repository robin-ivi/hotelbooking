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
                        <div class="card-header">
                            <h4>All Booking Lists</h4>
                        </div>
                        <table id="example" class="table table-styling table-secondary" cellspacing="0" width="100%">
                            <thead>
                              <tr>
                                <th>#</th>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Phone No</th>
                                <th>Room</th>
                                <th>Start date</th>
                                <th>End date</th>
                                <th>Status</th>
                                <th>Action</th>
                              </tr>
                            </thead>
                            <tfoot>
                              <tr>
                                <th>#</th>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Phone No</th>
                                <th>Room</th>
                                <th>Check In date</th>
                                <th>Check Out date</th>
                                <th>Status</th>
                                <th>Invoice</th>
                              </tr>
                            </tfoot>
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
                                    ?>
                                   </td>
                                  <td>{{ $item['check_in'] }}</td>
                                  <td>{{ $item['check_out'] }}</td>
                                  <td>
                                    @if($item['status'] == 'booked')
                                        <span class="badge bg-success text-white fs-18 rounded">Booked</span>
                                    @else
                                        <span class="badge bg-danger text-white fs-18 rounded">Checkout</span>
                                    @endif
                                    </td>
                                  <td>
                                    <a href="view-invoice/{{ $item->id }}" class="btn btn-icon p-2" target="_blank">
                                        <i class="ti ti-receipt"></i>
                                    </a>
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
<!-- [ Main Content ] end -->
</x-app-layout>
<script>
  $(document).ready(function() {
    $('#example').DataTable( {
        dom: 'Bfrtip',
        buttons: [
            'copy', 'excelFlash', 'excel', 'pdf', 'print',{
            text: 'Reload',
            action: function ( e, dt, node, config ) {
                dt.ajax.reload();
            }
        }
        ]
    } );
} );
</script>