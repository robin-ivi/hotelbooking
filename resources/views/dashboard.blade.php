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
                                              <h2 class="text-white fw-600 mb-1">Hello, <br> {{ Auth::user()->name }}</h2>
                                              <p class="text-white"> Here is what’s happening with your projects today:</p>
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
                                            <h4 class="fw-700 mb-0 text-dark-black">2<span
                                                    class="text-success text-sm fw-700">+55%</span></h4>
                                        </div>
                                        <div class="icon-shape bg-success ">
                                            <i class="ti ti-report-money"></i>
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
                                            <p class="fw-600 mb-1 text-muted">Total Check Out</p>
                                            <h4 class="fw-700 mb-0 text-dark-black">4<span
                                                    class="text-success text-sm fw-700">+3%</span></h4>
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
                                <div class="card-body  rounded border border-danger bg-light-danger">
                                    <div class="d-flex align-items-center">
                                        <div class="numbers flex-grow-1 pe-3">
                                            <p class="fw-600 mb-1 text-muted">Total Available Room</p>
                                            <h4 class="fw-700 mb-0 text-dark-black">1<span
                                                    class="text-danger text-sm fw-700">-2%</span></h4>
                                        </div>
                                        <div class="icon-shape bg-danger ">
                                            <i class="ti ti-click"></i>
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
                                            <h4 class="fw-700 mb-0 text-dark-black">2<span
                                                    class="text-danger text-sm fw-700">+5%</span></h4>
                                        </div>
                                        <div class="icon-shape bg-danger ">
                                            <i class="ti ti-shopping-cart"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xxl-4 col-lg-6 col-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4>Daily Sales</h4>
                                </div>
                                <div class="card-body">
                                    <div id="Sales-chart"></div>
                                </div>
                            </div>
                        </div>
                       
                        <div class="col-xxl-8 col-lg-6 col-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4>Statistics</h4>
                                </div>
                                <div class="card-body">
                                    <div id="traffic-chart"></div>
                                </div>
                            </div>
                        </div>
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
                                                    <th>Project Name</th>
                                                    <th>Start Date</th>
                                                    <th>Due Date</th>
                                                    <th>Status</th>
                                                    <th>Assign</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>1</td>
                                                    <td>Admin v1</td>
                                                    <td>01/01/2017</td>
                                                    <td>26/04/2017</td>
                                                    <td><span class="badge bg-primary">Released</span></td>
                                                    <td>Coderthemes</td>
                                                </tr>
                                                <tr>
                                                    <td>2</td>
                                                    <td>Frontend v1</td>
                                                    <td>01/01/2017</td>
                                                    <td>26/04/2017</td>
                                                    <td><span class="badge bg-success">Released</span></td>
                                                    <td>admin</td>
                                                </tr>
                                                <tr>
                                                    <td>3</td>
                                                    <td>Admin v1.1</td>
                                                    <td>01/05/2017</td>
                                                    <td>10/05/2017</td>
                                                    <td><span class="badge bg-danger">Pending</span></td>
                                                    <td>Coderthemes</td>
                                                </tr>
                                                <tr>
                                                    <td>4</td>
                                                    <td>Frontend v1.1</td>
                                                    <td>01/01/2017</td>
                                                    <td>31/05/2017</td>
                                                    <td><span class="badge bg-info">Work in Progress</span>
                                                    </td>
                                                    <td>admin</td>
                                                </tr>
                                                <tr>
                                                    <td>5</td>
                                                    <td>Admin v1.3</td>
                                                    <td>01/01/2017</td>
                                                    <td>31/05/2017</td>
                                                    <td><span class="badge bg-warning">Coming soon</span></td>
                                                    <td>Coderthemes</td>
                                                </tr>
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
