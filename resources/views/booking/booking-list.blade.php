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
                                <th>Action</th>
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
                                    <a href="view-booking/{{ $item->id }}" class="btn btn-icon p-2">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-edit"><path d="M11 4H4a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2v-7"></path><path d="M18.5 2.5a2.121 2.121 0 0 1 3 3L12 15l-4 1 1-4 9.5-9.5z"></path></svg>
                                    </a>

                                    @if($item['status'] == 'booked')
                                    
                                    @else
                                    <a href="delete-booking/{{ $item->id }}" class="btn btn-icon p-2">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-trash-2"><polyline points="3 6 5 6 21 6"></polyline><path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"></path><line x1="10" y1="11" x2="10" y2="17"></line><line x1="14" y1="11" x2="14" y2="17"></line></svg>
                                    </a>
                                    
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