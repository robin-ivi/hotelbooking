<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

    <!-- Favicon icon -->
    <link rel="icon" href="{{ url('') }}/assets/images/favicon.svg" type="image/x-icon" />

        <!-- font css -->
        <link rel="stylesheet" href="{{ url('') }}/assets/fonts/tabler-icons.min.css">
        <link rel="stylesheet" href="{{ url('') }}/assets/fonts/feather.css">
        <link rel="stylesheet" href="{{ url('') }}/assets/fonts/fontawesome.css">
        <link rel="stylesheet" href="{{ url('') }}/assets/fonts/material.css">
        <link rel="stylesheet" href="{{ url('') }}/assets/css/plugins/select2.min.css">
        <link rel="stylesheet" href="{{ url('') }}/assets/css/plugins/select2-bootstrap-5-theme.min.css">
        <link rel="stylesheet" href="{{ url('') }}/assets/css/plugins/flatpickr.min.css">
        <link href="https://cdn.datatables.net/1.10.12/css/jquery.dataTables.min.css" rel="stylesheet" />
        <link href="https://cdn.datatables.net/buttons/1.2.2/css/buttons.dataTables.min.css" rel="stylesheet" />
        <!-- vendor css -->
        <link rel="stylesheet" href="#" id="rtl-style-link">
        <link rel="stylesheet" href="{{ url('') }}/assets/css/style.css" id="main-style-link">
        <!-- Scripts -->

        <!-- Styles -->
        @livewireStyles
    </head>
    <body class="font-sans antialiased">
         <!-- { Pre-loader } start -->
  <div class="loader-bg">
    <div class="loader-track">
      <div class="loader-fill"></div>
    </div>
  </div>
  <!-- { Pre-loader } End -->
       @include('layouts.header');
       @include('layouts.menu');
            <main>
                {{ $slot }}
            </main>
        </div>

        @stack('modals')

        @livewireScripts
        <!-- Required Js -->
<script src="{{ url('') }}/assets/js/plugins/jquery.min.js"></script>
<script src="{{ url('') }}/assets/js/plugins/popper.min.js"></script>
<script src="{{ url('') }}/assets/js/plugins/simplebar.min.js"></script>
<script src="{{ url('') }}/assets/js/plugins/bootstrap.min.js"></script>
<script src="{{ url('') }}/assets/js/plugins/feather.min.js"></script>
<script src="{{ url('') }}/assets/js/main.js"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script src="{{ url('') }}/assets/js/plugins/select2.min.js"></script>
<script src="{{ url('') }}/assets/js/plugins/flatpickr.min.js"></script>
<script src="{{ url('') }}/assets/js/pages/ad-datepicker.js"></script>
<script src="https://cdn.datatables.net/1.10.12/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/buttons/1.2.2/js/dataTables.buttons.min.js"></script>
<script src="https://cdn.datatables.net/buttons/1.2.2/js/buttons.flash.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/2.5.0/jszip.min.js"></script>
<script src="https://cdn.rawgit.com/bpampuch/pdfmake/0.1.18/build/pdfmake.min.js"></script>
<script src="https://cdn.rawgit.com/bpampuch/pdfmake/0.1.18/build/vfs_fonts.js"></script>
<script src="https://cdn.datatables.net/buttons/1.2.2/js/buttons.html5.min.js"></script>
<script src="https://cdn.datatables.net/buttons/1.2.2/js/buttons.print.min.js"></script>

<div class="theme-roller">
  <div class="open-button">
    <button class="btn btn-primary" id="pct-toggler">
      <i data-feather="settings"></i>
    </button>
  </div>
  <div class="theme-roller-content">
    <div class="presets-header bg-primary">
      <h5 class="mb-0 text-white f-w-400">Theme Customizer</h5>
    </div>
    <div class="presets-list">
      <h6 class="mt-2">
        <i data-feather="credit-card" class="me-2"></i>Primary color settings
      </h6>
      <hr class="my-2" />
      <div class="themes-preference">
        <a href="#!" class="" data-value="theme-1"></a>
        <a href="#!" class="" data-value="theme-2"></a>
        <a href="#!" class="" data-value="theme-3"></a>
        <a href="#!" class="" data-value="theme-4"></a>
      </div>
      <hr class="my-2" />
      <h6 class="mt-4">
        <i data-feather="sun" class="me-2"></i>Layout settings
      </h6>
      <hr class="my-2" />
      <div class="form-check form-switch mt-2">
        <input type="checkbox" class="form-check-input"   id="cust-darklayout" />
        <label class="form-check-label f-w-600 pl-1" for="cust-darklayout" >Dark Layout</label>
      </div>
      <h6 class="mt-4">
        <i data-feather="layout" class="me-2"></i>Right To Left
      </h6>
      <hr class="my-2" />
      <div class="form-check form-switch">
        <input type="checkbox" class="form-check-input"   id="cust-rtllayout"/>
        <label class="form-check-label f-w-600 pl-1" for="cust-rtllayout">RTL layout</label>
      </div>
    </div>
  </div>
