<!doctype html>
<html lang="en" data-layout="vertical" data-sidebar="dark" data-sidebar-size="sm-hover" data-preloader="disable" data-bs-theme="light">


<head>
    <link rel="stylesheet" href="https://cdn.datatables.net/1.11.5/css/dataTables.bootstrap5.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/responsive/2.2.9/css/responsive.bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/buttons/2.2.2/css/buttons.dataTables.min.css">
    @include('admin/include.head')
</head>

<body>

    <!-- Begin page -->
    <div id="layout-wrapper">

        @include('admin/include.sidebar')
        <!-- Vertical Overlay-->
        @include('admin/include.header')

        <!-- ============================================================== -->
        <!-- Start right Content here -->
        <!-- ============================================================== -->
        <div class="main-content">

            <div class="page-content">
                <div class="container-fluid">

                    <!-- start page title -->
                    <div class="row">
                        <div class="col-12">
                            <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                                <h4 class="mb-sm-0">Datatables</h4>

                                <div class="page-title-right">
                                    <ol class="breadcrumb m-0">
                                        <li class="breadcrumb-item"><a href="javascript: void(0);">Tables</a></li>
                                        <li class="breadcrumb-item active">Datatables</li>
                                    </ol>
                                </div>

                            </div>
                        </div>
                    </div>
                    <!-- end page title -->

                    <div class="row">
                        <div class="col-lg-12">
                            <div class="card">
                                <div class="card-header">
                                    <h5 class="card-title mb-0">Basic Datatables</h5>
                                </div>
                                <div class="card-body">
                               
                                    <table id="buttons-datatables" class="table table-nowrap table-bordered dt-responsive nowrap table-striped align-middle" style="width:100%">
                                        <thead>
                                            <tr>
                                                <th scope="col" style="width: 10px;">
                                                    <div class="form-check">
                                                        <input class="form-check-input fs-base" type="checkbox" id="checkAll" value="option">
                                                    </div>
                                                </th>
                                                <th data-ordering="false">SR No.</th>
                                                <th data-ordering="false">ID</th>
                                                <th data-ordering="false">Purchase ID</th>
                                                <th data-ordering="false">Title</th>
                                                <th data-ordering="false">User</th>
                                                <th>Assigned To</th>
                                                <th>Created By</th>
                                                <th>Create Date</th>
                                                <th>Status</th>
                                                <th>Priority</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <th scope="row">
                                                    <div class="form-check">
                                                        <input class="form-check-input fs-base" type="checkbox" name="checkAll" value="option1">
                                                    </div>
                                                </th>
                                                <td>01</td>
                                                <td>TBV-452</td>
                                                <td>TBV1400087402</td>
                                                <td><a href="#!">Post launch reminder/ post list</a></td>
                                                <td>Joseph Parker</td>
                                                <td>Alexis Clarke</td>
                                                <td>Joseph Parker</td>
                                                <td>03 Oct, 2021</td>
                                                <td><span class="badge bg-info-subtle text-info">Re-open</span></td>
                                                <td><span class="badge bg-danger">High</span></td>
                                                <td>
                                                    <div class="dropdown d-inline-block">
                                                        <button class="btn btn-subtle-secondary btn-sm dropdown" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                                            <i class="ri-more-fill align-middle"></i>
                                                        </button>
                                                        <ul class="dropdown-menu dropdown-menu-end">
                                                            <li><a href="#!" class="dropdown-item"><i class="ri-eye-fill align-bottom me-2 text-muted"></i> View</a></li>
                                                            <li><a class="dropdown-item edit-item-btn"><i class="ri-pencil-fill align-bottom me-2 text-muted"></i> Edit</a></li>
                                                            <li>
                                                                <a class="dropdown-item remove-item-btn">
                                                                    <i class="ri-delete-bin-fill align-bottom me-2 text-muted"></i> Delete
                                                                </a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <th scope="row">
                                                    <div class="form-check">
                                                        <input class="form-check-input fs-base" type="checkbox" name="checkAll" value="option1">
                                                    </div>
                                                </th>
                                                <td>02</td>
                                                <td>TBV-453</td>
                                                <td>TBV1400087425</td>
                                                <td><a href="#!">Additional Calendar</a></td>
                                                <td>Diana Kohler</td>
                                                <td>Admin</td>
                                                <td>Mary Rucker</td>
                                                <td>05 Oct, 2021</td>
                                                <td><span class="badge bg-secondary-subtle text-secondary">On-Hold</span></td>
                                                <td><span class="badge bg-info">Medium</span></td>
                                                <td>
                                                    <div class="dropdown d-inline-block">
                                                        <button class="btn btn-subtle-secondary btn-sm dropdown" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                                            <i class="ri-more-fill align-middle"></i>
                                                        </button>
                                                        <ul class="dropdown-menu dropdown-menu-end">
                                                            <li><a href="#!" class="dropdown-item"><i class="ri-eye-fill align-bottom me-2 text-muted"></i> View</a></li>
                                                            <li><a class="dropdown-item edit-item-btn"><i class="ri-pencil-fill align-bottom me-2 text-muted"></i> Edit</a></li>
                                                            <li>
                                                                <a class="dropdown-item remove-item-btn">
                                                                    <i class="ri-delete-bin-fill align-bottom me-2 text-muted"></i> Delete
                                                                </a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <th scope="row">
                                                    <div class="form-check">
                                                        <input class="form-check-input fs-base" type="checkbox" name="checkAll" value="option1">
                                                    </div>
                                                </th>
                                                <td>03</td>
                                                <td>TBV-454</td>
                                                <td>TBV1400087438</td>
                                                <td><a href="#!">Make a creating an account profile</a></td>
                                                <td>Tonya Noble</td>
                                                <td>Admin</td>
                                                <td>Tonya Noble</td>
                                                <td>27 April, 2022</td>
                                                <td><span class="badge bg-danger-subtle text-danger">Closed</span></td>
                                                <td><span class="badge bg-success">Low</span></td>
                                                <td>
                                                    <div class="dropdown d-inline-block">
                                                        <button class="btn btn-subtle-secondary btn-sm dropdown" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                                            <i class="ri-more-fill align-middle"></i>
                                                        </button>
                                                        <ul class="dropdown-menu dropdown-menu-end">
                                                            <li><a href="#!" class="dropdown-item"><i class="ri-eye-fill align-bottom me-2 text-muted"></i> View</a></li>
                                                            <li><a class="dropdown-item edit-item-btn"><i class="ri-pencil-fill align-bottom me-2 text-muted"></i> Edit</a></li>
                                                            <li>
                                                                <a class="dropdown-item remove-item-btn">
                                                                    <i class="ri-delete-bin-fill align-bottom me-2 text-muted"></i> Delete
                                                                </a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <th scope="row">
                                                    <div class="form-check">
                                                        <input class="form-check-input fs-base" type="checkbox" name="checkAll" value="option1">
                                                    </div>
                                                </th>
                                                <td>04</td>
                                                <td>TBV-455</td>
                                                <td>TBV1400087748</td>
                                                <td><a href="#!">Apologize for shopping Error!</a></td>
                                                <td>Joseph Parker</td>
                                                <td>Alexis Clarke</td>
                                                <td>Joseph Parker</td>
                                                <td>14 June, 2021</td>
                                                <td><span class="badge bg-warning-subtle text-warning">Inprogress</span></td>
                                                <td><span class="badge bg-info">Medium</span></td>
                                                <td>
                                                    <div class="dropdown d-inline-block">
                                                        <button class="btn btn-subtle-secondary btn-sm dropdown" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                                            <i class="ri-more-fill align-middle"></i>
                                                        </button>
                                                        <ul class="dropdown-menu dropdown-menu-end">
                                                            <li><a href="#!" class="dropdown-item"><i class="ri-eye-fill align-bottom me-2 text-muted"></i> View</a></li>
                                                            <li><a class="dropdown-item edit-item-btn"><i class="ri-pencil-fill align-bottom me-2 text-muted"></i> Edit</a></li>
                                                            <li>
                                                                <a class="dropdown-item remove-item-btn">
                                                                    <i class="ri-delete-bin-fill align-bottom me-2 text-muted"></i> Delete
                                                                </a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <th scope="row">
                                                    <div class="form-check">
                                                        <input class="form-check-input fs-base" type="checkbox" name="checkAll" value="option1">
                                                    </div>
                                                </th>
                                                <td>05</td>
                                                <td>TBV-456</td>
                                                <td>TBV1400087547</td>
                                                <td><a href="#!">Support for theme</a></td>
                                                <td>Donald Palmer</td>
                                                <td>Admin</td>
                                                <td>Donald Palmer</td>
                                                <td>25 June, 2021</td>
                                                <td><span class="badge bg-danger-subtle text-danger">Closed</span></td>
                                                <td><span class="badge bg-success">Low</span></td>
                                                <td>
                                                    <div class="dropdown d-inline-block">
                                                        <button class="btn btn-subtle-secondary btn-sm dropdown" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                                            <i class="ri-more-fill align-middle"></i>
                                                        </button>
                                                        <ul class="dropdown-menu dropdown-menu-end">
                                                            <li><a href="#!" class="dropdown-item"><i class="ri-eye-fill align-bottom me-2 text-muted"></i> View</a></li>
                                                            <li><a class="dropdown-item edit-item-btn"><i class="ri-pencil-fill align-bottom me-2 text-muted"></i> Edit</a></li>
                                                            <li>
                                                                <a class="dropdown-item remove-item-btn">
                                                                    <i class="ri-delete-bin-fill align-bottom me-2 text-muted"></i> Delete
                                                                </a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <th scope="row">
                                                    <div class="form-check">
                                                        <input class="form-check-input fs-base" type="checkbox" name="checkAll" value="option1">
                                                    </div>
                                                </th>
                                                <td>06</td>
                                                <td>TBV-457</td>
                                                <td>TBV1400087245</td>
                                                <td><a href="#!">Benner design for FB & Twitter</a></td>
                                                <td>Mary Rucker</td>
                                                <td>Jennifer Carter</td>
                                                <td>Mary Rucker</td>
                                                <td>14 Aug, 2021</td>
                                                <td><span class="badge bg-warning-subtle text-warning">Inprogress</span></td>
                                                <td><span class="badge bg-info">Medium</span></td>
                                                <td>
                                                    <div class="dropdown d-inline-block">
                                                        <button class="btn btn-subtle-secondary btn-sm dropdown" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                                            <i class="ri-more-fill align-middle"></i>
                                                        </button>
                                                        <ul class="dropdown-menu dropdown-menu-end">
                                                            <li><a href="#!" class="dropdown-item"><i class="ri-eye-fill align-bottom me-2 text-muted"></i> View</a></li>
                                                            <li><a class="dropdown-item edit-item-btn"><i class="ri-pencil-fill align-bottom me-2 text-muted"></i> Edit</a></li>
                                                            <li>
                                                                <a class="dropdown-item remove-item-btn">
                                                                    <i class="ri-delete-bin-fill align-bottom me-2 text-muted"></i> Delete
                                                                </a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <th scope="row">
                                                    <div class="form-check">
                                                        <input class="form-check-input fs-base" type="checkbox" name="checkAll" value="option1">
                                                    </div>
                                                </th>
                                                <td>07</td>
                                                <td>TBV-458</td>
                                                <td>TBV1400087785</td>
                                                <td><a href="#!">Change email option process</a></td>
                                                <td>James Morris</td>
                                                <td>Admin</td>
                                                <td>James Morris</td>
                                                <td>12 March, 2022</td>
                                                <td><span class="badge bg-primary-subtle text-primary">Open</span></td>
                                                <td><span class="badge bg-danger">High</span></td>
                                                <td>
                                                    <div class="dropdown d-inline-block">
                                                        <button class="btn btn-subtle-secondary btn-sm dropdown" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                                            <i class="ri-more-fill align-middle"></i>
                                                        </button>
                                                        <ul class="dropdown-menu dropdown-menu-end">
                                                            <li><a href="#!" class="dropdown-item"><i class="ri-eye-fill align-bottom me-2 text-muted"></i> View</a></li>
                                                            <li><a class="dropdown-item edit-item-btn"><i class="ri-pencil-fill align-bottom me-2 text-muted"></i> Edit</a></li>
                                                            <li>
                                                                <a class="dropdown-item remove-item-btn">
                                                                    <i class="ri-delete-bin-fill align-bottom me-2 text-muted"></i> Delete
                                                                </a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <th scope="row">
                                                    <div class="form-check">
                                                        <input class="form-check-input fs-base" type="checkbox" name="checkAll" value="option1">
                                                    </div>
                                                </th>
                                                <td>08</td>
                                                <td>TBV-460</td>
                                                <td>TBV1400087745</td>
                                                <td><a href="#!">Support for theme</a></td>
                                                <td>Nathan Cole</td>
                                                <td>Nancy Martino</td>
                                                <td>Nathan Cole</td>
                                                <td>28 Feb, 2022</td>
                                                <td><span class="badge bg-secondary-subtle text-secondary">On-Hold</span></td>
                                                <td><span class="badge bg-success">Low</span></td>
                                                <td>
                                                    <div class="dropdown d-inline-block">
                                                        <button class="btn btn-subtle-secondary btn-sm dropdown" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                                            <i class="ri-more-fill align-middle"></i>
                                                        </button>
                                                        <ul class="dropdown-menu dropdown-menu-end">
                                                            <li><a href="#!" class="dropdown-item"><i class="ri-eye-fill align-bottom me-2 text-muted"></i> View</a></li>
                                                            <li><a class="dropdown-item edit-item-btn"><i class="ri-pencil-fill align-bottom me-2 text-muted"></i> Edit</a></li>
                                                            <li>
                                                                <a class="dropdown-item remove-item-btn">
                                                                    <i class="ri-delete-bin-fill align-bottom me-2 text-muted"></i> Delete
                                                                </a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <th scope="row">
                                                    <div class="form-check">
                                                        <input class="form-check-input fs-base" type="checkbox" name="checkAll" value="option1">
                                                    </div>
                                                </th>
                                                <td>09</td>
                                                <td>TBV-461</td>
                                                <td>TBV1400087179</td>
                                                <td><a href="#!">Form submit issue</a></td>
                                                <td>Grace Coles</td>
                                                <td>Admin</td>
                                                <td>Grace Coles</td>
                                                <td>07 Jan, 2022</td>
                                                <td><span class="badge bg-success-subtle text-success">New</span></td>
                                                <td><span class="badge bg-danger">High</span></td>
                                                <td>
                                                    <div class="dropdown d-inline-block">
                                                        <button class="btn btn-subtle-secondary btn-sm dropdown" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                                            <i class="ri-more-fill align-middle"></i>
                                                        </button>
                                                        <ul class="dropdown-menu dropdown-menu-end">
                                                            <li><a href="#!" class="dropdown-item"><i class="ri-eye-fill align-bottom me-2 text-muted"></i> View</a></li>
                                                            <li><a class="dropdown-item edit-item-btn"><i class="ri-pencil-fill align-bottom me-2 text-muted"></i> Edit</a></li>
                                                            <li>
                                                                <a class="dropdown-item remove-item-btn">
                                                                    <i class="ri-delete-bin-fill align-bottom me-2 text-muted"></i> Delete
                                                                </a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <th scope="row">
                                                    <div class="form-check">
                                                        <input class="form-check-input fs-base" type="checkbox" name="checkAll" value="option1">
                                                    </div>
                                                </th>
                                                <td>10</td>
                                                <td>TBV-462</td>
                                                <td>TBV140008856</td>
                                                <td><a href="#!">Edit customer testimonial</a></td>
                                                <td>Freda</td>
                                                <td>Alexis Clarke</td>
                                                <td>Freda</td>
                                                <td>16 Aug, 2021</td>
                                                <td><span class="badge bg-danger-subtle text-danger">Closed</span></td>
                                                <td><span class="badge bg-info">Medium</span></td>
                                                <td>
                                                    <div class="dropdown d-inline-block">
                                                        <button class="btn btn-subtle-secondary btn-sm dropdown" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                                            <i class="ri-more-fill align-middle"></i>
                                                        </button>
                                                        <ul class="dropdown-menu dropdown-menu-end">
                                                            <li><a href="#!" class="dropdown-item"><i class="ri-eye-fill align-bottom me-2 text-muted"></i> View</a></li>
                                                            <li><a class="dropdown-item edit-item-btn"><i class="ri-pencil-fill align-bottom me-2 text-muted"></i> Edit</a></li>
                                                            <li>
                                                                <a class="dropdown-item remove-item-btn">
                                                                    <i class="ri-delete-bin-fill align-bottom me-2 text-muted"></i> Delete
                                                                </a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <th scope="row">
                                                    <div class="form-check">
                                                        <input class="form-check-input fs-base" type="checkbox" name="checkAll" value="option1">
                                                    </div>
                                                </th>
                                                <td>11</td>
                                                <td>TBV-463</td>
                                                <td>TBV1400078031</td>
                                                <td><a href="#!">Ca i have an e-copy invoice</a></td>
                                                <td>Williams</td>
                                                <td>Admin</td>
                                                <td>Williams</td>
                                                <td>24 Feb, 2022</td>
                                                <td><span class="badge bg-primary-subtle text-primary">Open</span></td>
                                                <td><span class="badge bg-success">Low</span></td>
                                                <td>
                                                    <div class="dropdown d-inline-block">
                                                        <button class="btn btn-subtle-secondary btn-sm dropdown" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                                            <i class="ri-more-fill align-middle"></i>
                                                        </button>
                                                        <ul class="dropdown-menu dropdown-menu-end">
                                                            <li><a href="#!" class="dropdown-item"><i class="ri-eye-fill align-bottom me-2 text-muted"></i> View</a></li>
                                                            <li><a class="dropdown-item edit-item-btn"><i class="ri-pencil-fill align-bottom me-2 text-muted"></i> Edit</a></li>
                                                            <li>
                                                                <a class="dropdown-item remove-item-btn">
                                                                    <i class="ri-delete-bin-fill align-bottom me-2 text-muted"></i> Delete
                                                                </a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <th scope="row">
                                                    <div class="form-check">
                                                        <input class="form-check-input fs-base" type="checkbox" name="checkAll" value="option1">
                                                    </div>
                                                </th>
                                                <td>12</td>
                                                <td>TBV-464</td>
                                                <td>TBV1400087416</td>
                                                <td><a href="#!">Brand logo design</a></td>
                                                <td>Richard V.</td>
                                                <td>Admin</td>
                                                <td>Richard V.</td>
                                                <td>16 March, 2021</td>
                                                <td><span class="badge bg-warning-subtle text-warning">Inprogress</span></td>
                                                <td><span class="badge bg-danger">High</span></td>
                                                <td>
                                                    <div class="dropdown d-inline-block">
                                                        <button class="btn btn-subtle-secondary btn-sm dropdown" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                                            <i class="ri-more-fill align-middle"></i>
                                                        </button>
                                                        <ul class="dropdown-menu dropdown-menu-end">
                                                            <li><a href="#!" class="dropdown-item"><i class="ri-eye-fill align-bottom me-2 text-muted"></i> View</a></li>
                                                            <li><a class="dropdown-item edit-item-btn"><i class="ri-pencil-fill align-bottom me-2 text-muted"></i> Edit</a></li>
                                                            <li>
                                                                <a class="dropdown-item remove-item-btn">
                                                                    <i class="ri-delete-bin-fill align-bottom me-2 text-muted"></i> Delete
                                                                </a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <th scope="row">
                                                    <div class="form-check">
                                                        <input class="form-check-input fs-base" type="checkbox" name="checkAll" value="option1">
                                                    </div>
                                                </th>
                                                <td>13</td>
                                                <td>TBV-466</td>
                                                <td>TBV1400089015</td>
                                                <td><a href="#!">Issue with finding information about order ?</a></td>
                                                <td>Olive Gunther</td>
                                                <td>Alexis Clarke</td>
                                                <td>Schaefer</td>
                                                <td>32 March, 2022</td>
                                                <td><span class="badge bg-success-subtle text-success">New</span></td>
                                                <td><span class="badge bg-danger">High</span></td>
                                                <td>
                                                    <div class="dropdown d-inline-block">
                                                        <button class="btn btn-subtle-secondary btn-sm dropdown" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                                            <i class="ri-more-fill align-middle"></i>
                                                        </button>
                                                        <ul class="dropdown-menu dropdown-menu-end">
                                                            <li><a href="#!" class="dropdown-item"><i class="ri-eye-fill align-bottom me-2 text-muted"></i> View</a></li>
                                                            <li><a class="dropdown-item edit-item-btn"><i class="ri-pencil-fill align-bottom me-2 text-muted"></i> Edit</a></li>
                                                            <li>
                                                                <a class="dropdown-item remove-item-btn">
                                                                    <i class="ri-delete-bin-fill align-bottom me-2 text-muted"></i> Delete
                                                                </a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <th scope="row">
                                                    <div class="form-check">
                                                        <input class="form-check-input fs-base" type="checkbox" name="checkAll" value="option1">
                                                    </div>
                                                </th>
                                                <td>14</td>
                                                <td>TBV-467</td>
                                                <td>TBV1400090324</td>
                                                <td><a href="#!">Make a creating an account profile</a></td>
                                                <td>Edwin</td>
                                                <td>Admin</td>
                                                <td>Edwin</td>
                                                <td>05 April, 2022</td>
                                                <td><span class="badge bg-warning-subtle text-warning">Inprogress</span></td>
                                                <td><span class="badge bg-success">Low</span></td>
                                                <td>
                                                    <div class="dropdown d-inline-block">
                                                        <button class="btn btn-subtle-secondary btn-sm dropdown" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                                            <i class="ri-more-fill align-middle"></i>
                                                        </button>
                                                        <ul class="dropdown-menu dropdown-menu-end">
                                                            <li><a href="#!" class="dropdown-item"><i class="ri-eye-fill align-bottom me-2 text-muted"></i> View</a></li>
                                                            <li><a class="dropdown-item edit-item-btn"><i class="ri-pencil-fill align-bottom me-2 text-muted"></i> Edit</a></li>
                                                            <li>
                                                                <a class="dropdown-item remove-item-btn">
                                                                    <i class="ri-delete-bin-fill align-bottom me-2 text-muted"></i> Delete
                                                                </a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div><!--end col-->
                    </div><!--end row-->



                </div>
                <!-- container-fluid -->
            </div>
            <!-- End Page-content -->

            @include('admin/include.footer')
        </div>
        <!-- end main content-->

    </div>
    <!-- END layout-wrapper -->



    <!--start back-to-top-->
    <button class="btn btn-dark btn-icon" id="back-to-top">
        <i class="bi bi-caret-up fs-3xl"></i>
    </button>
    <!--end back-to-top-->

   

    <!-- JAVASCRIPT -->
    <script src="{{asset('assets/libs/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
    <script src="{{asset('assets/libs/simplebar/simplebar.min.js')}}"></script>
    <script src="{{asset('assets/js/plugins.js')}}"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>

    <!--datatable js-->
    <script src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.11.5/js/dataTables.bootstrap5.min.js"></script>
    <script src="https://cdn.datatables.net/responsive/2.2.9/js/dataTables.responsive.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/2.2.2/js/dataTables.buttons.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/2.2.2/js/buttons.print.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/2.2.2/js/buttons.html5.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>

    <script src="{{asset('assets/js/pages/datatables.init.js')}}"></script>
    <script src="{{asset('assets/js/app.js')}}"></script>
</body>

</html>