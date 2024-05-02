

<!DOCTYPE html>
<html class="no-js" lang="en">

<head>
  <!-- Meta Tags -->
  <meta charset="utf-8">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="author" content="Laralink">
  <!-- Site Title -->
  <title>Invoice</title>
  <link rel="stylesheet" href="{{ url('') }}/assets/css/invoice.css">
</head>

<body>
    @foreach ($data as $item)
  <div class="tm_container">
    <div class="tm_invoice_wrap">
      <div class="tm_invoice tm_style1 tm_type2" id="tm_download_section">
        <div class="tm_bars">
          <span class="tm_accent_bg"></span>
          <span class="tm_accent_bg"></span>
          <span class="tm_accent_bg"></span>
        </div>
        <div class="tm_bars tm_type1">
          <span class="tm_accent_bg"></span>
          <span class="tm_accent_bg"></span>
          <span class="tm_accent_bg"></span>
        </div>
        <div class="tm_shape">
          <div class="tm_shape_in tm_accent_bg"></div>
        </div>
        <div class="tm_shape_2 tm_primary_color">
          <div class="tm_shape_2_in tm_accent_color"></div>
        </div>
        <div class="tm_shape_2 tm_type1 tm_primary_color">
          <div class="tm_shape_2_in tm_accent_color"></div>
        </div>
        <!-- <div class="tm_shape_4 tm_primary_bg"></div> -->
        <div class="tm_shape tm_type1">
          <div class="tm_shape_in tm_accent_bg"></div>
        </div>
        <div class="tm_invoice_in">
          <div class="tm_invoice_head tm_align_center tm_mb20">
            <div class="tm_invoice_left">
              <div class="tm_logo"><img src="https://thekrishnayan.cremeclients.com/wp-content/uploads/2024/03/A-1.png" alt="Logo"></div>
            </div>
            <div class="tm_invoice_right tm_text_right">
            </div>
          </div>
          <div class="tm_invoice_info tm_mb20">
            <div class="tm_invoice_info_list">
              <p class="tm_invoice_date tm_m0">Date: <b class="tm_primary_color">01.07.2022</b></p>
              <p class="tm_invoice_number tm_m0">Invoice No: <b class="tm_primary_color">#LL{{ $item->id }}</b></p>
            </div>
          </div>
          <div class="tm_invoice_head tm_mb10">
            <div class="tm_invoice_left">
              <p class="tm_mb2"><b class="tm_primary_color">Invoice To:</b></p>
              <p>
                {{ $item->name }}<br>
                {{ $item->email }}<br>
                {{ $item->phone_no }}
              </p>
            </div>
            <div class="tm_invoice_right">
              <p class="tm_mb2"><b class="tm_primary_color">Pay To:</b></p>
              <p>
                The Krishnayan<br>
                Danish Kunj, Bhopal, MP<br>
                thekrishnayan@gmail.com<br>
                +91 755-4245333
              </p>
            </div>
          </div>
          <div class="tm_table tm_style1 tm_mb30">
            <div class="">
              <div class="tm_table_responsive">
                <table>
                  <thead>
                    <tr>
                      <th class="tm_width_2 tm_medium tm_white_color tm_accent_bg">Room</th>
                      <th class="tm_width_2 tm_medium tm_white_color tm_accent_bg">No of Day</th>
                      <th class="tm_width_2 tm_medium tm_white_color tm_accent_bg">Check In</th>
                      <th class="tm_width_2 tm_medium tm_white_color tm_accent_bg">Check Out</th>
                      <th class="tm_width_2 tm_medium tm_white_color tm_accent_bg tm_text_right">Grand Total</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td class="tm_width_2"> <?php
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
                        ?></td>
                      <td class="tm_width_2">
                        <?php

                        // Define the two dates
                        $date1 = new DateTime( $item->check_in);
                        $date2 = new DateTime( $item->check_out);

                        // Calculate the difference between the two dates
                        $difference = $date2->diff($date1);

                        // Extract the number of days from the difference
                        $num_days = $difference->days;

                        echo $num_days . "Day";
                        ?>

                      </td>
                      <td class="tm_width_2">{{ $item->check_in }}</td>
                      <td class="tm_width_2">{{ $item->check_out }}</td>
                      <td class="tm_width_2 tm_text_right">₹{{ $item->amount }}</td>
                    </tr>
                  </tbody>
                </table>
              </div>
            </div>
            @php
                $price_before_gst = $item->amount; // You can replace this with your actual price

                // Calculate the GST amount
                $gst_percent = 12; // GST percentage
                $gst_amount = ($price_before_gst * $gst_percent) / 100;

                // Calculate the total price including GST
                $total_price = $price_before_gst + $gst_amount;
            @endphp 
            <div class="tm_invoice_footer">
              <div class="tm_left_footer">
                <p class="tm_mb2"><b class="tm_primary_color">Payment info:</b></p>
                <p class="tm_m0">Credit Card - 236***********928 <br>Amount: ₹ {{$total_price}} /-</p>
              </div>
              <div class="tm_right_footer">
                <table>
                  <tbody>
                    <tr>
                      <td class="tm_width_3 tm_primary_color tm_border_none tm_bold">Subtoal</td>
                      <td class="tm_width_3 tm_primary_color tm_text_right tm_border_none tm_bold">₹{{ $item->amount }}</td>
                    </tr>
                    <tr>
                      <td class="tm_width_6 tm_primary_color tm_border_none tm_pt0">Tax <span class="tm_ternary_color">CGST(6%) + IGST(6%)</span></td>
                      <td class="tm_width_2 tm_primary_color tm_text_right tm_border_none tm_pt0">+₹{{$gst_amount}}</td>
                    </tr>
                    <tr class="tm_border_top">
                      <td class="tm_width_2 tm_border_top_0 tm_bold tm_f16 tm_primary_color">Grand Total	</td>
                      <td class="tm_width_4 tm_border_top_0 tm_bold tm_f16 tm_primary_color tm_text_right">₹ {{$total_price}} /-</td>
                    </tr>
                  </tbody>
                </table>
                <div class="tm_shape_3 tm_accent_bg_10"></div>
              </div>
            </div>
          </div>
          <img src="https://raw.githubusercontent.com/robin-ivi/TourTrip-Inovice/main/assets/img/paid.png" alt="Logo" style="width: 110px;margin-top: -170px;margin-left: 115px;">
          <div class="tm_invoice tm_style2 tm_type1 tm_accent_border">
            <div class="tm_bottom_invoice">
              <div class="tm_bottom_invoice_left">
                <p class="tm_m0 tm_f18 tm_accent_color tm_mb5">Thank you for your business.</p>
                <p class="tm_primary_color tm_f12 tm_m0 tm_bold">Terms &amp; Condition</p>
                <p class="tm_m0 tm_f12">IInvoice was created on a computer and is valid without the signature and seal.</p>
              </div>
              <div class="tm_bottom_invoice_right tm_mobile_hide">
                <div class="tm_logo"><img src="https://thekrishnayan.cremeclients.com/wp-content/uploads/2024/03/A-1.png" alt="Logo"></div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="tm_invoice_btns tm_hide_print">
        <a href="javascript:window.print()" class="tm_invoice_btn tm_color1">
          <span class="tm_btn_icon">
            <svg xmlns="http://www.w3.org/2000/svg" class="ionicon" viewBox="0 0 512 512"><path d="M384 368h24a40.12 40.12 0 0040-40V168a40.12 40.12 0 00-40-40H104a40.12 40.12 0 00-40 40v160a40.12 40.12 0 0040 40h24" fill="none" stroke="currentColor" stroke-linejoin="round" stroke-width="32"/><rect x="128" y="240" width="256" height="208" rx="24.32" ry="24.32" fill="none" stroke="currentColor" stroke-linejoin="round" stroke-width="32"/><path d="M384 128v-24a40.12 40.12 0 00-40-40H168a40.12 40.12 0 00-40 40v24" fill="none" stroke="currentColor" stroke-linejoin="round" stroke-width="32"/><circle cx="392" cy="184" r="24" fill='currentColor'/></svg>
          </span>
          <span class="tm_btn_text">Print</span>
        </a>
      </div>
    </div>
  </div>
        
  @endforeach
</body>
</html>