</div>

<script>
  feather.replace();
  $(document).ready(function() {
  var thtoggle = $("#pct-toggler");
  if (thtoggle.length) {
    thtoggle.on("click", function() {
      var themeRoller = $(".theme-roller");
      if (!themeRoller.hasClass("active")) {
        themeRoller.addClass("active");
      } else {
        themeRoller.removeClass("active");
      }
    });
  }

  var themescolors = $(".themes-preference > a");
  themescolors.on("click", function(event) {
    var targetElement = $(event.target);
    if (targetElement.is("span")) {
      targetElement = targetElement.parent();
    }
    var temp = targetElement.attr("data-value");
    $("body").removeClass(function(index, className) {
      return (className.match(new RegExp("\\btheme-\\S+", "g")) || []).join(" ");
    });
    $("body").addClass(temp);
    localStorage.setItem("themePreference", temp); // Save theme preference color to localStorage
  });

  var custthemebg = $("#cust-rtllayout");
  custthemebg.on("click", function() {
    if (custthemebg.prop("checked")) {
      $("html").attr("dir", "rtl");
      $("html").attr("lang", "ar");
      $("#rtl-style-link").attr("href", "assets/css/style-rtl.css");
      localStorage.setItem("rtlLayout", true);
    } else {
      $("html").removeAttr("dir");
      $("html").removeAttr("lang");
      $("#rtl-style-link").removeAttr("href");
      localStorage.setItem("rtlLayout", false);
    }
  });

  var custdarklayout = $("#cust-darklayout");
  custdarklayout.on("click", function() {
    if (custdarklayout.prop("checked")) {
      $(".brand-link > .b-brand > .logo-lg").attr("src", "assets/images/logo.svg");
      $("#main-style-link").attr("href", "assets/css/style-dark.css");
      localStorage.setItem("darkLayout", true);
    } else {
      $(".brand-link > .b-brand > .logo-lg").attr("src", "assets/images/logo-dark.svg");
      $("#main-style-link").attr("href", "assets/css/style.css");
      localStorage.setItem("darkLayout", false);
    }
  });

  function removeClassByPrefix(node, prefix) {
    $(node).removeClass(function(index, className) {
      return (className.match(new RegExp("\\b" + prefix + "\\S+", "g")) || []).join(" ");
    });
  }

  // Load settings from localStorage
  var storedDarkLayout = localStorage.getItem("darkLayout");
  if (storedDarkLayout === "true") {
    custdarklayout.prop("checked", true);
    $(".brand-link > .b-brand > .logo-lg").attr("src", "assets/images/logo.svg");
    $("#main-style-link").attr("href", "assets/css/style-dark.css");
  }

  var storedThemePreference = localStorage.getItem("themePreference");
  if (storedThemePreference) {
    $("body").removeClass(function(index, className) {
      return (className.match(new RegExp("\\btheme-\\S+", "g")) || []).join(" ");
    });
    $("body").addClass(storedThemePreference);
  }

  // Apply RTL layout on page load
  $(window).on('load', function() {
    var storedRtlLayout = localStorage.getItem("rtlLayout");
    if (storedRtlLayout === "true") {
      custthemebg.prop("checked", true);
      $("html").attr("dir", "rtl");
      $("html").attr("lang", "ar");
      $("#rtl-style-link").attr("href", "assets/css/style-rtl.css");
    }
  });
});

</script>

@if (session('success'))
    <script>
      const Toast = Swal.mixin({
  toast: true,
  position: "top-end",
  showConfirmButton: false,
  timer: 3000,
  timerProgressBar: true,
  didOpen: (toast) => {
    toast.onmouseenter = Swal.stopTimer;
    toast.onmouseleave = Swal.resumeTimer;
  }
});

        $(function(){
          Toast.fire({
  icon: "success",
  title: "{{ session('success') }}"
});
      });
    </script>
@endif
    </body>
</html>
