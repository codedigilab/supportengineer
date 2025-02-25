<!doctype html>
<html lang="en" data-layout="vertical" data-sidebar="dark" data-sidebar-size="sm-hover" data-preloader="disable" data-bs-theme="light">


<head>
<link rel="stylesheet" href="https://cdn.datatables.net/1.11.5/css/dataTables.bootstrap5.min.css">
<!--datatable responsive css-->
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
                                    <table id="example" class="table table-bordered dt-responsive nowrap table-striped align-middle" style="width:100%">
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

                    <div class="row">
                        <div class="col-lg-12">
                            <div class="card">
                                <div class="card-header">
                                    <h5 class="card-title mb-0">Scroll - Vertical</h5>
                                </div>
                                <div class="card-body">
                                    <table id="scroll-vertical" class="table table-bordered dt-responsive nowrap align-middle mdl-data-table" style="width:100%">
                                        <thead>
                                            <tr>
                                                <th>ID</th>
                                                <th>Project</th>
                                                <th>Task</th>
                                                <th>Client Name</th>
                                                <th>Assigned To</th>
                                                <th>Due Date</th>
                                                <th>Status</th>
                                                <th>Priority</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>TBV-452</td>
                                                <td>Symox v1.0.0</td>
                                                <td><a href="#!">Add Dynamic Contact List</a></td>
                                                <td>RH Nichols</td>
                                                <td>
                                                    <div class="avatar-group">
                                                        <a href="javascript: void(0);" class="avatar-group-item" data-img="avatar-3.jpg" data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-placement="top" title="Username">
                                                            <img src="assets/images/users/avatar-3.jpg" alt="" class="rounded-circle avatar-xxs">
                                                        </a>
                                                    </div>
                                                </td>
                                                <td>03 Oct, 2021</td>
                                                <td><span class="badge bg-info-subtle text-info">Re-open</span></td>
                                                <td><span class="badge bg-danger">High</span></td>
                                            </tr>
                                            <tr>
                                                <td>TBV-453</td>
                                                <td>Doot - Chat App Template</td>
                                                <td><a href="#!">Additional Calendar</a></td>
                                                <td>Diana Kohler</td>
                                                <td>
                                                    <div class="avatar-group">
                                                        <a href="javascript: void(0);" class="avatar-group-item" data-img="avatar-4.jpg" data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-placement="top" title="Username">
                                                            <img src="assets/images/users/avatar-4.jpg" alt="" class="rounded-circle avatar-xxs">
                                                        </a>

                                                        <a href="javascript: void(0);" class="avatar-group-item" data-img="avatar-5.jpg" data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-placement="top" title="Username">
                                                            <img src="assets/images/users/avatar-5.jpg" alt="" class="rounded-circle avatar-xxs">
                                                        </a>
                                                    </div>
                                                </td>
                                                <td>05 Oct, 2021</td>
                                                <td><span class="badge bg-secondary-subtle text-secondary">On-Hold</span></td>
                                                <td><span class="badge bg-info">Medium</span></td>
                                            </tr>
                                            <tr>
                                                <td>TBV-454</td>
                                                <td>Qexal - Landing Page</td>
                                                <td><a href="#!">Make a creating an account profile</a></td>
                                                <td>David Nichols</td>
                                                <td>
                                                    <div class="avatar-group">
                                                        <a href="javascript: void(0);" class="avatar-group-item" data-img="avatar-6.jpg" data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-placement="top" title="Username">
                                                            <img src="assets/images/users/avatar-6.jpg" alt="" class="rounded-circle avatar-xxs">
                                                        </a>

                                                        <a href="javascript: void(0);" class="avatar-group-item" data-img="avatar-7.jpg" data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-placement="top" title="Username">
                                                            <img src="assets/images/users/avatar-7.jpg" alt="" class="rounded-circle avatar-xxs">
                                                        </a>

                                                        <a href="javascript: void(0);" class="avatar-group-item" data-img="avatar-8.jpg" data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-placement="top" title="Username">
                                                            <img src="assets/images/users/avatar-8.jpg" alt="" class="rounded-circle avatar-xxs">
                                                        </a>
                                                    </div>
                                                </td>
                                                <td>27 April, 2022</td>
                                                <td><span class="badge bg-danger-subtle text-danger">Closed</span></td>
                                                <td><span class="badge bg-success">Low</span></td>
                                            </tr>
                                            <tr>
                                                <td>TBV-455</td>
                                                <td>Dorsin - Landing Page</td>
                                                <td><a href="#!">Apologize for shopping Error!</a></td>
                                                <td>Tonya Noble</td>
                                                <td>
                                                    <div class="avatar-group">
                                                        <a href="javascript: void(0);" class="avatar-group-item" data-img="avatar-6.jpg" data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-placement="top" title="Username">
                                                            <img src="assets/images/users/avatar-6.jpg" alt="" class="rounded-circle avatar-xxs">
                                                        </a>

                                                        <a href="javascript: void(0);" class="avatar-group-item" data-img="avatar-7.jpg" data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-placement="top" title="Username">
                                                            <img src="assets/images/users/avatar-7.jpg" alt="" class="rounded-circle avatar-xxs">
                                                        </a>
                                                    </div>
                                                </td>
                                                <td>14 June, 2021</td>
                                                <td><span class="badge bg-warning-subtle text-warning">Inprogress</span></td>
                                                <td><span class="badge bg-info">Medium</span></td>
                                            </tr>
                                            <tr>
                                                <td>TBV-456</td>
                                                <td>Minimal - v2.1.0</td>
                                                <td><a href="#!">Support for theme</a></td>
                                                <td>Donald Palmer</td>
                                                <td>
                                                    <div class="avatar-group">
                                                        <a href="javascript: void(0);" class="avatar-group-item" data-img="avatar-2.jpg" data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-placement="top" title="Username">
                                                            <img src="assets/images/users/avatar-2.jpg" alt="" class="rounded-circle avatar-xxs">
                                                        </a>
                                                    </div>
                                                </td>
                                                <td>25 June, 2021</td>
                                                <td><span class="badge bg-danger-subtle text-danger">Closed</span></td>
                                                <td><span class="badge bg-success">Low</span></td>
                                            </tr>
                                            <tr>
                                                <td>TBV-457</td>
                                                <td>Dason - v1.0.0</td>
                                                <td><a href="#!">Benner design for FB & Twitter</a></td>
                                                <td>Jennifer Carter</td>
                                                <td>
                                                    <div class="avatar-group">
                                                        <a href="javascript: void(0);" class="avatar-group-item" data-img="avatar-5.jpg" data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-placement="top" title="Username">
                                                            <img src="assets/images/users/avatar-5.jpg" alt="" class="rounded-circle avatar-xxs">
                                                        </a>

                                                        <a href="javascript: void(0);" class="avatar-group-item" data-img="avatar-6.jpg" data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-placement="top" title="Username">
                                                            <img src="assets/images/users/avatar-6.jpg" alt="" class="rounded-circle avatar-xxs">
                                                        </a>

                                                        <a href="javascript: void(0);" class="avatar-group-item" data-img="avatar-7.jpg" data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-placement="top" title="Username">
                                                            <img src="assets/images/users/avatar-7.jpg" alt="" class="rounded-circle avatar-xxs">
                                                        </a>

                                                        <a href="javascript: void(0);" class="avatar-group-item" data-img="avatar-8.jpg" data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-placement="top" title="Username">
                                                            <img src="assets/images/users/avatar-8.jpg" alt="" class="rounded-circle avatar-xxs">
                                                        </a>
                                                    </div>
                                                </td>
                                                <td>14 Aug, 2021</td>
                                                <td><span class="badge bg-warning-subtle text-warning">Inprogress</span></td>
                                                <td><span class="badge bg-info">Medium</span></td>
                                            </tr>
                                            <tr>
                                                <td>TBV-458</td>
                                                <td>Hybrix v1.6.0</td>
                                                <td><a href="#!">Add datatables</a></td>
                                                <td>James Morris</td>
                                                <td>
                                                    <div class="avatar-group">
                                                        <a href="javascript: void(0);" class="avatar-group-item" data-img="avatar-4.jpg" data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-placement="top" title="Username">
                                                            <img src="assets/images/users/avatar-4.jpg" alt="" class="rounded-circle avatar-xxs">
                                                        </a>

                                                        <a href="javascript: void(0);" class="avatar-group-item" data-img="avatar-5.jpg" data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-placement="top" title="Username">
                                                            <img src="assets/images/users/avatar-5.jpg" alt="" class="rounded-circle avatar-xxs">
                                                        </a>
                                                    </div>
                                                </td>
                                                <td>12 March, 2022</td>
                                                <td><span class="badge bg-primary-subtle text-primary">Open</span></td>
                                                <td><span class="badge bg-danger">High</span></td>
                                            </tr>
                                            <tr>
                                                <td>TBV-460</td>
                                                <td>Skote v2.0.0</td>
                                                <td><a href="#!">Support for theme</a></td>
                                                <td>Nancy Martino</td>
                                                <td>
                                                    <div class="avatar-group">
                                                        <a href="javascript: void(0);" class="avatar-group-item" data-img="avatar-3.jpg" data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-placement="top" title="Username">
                                                            <img src="assets/images/users/avatar-3.jpg" alt="" class="rounded-circle avatar-xxs">
                                                        </a>

                                                        <a href="javascript: void(0);" class="avatar-group-item" data-img="avatar-10.jpg" data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-placement="top" title="Username">
                                                            <img src="assets/images/users/avatar-10.jpg" alt="" class="rounded-circle avatar-xxs">
                                                        </a>

                                                        <a href="javascript: void(0);" class="avatar-group-item" data-img="avatar-9.jpg" data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-placement="top" title="Username">
                                                            <img src="assets/images/users/avatar-9.jpg" alt="" class="rounded-circle avatar-xxs">
                                                        </a>
                                                    </div>
                                                </td>
                                                <td>28 Feb, 2022</td>
                                                <td><span class="badge bg-secondary-subtle text-secondary">On-Hold</span></td>
                                                <td><span class="badge bg-success">Low</span></td>
                                            </tr>
                                            <tr>
                                                <td>TBV-461</td>
                                                <td>Hybrix v1.0.0</td>
                                                <td><a href="#!">Form submit issue</a></td>
                                                <td>Grace Coles</td>
                                                <td>
                                                    <div class="avatar-group">
                                                        <a href="javascript: void(0);" class="avatar-group-item" data-img="avatar-5.jpg" data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-placement="top" title="Username">
                                                            <img src="assets/images/users/avatar-5.jpg" alt="" class="rounded-circle avatar-xxs">
                                                        </a>

                                                        <a href="javascript: void(0);" class="avatar-group-item" data-img="avatar-9.jpg" data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-placement="top" title="Username">
                                                            <img src="assets/images/users/avatar-9.jpg" alt="" class="rounded-circle avatar-xxs">
                                                        </a>

                                                        <a href="javascript: void(0);" class="avatar-group-item" data-img="avatar-10.jpg" data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-placement="top" title="Username">
                                                            <img src="assets/images/users/avatar-10.jpg" alt="" class="rounded-circle avatar-xxs">
                                                        </a>
                                                    </div>
                                                </td>
                                                <td>07 Jan, 2022</td>
                                                <td><span class="badge bg-success-subtle text-success">New</span></td>
                                                <td><span class="badge bg-danger">High</span></td>
                                            </tr>
                                            <tr>
                                                <td>TBV-462</td>
                                                <td>Minimal - v2.2.0</td>
                                                <td><a href="#!">Edit customer testimonial</a></td>
                                                <td>Freda</td>
                                                <td>
                                                    <div class="avatar-group">
                                                        <a href="javascript: void(0);" class="avatar-group-item" data-img="avatar-2.jpg" data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-placement="top" title="Username">
                                                            <img src="assets/images/users/avatar-2.jpg" alt="" class="rounded-circle avatar-xxs">
                                                        </a>
                                                    </div>
                                                </td>
                                                <td>16 Aug, 2021</td>
                                                <td><span class="badge bg-danger-subtle text-danger">Closed</span></td>
                                                <td><span class="badge bg-info">Medium</span></td>
                                            </tr>
                                            <tr>
                                                <td>TBV-454</td>
                                                <td>Qexal - Landing Page</td>
                                                <td><a href="#!">Make a creating an account profile</a></td>
                                                <td>David Nichols</td>
                                                <td>
                                                    <div class="avatar-group">
                                                        <a href="javascript: void(0);" class="avatar-group-item" data-img="avatar-6.jpg" data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-placement="top" title="Username">
                                                            <img src="assets/images/users/avatar-6.jpg" alt="" class="rounded-circle avatar-xxs">
                                                        </a>

                                                        <a href="javascript: void(0);" class="avatar-group-item" data-img="avatar-7.jpg" data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-placement="top" title="Username">
                                                            <img src="assets/images/users/avatar-7.jpg" alt="" class="rounded-circle avatar-xxs">
                                                        </a>

                                                        <a href="javascript: void(0);" class="avatar-group-item" data-img="avatar-8.jpg" data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-placement="top" title="Username">
                                                            <img src="assets/images/users/avatar-8.jpg" alt="" class="rounded-circle avatar-xxs">
                                                        </a>
                                                    </div>
                                                </td>
                                                <td>27 April, 2022</td>
                                                <td><span class="badge bg-danger-subtle text-danger">Closed</span></td>
                                                <td><span class="badge bg-success">Low</span></td>
                                            </tr>
                                            <tr>
                                                <td>TBV-455</td>
                                                <td>Dorsin - Landing Page</td>
                                                <td><a href="#!">Apologize for shopping Error!</a></td>
                                                <td>Tonya Noble</td>
                                                <td>
                                                    <div class="avatar-group">
                                                        <a href="javascript: void(0);" class="avatar-group-item" data-img="avatar-6.jpg" data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-placement="top" title="Username">
                                                            <img src="assets/images/users/avatar-6.jpg" alt="" class="rounded-circle avatar-xxs">
                                                        </a>

                                                        <a href="javascript: void(0);" class="avatar-group-item" data-img="avatar-7.jpg" data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-placement="top" title="Username">
                                                            <img src="assets/images/users/avatar-7.jpg" alt="" class="rounded-circle avatar-xxs">
                                                        </a>
                                                    </div>
                                                </td>
                                                <td>14 June, 2021</td>
                                                <td><span class="badge bg-warning-subtle text-warning">Inprogress</span></td>
                                                <td><span class="badge bg-info">Medium</span></td>
                                            </tr>
                                            <tr>
                                                <td>TBV-456</td>
                                                <td>Minimal - v2.1.0</td>
                                                <td><a href="#!">Support for theme</a></td>
                                                <td>Donald Palmer</td>
                                                <td>
                                                    <div class="avatar-group">
                                                        <a href="javascript: void(0);" class="avatar-group-item" data-img="avatar-2.jpg" data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-placement="top" title="Username">
                                                            <img src="assets/images/users/avatar-2.jpg" alt="" class="rounded-circle avatar-xxs">
                                                        </a>
                                                    </div>
                                                </td>
                                                <td>25 June, 2021</td>
                                                <td><span class="badge bg-danger-subtle text-danger">Closed</span></td>
                                                <td><span class="badge bg-success">Low</span></td>
                                            </tr>
                                            <tr>
                                                <td>TBV-457</td>
                                                <td>Dason - v1.0.0</td>
                                                <td><a href="#!">Benner design for FB & Twitter</a></td>
                                                <td>Jennifer Carter</td>
                                                <td>
                                                    <div class="avatar-group">
                                                        <a href="javascript: void(0);" class="avatar-group-item" data-img="avatar-5.jpg" data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-placement="top" title="Username">
                                                            <img src="assets/images/users/avatar-5.jpg" alt="" class="rounded-circle avatar-xxs">
                                                        </a>

                                                        <a href="javascript: void(0);" class="avatar-group-item" data-img="avatar-6.jpg" data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-placement="top" title="Username">
                                                            <img src="assets/images/users/avatar-6.jpg" alt="" class="rounded-circle avatar-xxs">
                                                        </a>

                                                        <a href="javascript: void(0);" class="avatar-group-item" data-img="avatar-7.jpg" data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-placement="top" title="Username">
                                                            <img src="assets/images/users/avatar-7.jpg" alt="" class="rounded-circle avatar-xxs">
                                                        </a>

                                                        <a href="javascript: void(0);" class="avatar-group-item" data-img="avatar-8.jpg" data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-placement="top" title="Username">
                                                            <img src="assets/images/users/avatar-8.jpg" alt="" class="rounded-circle avatar-xxs">
                                                        </a>
                                                    </div>
                                                </td>
                                                <td>14 Aug, 2021</td>
                                                <td><span class="badge bg-warning-subtle text-warning">Inprogress</span></td>
                                                <td><span class="badge bg-info">Medium</span></td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div><!--end col-->
                    </div><!--end row-->

                    <div class="row">
                        <div class="col-lg-12">
                            <div class="card">
                                <div class="card-header">
                                    <h5 class="card-title mb-0">Scroll - Horizontal</h5>
                                </div>
                                <div class="card-body">
                                    <table id="scroll-horizontal" class="table nowrap align-middle" style="width:100%">
                                        <thead>
                                            <tr>
                                                <th scope="col" style="width: 10px;">
                                                    <div class="form-check">
                                                        <input class="form-check-input fs-base" type="checkbox" id="checkAll01" value="option">
                                                    </div>
                                                </th>
                                                <th>SR No.</th>
                                                <th>ID</th>
                                                <th>Purchase ID</th>
                                                <th>Title</th>
                                                <th>User</th>
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

                    <div class="row">
                        <div class="col-lg-12">
                            <div class="card">
                                <div class="card-header">
                                    <h5 class="card-title mb-0">Alternative Pagination</h5>
                                </div>
                                <div class="card-body">
                                    <table id="alternative-pagination" class="table nowrap dt-responsive align-middle table-hover table-bordered" style="width:100%">
                                        <thead>
                                            <tr>
                                                <th>SR No.</th>
                                                <th>Currency</th>
                                                <th>Price</th>
                                                <th>Pairs</th>
                                                <th>24 High</th>
                                                <th>24 Low</th>
                                                <th>Market Volume</th>
                                                <th>Volume %</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>01</td>
                                                <td>
                                                    <div class="d-flex align-items-center fw-medium">
                                                        <img src="assets/images/svg/crypto-icons/btc.svg" alt="" class="avatar-xxs me-2">
                                                        <a href="javascript:void(0);" class="currency_name">Bitcoin (BTC)</a>
                                                    </div>
                                                </td>
                                                <td>$47,071.60</td>
                                                <td>BTC/USD</td>
                                                <td>$28,722.76</td>
                                                <td>$68,789.63</td>
                                                <td>$888,411,910</td>
                                                <td>
                                                    <h6 class="text-success fs-sm mb-0"><i class="ti ti-trending-up align-middle me-1"></i>1.50%</h6>
                                                </td>
                                                <td>
                                                    <button class="btn btn-sm btn-subtle-info">Trade Now</button>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>02</td>
                                                <td>
                                                    <div class="d-flex align-items-center fw-medium">
                                                        <img src="assets/images/svg/crypto-icons/eth.svg" alt="" class="avatar-xxs me-2">
                                                        <a href="javascript:void(0);" class="currency_name">Ethereum (ETH)</a>
                                                    </div>
                                                </td>
                                                <td>$3,813.14</td>
                                                <td>ETH/USDT</td>
                                                <td>$4,036.24</td>
                                                <td>$3,588.14</td>
                                                <td>$314,520,675</td>
                                                <td>
                                                    <h6 class="text-danger fs-sm mb-0"><i class="ti ti-trending-down align-middle me-1"></i>0.42%</h6>
                                                </td>
                                                <td>
                                                    <button class="btn btn-sm btn-subtle-info">Trade Now</button>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>03</td>
                                                <td>
                                                    <div class="d-flex align-items-center fw-medium">
                                                        <img src="assets/images/svg/crypto-icons/ltc.svg" alt="" class="avatar-xxs me-2">
                                                        <a href="javascript:void(0);" class="currency_name">Litecoin (LTC)</a>
                                                    </div>
                                                </td>
                                                <td>$149.65</td>
                                                <td>LTC/USDT</td>
                                                <td>$412.96</td>
                                                <td>$104.33</td>
                                                <td>$314,520,675</td>
                                                <td>
                                                    <h6 class="text-success fs-sm mb-0"><i class="ti ti-trending-up align-middle me-1"></i>0.89%</h6>
                                                </td>
                                                <td>
                                                    <button class="btn btn-sm btn-subtle-info">Trade Now</button>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>04</td>
                                                <td>
                                                    <div class="d-flex align-items-center fw-medium">
                                                        <img src="assets/images/svg/crypto-icons/xmr.svg" alt="" class="avatar-xxs me-2">
                                                        <a href="javascript:void(0);" class="currency_name">Monero (XMR)</a>
                                                    </div>
                                                </td>
                                                <td>$17,491.16</td>
                                                <td>XRM/USDT</td>
                                                <td>$31,578.35</td>
                                                <td>$8691.75</td>
                                                <td>$9,847,327</td>
                                                <td>
                                                    <h6 class="text-success fs-sm mb-0"><i class="ti ti-trending-up align-middle me-1"></i>1.92%</h6>
                                                </td>
                                                <td>
                                                    <button class="btn btn-sm btn-subtle-info">Trade Now</button>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>05</td>
                                                <td>
                                                    <div class="d-flex align-items-center fw-medium">
                                                        <img src="assets/images/svg/crypto-icons/ant.svg" alt="" class="avatar-xxs me-2">
                                                        <a href="javascript:void(0);" class="currency_name">Aragon (ANT)</a>
                                                    </div>
                                                </td>
                                                <td>$172.93</td>
                                                <td>SOL/USD</td>
                                                <td>$178.37</td>
                                                <td>$172.3</td>
                                                <td>$40,559,274</td>
                                                <td>
                                                    <h6 class="text-danger fs-sm mb-0"><i class="ti ti-trending-down align-middle me-1"></i>2.87%</h6>
                                                </td>
                                                <td>
                                                    <button class="btn btn-sm btn-subtle-info">Trade Now</button>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>06</td>
                                                <td>
                                                    <div class="d-flex align-items-center fw-medium">
                                                        <img src="assets/images/svg/crypto-icons/sol.svg" alt="" class="avatar-xxs me-2">
                                                        <a href="javascript:void(0);" class="currency_name">Solana (SOL)</a>
                                                    </div>
                                                </td>
                                                <td>$17,491.16</td>
                                                <td>XRM/USDT</td>
                                                <td>$31,578.35</td>
                                                <td>$8691.75</td>
                                                <td>$9,847,327</td>
                                                <td>
                                                    <h6 class="text-success fs-sm mb-0"><i class="ti ti-trending-up align-middle me-1"></i>1.92%</h6>
                                                </td>
                                                <td>
                                                    <button class="btn btn-sm btn-subtle-info">Trade Now</button>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>07</td>
                                                <td>
                                                    <div class="d-flex align-items-center fw-medium">
                                                        <img src="assets/images/svg/crypto-icons/fil.svg" alt="" class="avatar-xxs me-2">
                                                        <a href="javascript:void(0);" class="currency_name">Filecoin (FIL)</a>
                                                    </div>
                                                </td>
                                                <td>$13.31</td>
                                                <td>ANT/USD</td>
                                                <td>$13.85</td>
                                                <td>$12.53</td>
                                                <td>$156,209,195.18</td>
                                                <td>
                                                    <h6 class="text-success fs-sm mb-0"><i class="ti ti-trending-up align-middle me-1"></i>3.96%</h6>
                                                </td>
                                                <td>
                                                    <button class="btn btn-sm btn-subtle-info">Trade Now</button>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>08</td>
                                                <td>
                                                    <div class="d-flex align-items-center fw-medium">
                                                        <img src="assets/images/svg/crypto-icons/fil.svg" alt="" class="avatar-xxs me-2">
                                                        <a href="javascript:void(0);" class="currency_name">Filecoin (FIL)</a>
                                                    </div>
                                                </td>
                                                <td>$35.21</td>
                                                <td>FIL/USD</td>
                                                <td>$36.41</td>
                                                <td>$35.03</td>
                                                <td>$374,618,945.51</td>
                                                <td>
                                                    <h6 class="text-danger fs-sm mb-0"><i class="ti ti-trending-down align-middle me-1"></i>0.84%</h6>
                                                </td>
                                                <td>
                                                    <button class="btn btn-sm btn-subtle-info">Trade Now</button>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>09</td>
                                                <td>
                                                    <div class="d-flex align-items-center fw-medium">
                                                        <img src="assets/images/svg/crypto-icons/aave.svg" alt="" class="avatar-xxs me-2">
                                                        <a href="javascript:void(0);" class="currency_name">Aave (AAVE)</a>
                                                    </div>
                                                </td>
                                                <td>$275.47</td>
                                                <td>AAVE/USDT</td>
                                                <td>$277.11</td>
                                                <td>$255.01</td>
                                                <td>$156,209,195.18</td>
                                                <td>
                                                    <h6 class="text-success fs-sm mb-0"><i class="ti ti-trending-up align-middle me-1"></i>8.20%</h6>
                                                </td>
                                                <td>
                                                    <button class="btn btn-sm btn-subtle-info">Trade Now</button>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>10</td>
                                                <td>
                                                    <div class="d-flex align-items-center fw-medium">
                                                        <img src="assets/images/svg/crypto-icons/ada.svg" alt="" class="avatar-xxs me-2">
                                                        <a href="javascript:void(0);" class="currency_name">Cardano (ADA)</a>
                                                    </div>
                                                </td>
                                                <td>$1.35</td>
                                                <td>ADA/USD</td>
                                                <td>$1.39</td>
                                                <td>$1.32</td>
                                                <td>$880,387,980.14</td>
                                                <td>
                                                    <h6 class="text-danger fs-sm mb-0"><i class="ti ti-trending-down align-middle me-1"></i>0.42%</h6>
                                                </td>
                                                <td>
                                                    <button class="btn btn-sm btn-subtle-info">Trade Now</button>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>11</td>
                                                <td>
                                                    <div class="d-flex align-items-center fw-medium">
                                                        <img src="assets/images/svg/crypto-icons/fil.svg" alt="" class="avatar-xxs me-2">
                                                        <a href="javascript:void(0);" class="currency_name">Filecoin (FIL)</a>
                                                    </div>
                                                </td>
                                                <td>$35.21</td>
                                                <td>FIL/USD</td>
                                                <td>$36.41</td>
                                                <td>$35.03</td>
                                                <td>$374,618,945.51</td>
                                                <td>
                                                    <h6 class="text-danger fs-sm mb-0"><i class="ti ti-trending-down align-middle me-1"></i>0.84%</h6>
                                                </td>
                                                <td>
                                                    <button class="btn btn-sm btn-subtle-info">Trade Now</button>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>12</td>
                                                <td>
                                                    <div class="d-flex align-items-center fw-medium">
                                                        <img src="assets/images/svg/crypto-icons/aave.svg" alt="" class="avatar-xxs me-2">
                                                        <a href="javascript:void(0);" class="currency_name">Aave (AAVE)</a>
                                                    </div>
                                                </td>
                                                <td>$275.47</td>
                                                <td>AAVE/USDT</td>
                                                <td>$277.11</td>
                                                <td>$255.01</td>
                                                <td>$156,209,195.18</td>
                                                <td>
                                                    <h6 class="text-success fs-sm mb-0"><i class="ti ti-trending-up align-middle me-1"></i>8.20%</h6>
                                                </td>
                                                <td>
                                                    <button class="btn btn-sm btn-subtle-info">Trade Now</button>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>13</td>
                                                <td>
                                                    <div class="d-flex align-items-center fw-medium">
                                                        <img src="assets/images/svg/crypto-icons/ada.svg" alt="" class="avatar-xxs me-2">
                                                        <a href="javascript:void(0);" class="currency_name">Cardano (ADA)</a>
                                                    </div>
                                                </td>
                                                <td>$1.35</td>
                                                <td>ADA/USD</td>
                                                <td>$1.39</td>
                                                <td>$1.32</td>
                                                <td>$880,387,980.14</td>
                                                <td>
                                                    <h6 class="text-danger fs-sm mb-0"><i class="ti ti-trending-down align-middle me-1"></i>0.42%</h6>
                                                </td>
                                                <td>
                                                    <button class="btn btn-sm btn-subtle-info">Trade Now</button>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div><!--end col-->
                    </div><!--end row-->


                    <div class="row">
                        <div class="col-lg-12">
                            <div class="card">
                                <div class="card-header d-flex align-items-center">
                                    <h5 class="card-title mb-0 flex-grow-1">Add Rows</h5>
                                    <div>
                                        <button id="addRow" class="btn btn-primary">Add New Row</button>
                                    </div>
                                </div>
                                <div class="card-body">

                                    <table id="add-rows" class="table table-nowrap dt-responsive table-bordered display" style="width:100%">
                                        <thead>
                                            <tr>
                                                <th>Column 1</th>
                                                <th>Column 2</th>
                                                <th>Column 3</th>
                                                <th>Column 4</th>
                                                <th>Column 5</th>
                                            </tr>
                                        </thead>
                                    </table>
                                </div>
                            </div>
                        </div><!--end col-->
                    </div><!--end row-->

                    <div class="row">
                        <div class="col-lg-12">
                            <div class="card">
                                <div class="card-header">
                                    <h5 class="card-title mb-0">Fixed Header Datatables</h5>
                                </div>
                                <div class="card-body">
                                    <table id="fixed-header" class="table table-bordered dt-responsive nowrap table-striped align-middle" style="width:100%">
                                        <thead>
                                            <tr>
                                                <th scope="col" style="width: 10px;">
                                                    <div class="form-check">
                                                        <input class="form-check-input fs-base" type="checkbox" id="checkAll02" value="option">
                                                    </div>
                                                </th>
                                                <th>SR No.</th>
                                                <th>ID</th>
                                                <th>Purchase ID</th>
                                                <th>Title</th>
                                                <th>User</th>
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
                        </div>
                    </div><!--end row-->

                    <div class="row">
                        <div class="col-lg-12">
                            <div class="card">
                                <div class="card-header">
                                    <h5 class="card-title mb-0">Modal Data Datatables</h5>
                                </div>
                                <div class="card-body">
                                    <table id="model-datatables" class="table table-bordered nowrap table-striped align-middle" style="width:100%">
                                        <thead>
                                            <tr>
                                                <th>SR No.</th>
                                                <th>ID</th>
                                                <th>Purchase ID</th>
                                                <th>Title</th>
                                                <th>User</th>
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
                        </div>
                    </div><!--end row-->

                    <div class="row">
                        <div class="col-lg-12">
                            <div class="card">
                                <div class="card-header">
                                    <h5 class="card-title mb-0">Buttons Datatables</h5>
                                </div>
                                <div class="card-body">
                                    <div class="table-responsive">
                                        <table id="buttons-datatables" class="display table table-bordered table-nowrap" style="width:100%">
                                            <thead>
                                                <tr>
                                                    <th>Name</th>
                                                    <th>Position</th>
                                                    <th>Office</th>
                                                    <th>Age</th>
                                                    <th>Start date</th>
                                                    <th>Salary</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>Tiger Nixon</td>
                                                    <td>System Architect</td>
                                                    <td>Edinburgh</td>
                                                    <td>61</td>
                                                    <td>2011/04/25</td>
                                                    <td>$320,800</td>
                                                </tr>
                                                <tr>
                                                    <td>Garrett Winters</td>
                                                    <td>Accountant</td>
                                                    <td>Tokyo</td>
                                                    <td>63</td>
                                                    <td>2011/07/25</td>
                                                    <td>$170,750</td>
                                                </tr>
                                                <tr>
                                                    <td>Ashton Cox</td>
                                                    <td>Junior Technical Author</td>
                                                    <td>San Francisco</td>
                                                    <td>66</td>
                                                    <td>2009/01/12</td>
                                                    <td>$86,000</td>
                                                </tr>
                                                <tr>
                                                    <td>Cedric Kelly</td>
                                                    <td>Senior Javascript Developer</td>
                                                    <td>Edinburgh</td>
                                                    <td>22</td>
                                                    <td>2012/03/29</td>
                                                    <td>$433,060</td>
                                                </tr>
                                                <tr>
                                                    <td>Airi Satou</td>
                                                    <td>Accountant</td>
                                                    <td>Tokyo</td>
                                                    <td>33</td>
                                                    <td>2008/11/28</td>
                                                    <td>$162,700</td>
                                                </tr>
                                                <tr>
                                                    <td>Brielle Williamson</td>
                                                    <td>Integration Specialist</td>
                                                    <td>New York</td>
                                                    <td>61</td>
                                                    <td>2012/12/02</td>
                                                    <td>$372,000</td>
                                                </tr>
                                                <tr>
                                                    <td>Herrod Chandler</td>
                                                    <td>Sales Assistant</td>
                                                    <td>San Francisco</td>
                                                    <td>59</td>
                                                    <td>2012/08/06</td>
                                                    <td>$137,500</td>
                                                </tr>
                                                <tr>
                                                    <td>Rhona Davidson</td>
                                                    <td>Integration Specialist</td>
                                                    <td>Tokyo</td>
                                                    <td>55</td>
                                                    <td>2010/10/14</td>
                                                    <td>$327,900</td>
                                                </tr>
                                                <tr>
                                                    <td>Colleen Hurst</td>
                                                    <td>Javascript Developer</td>
                                                    <td>San Francisco</td>
                                                    <td>39</td>
                                                    <td>2009/09/15</td>
                                                    <td>$205,500</td>
                                                </tr>
                                                <tr>
                                                    <td>Sonya Frost</td>
                                                    <td>Software Engineer</td>
                                                    <td>Edinburgh</td>
                                                    <td>23</td>
                                                    <td>2008/12/13</td>
                                                    <td>$103,600</td>
                                                </tr>
                                                <tr>
                                                    <td>Jena Gaines</td>
                                                    <td>Office Manager</td>
                                                    <td>London</td>
                                                    <td>30</td>
                                                    <td>2008/12/19</td>
                                                    <td>$90,560</td>
                                                </tr>
                                                <tr>
                                                    <td>Quinn Flynn</td>
                                                    <td>Support Lead</td>
                                                    <td>Edinburgh</td>
                                                    <td>22</td>
                                                    <td>2013/03/03</td>
                                                    <td>$342,000</td>
                                                </tr>
                                                <tr>
                                                    <td>Charde Marshall</td>
                                                    <td>Regional Director</td>
                                                    <td>San Francisco</td>
                                                    <td>36</td>
                                                    <td>2008/10/16</td>
                                                    <td>$470,600</td>
                                                </tr>
                                                <tr>
                                                    <td>Haley Kennedy</td>
                                                    <td>Senior Marketing Designer</td>
                                                    <td>London</td>
                                                    <td>43</td>
                                                    <td>2012/12/18</td>
                                                    <td>$313,500</td>
                                                </tr>
                                                <tr>
                                                    <td>Tatyana Fitzpatrick</td>
                                                    <td>Regional Director</td>
                                                    <td>London</td>
                                                    <td>19</td>
                                                    <td>2010/03/17</td>
                                                    <td>$385,750</td>
                                                </tr>
                                                <tr>
                                                    <td>Michael Silva</td>
                                                    <td>Marketing Designer</td>
                                                    <td>London</td>
                                                    <td>66</td>
                                                    <td>2012/11/27</td>
                                                    <td>$198,500</td>
                                                </tr>
                                                <tr>
                                                    <td>Paul Byrd</td>
                                                    <td>Chief Financial Officer (CFO)</td>
                                                    <td>New York</td>
                                                    <td>64</td>
                                                    <td>2010/06/09</td>
                                                    <td>$725,000</td>
                                                </tr>
                                                <tr>
                                                    <td>Gloria Little</td>
                                                    <td>Systems Administrator</td>
                                                    <td>New York</td>
                                                    <td>59</td>
                                                    <td>2009/04/10</td>
                                                    <td>$237,500</td>
                                                </tr>
                                                <tr>
                                                    <td>Bradley Greer</td>
                                                    <td>Software Engineer</td>
                                                    <td>London</td>
                                                    <td>41</td>
                                                    <td>2012/10/13</td>
                                                    <td>$132,000</td>
                                                </tr>
                                                <tr>
                                                    <td>Dai Rios</td>
                                                    <td>Personnel Lead</td>
                                                    <td>Edinburgh</td>
                                                    <td>35</td>
                                                    <td>2012/09/26</td>
                                                    <td>$217,500</td>
                                                </tr>
                                                <tr>
                                                    <td>Jenette Caldwell</td>
                                                    <td>Development Lead</td>
                                                    <td>New York</td>
                                                    <td>30</td>
                                                    <td>2011/09/03</td>
                                                    <td>$345,000</td>
                                                </tr>
                                                <tr>
                                                    <td>Yuri Berry</td>
                                                    <td>Chief Marketing Officer (CMO)</td>
                                                    <td>New York</td>
                                                    <td>40</td>
                                                    <td>2009/06/25</td>
                                                    <td>$675,000</td>
                                                </tr>
                                                <tr>
                                                    <td>Caesar Vance</td>
                                                    <td>Pre-Sales Support</td>
                                                    <td>New York</td>
                                                    <td>21</td>
                                                    <td>2011/12/12</td>
                                                    <td>$106,450</td>
                                                </tr>
                                                <tr>
                                                    <td>Doris Wilder</td>
                                                    <td>Sales Assistant</td>
                                                    <td>Sydney</td>
                                                    <td>23</td>
                                                    <td>2010/09/20</td>
                                                    <td>$85,600</td>
                                                </tr>

                                                <tr>
                                                    <td>Gavin Cortez</td>
                                                    <td>Team Leader</td>
                                                    <td>San Francisco</td>
                                                    <td>22</td>
                                                    <td>2008/10/26</td>
                                                    <td>$235,500</td>
                                                </tr>
                                                <tr>
                                                    <td>Martena Mccray</td>
                                                    <td>Post-Sales support</td>
                                                    <td>Edinburgh</td>
                                                    <td>46</td>
                                                    <td>2011/03/09</td>
                                                    <td>$324,050</td>
                                                </tr>
                                                <tr>
                                                    <td>Unity Butler</td>
                                                    <td>Marketing Designer</td>
                                                    <td>San Francisco</td>
                                                    <td>47</td>
                                                    <td>2009/12/09</td>
                                                    <td>$85,675</td>
                                                </tr>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div><!--end row-->


                    <div class="row">
                        <div class="col-lg-12">
                            <div class="card">
                                <div class="card-header">
                                    <h5 class="card-title mb-0">Ajax Datatables</h5>
                                </div>
                                <div class="card-body">
                                    <table id="ajax-datatables" class="display table table-bordered dt-responsive" style="width:100%">
                                        <thead>
                                            <tr>
                                                <th>Name</th>
                                                <th>Position</th>
                                                <th>Office</th>
                                                <th>Extn.</th>
                                                <th>Start date</th>
                                                <th>Salary</th>
                                            </tr>
                                        </thead>
                                        <tfoot>
                                            <tr>
                                                <th>Name</th>
                                                <th>Position</th>
                                                <th>Office</th>
                                                <th>Extn.</th>
                                                <th>Start date</th>
                                                <th>Salary</th>
                                            </tr>
                                        </tfoot>
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

    <!--preloader-->
    <div id="preloader">
        <div id="status">
            <div class="spinner-border text-primary avatar-sm" role="status">
                <span class="visually-hidden">Loading...</span>
            </div>
        </div>
    </div>

    <div class="customizer-setting d-none d-md-block">
        <div class="btn btn-info p-2 text-uppercase rounded-end-0 shadow-lg" data-bs-toggle="offcanvas" data-bs-target="#theme-settings-offcanvas" aria-controls="theme-settings-offcanvas">
            <i class="bi bi-gear mb-1"></i> Customizer
        </div>
    </div>

    <!-- Theme Settings -->
    <div class="offcanvas offcanvas-end border-0" tabindex="-1" id="theme-settings-offcanvas">
        <div class="d-flex align-items-center bg-primary bg-gradient p-3 offcanvas-header">
            <div class="me-2">
                <h6 class="mb-1 fs-lg text-white">Vixon Builder</h6>
                <p class="text-white fs-md text-opacity-75 mb-0">Choose your themes & layouts etc.</p>
            </div>

            <button type="button" class="btn-close btn-close-white ms-auto" id="customizerclose-btn" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>
        <div class="offcanvas-body p-0">
            <div data-simplebar class="h-100">
                <div class="p-4">
                    <h6 class="fs-md mb-1">Layout</h6>
                    <p class="text-muted fs-sm">Choose your layout</p>

                    <div class="row">
                        <div class="col-4">
                            <div class="form-check card-radio">
                                <input id="customizer-layout01" name="data-layout" type="radio" value="vertical" class="form-check-input">
                                <label class="form-check-label p-0 avatar-md w-100" for="customizer-layout01">
                                    <span class="d-flex gap-1 h-100">
                                        <span class="flex-shrink-0">
                                            <span class="bg-light d-flex h-100 flex-column gap-1 p-1">
                                                <span class="d-block p-1 px-2 bg-primary-subtle rounded mb-2"></span>
                                                <span class="d-block p-1 px-2 pb-0 bg-primary-subtle"></span>
                                                <span class="d-block p-1 px-2 pb-0 bg-primary-subtle"></span>
                                                <span class="d-block p-1 px-2 pb-0 bg-primary-subtle"></span>
                                            </span>
                                        </span>
                                        <span class="flex-grow-1">
                                            <span class="d-flex h-100 flex-column">
                                                <span class="bg-light d-block p-1"></span>
                                                <span class="bg-light d-block p-1 mt-auto"></span>
                                            </span>
                                        </span>
                                    </span>
                                </label>
                            </div>
                            <h5 class="fs-sm text-center fw-medium mt-2">Vertical</h5>
                        </div>
                        <div class="col-4">
                            <div class="form-check card-radio">
                                <input id="customizer-layout02" name="data-layout" type="radio" value="horizontal" class="form-check-input">
                                <label class="form-check-label p-0 avatar-md w-100" for="customizer-layout02">
                                    <span class="d-flex h-100 flex-column gap-1">
                                        <span class="bg-light d-flex p-1 gap-1 align-items-center">
                                            <span class="d-block p-1 bg-primary-subtle rounded me-1"></span>
                                            <span class="d-block p-1 pb-0 px-2 bg-primary-subtle ms-auto"></span>
                                            <span class="d-block p-1 pb-0 px-2 bg-primary-subtle"></span>
                                        </span>
                                        <span class="bg-light d-block p-1"></span>
                                        <span class="bg-light d-block p-1 mt-auto"></span>
                                    </span>
                                </label>
                            </div>
                            <h5 class="fs-sm text-center fw-medium mt-2">Horizontal</h5>
                        </div>
                        <div class="col-4">
                            <div class="form-check card-radio">
                                <input id="customizer-layout03" name="data-layout" type="radio" value="twocolumn" class="form-check-input">
                                <label class="form-check-label p-0 avatar-md w-100" for="customizer-layout03">
                                    <span class="d-flex gap-1 h-100">
                                        <span class="flex-shrink-0">
                                            <span class="bg-light d-flex h-100 flex-column gap-1">
                                                <span class="d-block p-1 bg-primary-subtle mb-2"></span>
                                                <span class="d-block p-1 pb-0 bg-primary-subtle"></span>
                                                <span class="d-block p-1 pb-0 bg-primary-subtle"></span>
                                                <span class="d-block p-1 pb-0 bg-primary-subtle"></span>
                                            </span>
                                        </span>
                                        <span class="flex-shrink-0">
                                            <span class="bg-light d-flex h-100 flex-column gap-1 p-1">
                                                <span class="d-block p-1 px-2 pb-0 bg-primary-subtle"></span>
                                                <span class="d-block p-1 px-2 pb-0 bg-primary-subtle"></span>
                                                <span class="d-block p-1 px-2 pb-0 bg-primary-subtle"></span>
                                                <span class="d-block p-1 px-2 pb-0 bg-primary-subtle"></span>
                                            </span>
                                        </span>
                                        <span class="flex-grow-1">
                                            <span class="d-flex h-100 flex-column">
                                                <span class="bg-light d-block p-1"></span>
                                                <span class="bg-light d-block p-1 mt-auto"></span>
                                            </span>
                                        </span>
                                    </span>
                                </label>
                            </div>
                            <h5 class="fs-sm text-center fw-medium mt-2">Two Column</h5>
                        </div>
                        <!-- end col -->
                    </div>

                    <h6 class="mt-4 fs-md mb-1">Color Scheme</h6>
                    <p class="text-muted fs-sm">Choose Light or Dark Scheme.</p>

                    <div class="colorscheme-cardradio">
                        <div class="row g-3">
                            <div class="col-6">
                                <div class="form-check card-radio">
                                    <input class="form-check-input" type="radio" name="data-bs-theme" id="layout-mode-light" value="light">
                                    <label class="form-check-label p-3 bg-white text-body" for="layout-mode-light">
                                        Light Mode
                                    </label>
                                </div>
                                <h5 class="fs-sm text-center fw-medium mt-2">Light</h5>
                            </div>

                            <div class="col-6">
                                <div class="form-check card-radio">
                                    <input class="form-check-input" type="radio" name="data-bs-theme" id="layout-mode-dark" value="dark">
                                    <label class="form-check-label p-3 bg-dark text-white" for="layout-mode-dark">
                                        Dark Mode
                                    </label>
                                </div>
                                <h5 class="fs-sm text-center fw-medium mt-2">Dark</h5>
                            </div>
                        </div>
                    </div>

                    <div id="layout-width">
                        <h6 class="mt-4 fs-md mb-1">Layout Width</h6>
                        <p class="text-muted fs-sm">Choose Fluid or Boxed layout.</p>

                        <div class="row">
                            <div class="col-4">
                                <div class="form-check card-radio">
                                    <input class="form-check-input" type="radio" name="data-layout-width" id="layout-width-fluid" value="fluid">
                                    <label class="form-check-label p-0 avatar-md w-100" for="layout-width-fluid">
                                        <span class="d-flex gap-1 h-100">
                                            <span class="flex-shrink-0">
                                                <span class="bg-light d-flex h-100 flex-column gap-1 p-1">
                                                    <span class="d-block p-1 px-2 bg-primary-subtle rounded mb-2"></span>
                                                    <span class="d-block p-1 px-2 pb-0 bg-primary-subtle"></span>
                                                    <span class="d-block p-1 px-2 pb-0 bg-primary-subtle"></span>
                                                    <span class="d-block p-1 px-2 pb-0 bg-primary-subtle"></span>
                                                </span>
                                            </span>
                                            <span class="flex-grow-1">
                                                <span class="d-flex h-100 flex-column">
                                                    <span class="bg-light d-block p-1"></span>
                                                    <span class="bg-light d-block p-1 mt-auto"></span>
                                                </span>
                                            </span>
                                        </span>
                                    </label>
                                </div>
                                <h5 class="fs-sm text-center fw-medium mt-2">Fluid</h5>
                            </div>
                            <div class="col-4">
                                <div class="form-check card-radio">
                                    <input class="form-check-input" type="radio" name="data-layout-width" id="layout-width-boxed" value="boxed">
                                    <label class="form-check-label p-0 avatar-md w-100 px-2" for="layout-width-boxed">
                                        <span class="d-flex gap-1 h-100 border-start border-end">
                                            <span class="flex-shrink-0">
                                                <span class="bg-light d-flex h-100 flex-column gap-1 p-1">
                                                    <span class="d-block p-1 px-2 bg-primary-subtle rounded mb-2"></span>
                                                    <span class="d-block p-1 px-2 pb-0 bg-primary-subtle"></span>
                                                    <span class="d-block p-1 px-2 pb-0 bg-primary-subtle"></span>
                                                    <span class="d-block p-1 px-2 pb-0 bg-primary-subtle"></span>
                                                </span>
                                            </span>
                                            <span class="flex-grow-1">
                                                <span class="d-flex h-100 flex-column">
                                                    <span class="bg-light d-block p-1"></span>
                                                    <span class="bg-light d-block p-1 mt-auto"></span>
                                                </span>
                                            </span>
                                        </span>
                                    </label>
                                </div>
                                <h5 class="fs-sm text-center fw-medium mt-2">Boxed</h5>
                            </div>
                        </div>
                    </div>

                    <div id="layout-position">
                        <h6 class="mt-4 fs-md mb-1">Layout Position</h6>
                        <p class="text-muted fs-sm">Choose Fixed or Scrollable Layout Position.</p>

                        <div class="btn-group radio" role="group">
                            <input type="radio" class="btn-check" name="data-layout-position" id="layout-position-fixed" value="fixed">
                            <label class="btn btn-light w-sm" for="layout-position-fixed">Fixed</label>

                            <input type="radio" class="btn-check" name="data-layout-position" id="layout-position-scrollable" value="scrollable">
                            <label class="btn btn-light w-sm ms-0" for="layout-position-scrollable">Scrollable</label>
                        </div>
                    </div>

                    <h6 class="mt-4 fs-md mb-1">Topbar Color</h6>
                    <p class="text-muted fs-sm">Choose Topbar Color.</p>

                    <div class="row">
                        <div class="col-4">
                            <div class="form-check card-radio">
                                <input class="form-check-input" type="radio" name="data-topbar" id="topbar-color-warning" value="warning">
                                <label class="form-check-label p-0 avatar-md w-100" for="topbar-color-warning">
                                    <span class="d-flex gap-1 h-100">
                                        <span class="flex-shrink-0">
                                            <span class="bg-light d-flex h-100 flex-column gap-1 p-1">
                                                <span class="d-block p-1 px-2 bg-primary-subtle rounded mb-2"></span>
                                                <span class="d-block p-1 px-2 pb-0 bg-primary-subtle"></span>
                                                <span class="d-block p-1 px-2 pb-0 bg-primary-subtle"></span>
                                                <span class="d-block p-1 px-2 pb-0 bg-primary-subtle"></span>
                                            </span>
                                        </span>
                                        <span class="flex-grow-1">
                                            <span class="d-flex h-100 flex-column">
                                                <span class="bg-warning-subtle d-block p-1"></span>
                                                <span class="bg-light d-block p-1 mt-auto"></span>
                                            </span>
                                        </span>
                                    </span>
                                </label>
                            </div>
                            <h5 class="fs-sm text-center fw-medium mt-2">Warning</h5>
                        </div>
                        <div class="col-4">
                            <div class="form-check card-radio">
                                <input class="form-check-input" type="radio" name="data-topbar" id="topbar-color-danger" value="danger">
                                <label class="form-check-label p-0 avatar-md w-100" for="topbar-color-danger">
                                    <span class="d-flex gap-1 h-100">
                                        <span class="flex-shrink-0">
                                            <span class="bg-light d-flex h-100 flex-column gap-1 p-1">
                                                <span class="d-block p-1 px-2 bg-primary-subtle rounded mb-2"></span>
                                                <span class="d-block p-1 px-2 pb-0 bg-primary-subtle"></span>
                                                <span class="d-block p-1 px-2 pb-0 bg-primary-subtle"></span>
                                                <span class="d-block p-1 px-2 pb-0 bg-primary-subtle"></span>
                                            </span>
                                        </span>
                                        <span class="flex-grow-1">
                                            <span class="d-flex h-100 flex-column">
                                                <span class="bg-danger-subtle d-block p-1"></span>
                                                <span class="bg-light d-block p-1 mt-auto"></span>
                                            </span>
                                        </span>
                                    </span>
                                </label>
                            </div>
                            <h5 class="fs-sm text-center fw-medium mt-2">Danger</h5>
                        </div>
                        <div class="col-4">
                            <div class="form-check card-radio">
                                <input class="form-check-input" type="radio" name="data-topbar" id="topbar-color-success" value="success">
                                <label class="form-check-label p-0 avatar-md w-100" for="topbar-color-success">
                                    <span class="d-flex gap-1 h-100">
                                        <span class="flex-shrink-0">
                                            <span class="bg-light d-flex h-100 flex-column gap-1 p-1">
                                                <span class="d-block p-1 px-2 bg-primary-subtle rounded mb-2"></span>
                                                <span class="d-block p-1 px-2 pb-0 bg-primary-subtle"></span>
                                                <span class="d-block p-1 px-2 pb-0 bg-primary-subtle"></span>
                                                <span class="d-block p-1 px-2 pb-0 bg-primary-subtle"></span>
                                            </span>
                                        </span>
                                        <span class="flex-grow-1">
                                            <span class="d-flex h-100 flex-column">
                                                <span class="bg-success-subtle d-block p-1"></span>
                                                <span class="bg-light d-block p-1 mt-auto"></span>
                                            </span>
                                        </span>
                                    </span>
                                </label>
                            </div>
                            <h5 class="fs-sm text-center fw-medium mt-2">Success</h5>
                        </div>
                    </div>

                    <div id="sidebar-size">
                        <h6 class="mt-4 fs-md mb-1">Sidebar Size</h6>
                        <p class="text-muted fs-sm">Choose a size of Sidebar.</p>

                        <div class="row">
                            <div class="col-4">
                                <div class="form-check sidebar-setting card-radio">
                                    <input class="form-check-input" type="radio" name="data-sidebar-size" id="sidebar-size-default" value="lg">
                                    <label class="form-check-label p-0 avatar-md w-100" for="sidebar-size-default">
                                        <span class="d-flex gap-1 h-100">
                                            <span class="flex-shrink-0">
                                                <span class="bg-light d-flex h-100 flex-column gap-1 p-1">
                                                    <span class="d-block p-1 px-2 bg-primary-subtle rounded mb-2"></span>
                                                    <span class="d-block p-1 px-2 pb-0 bg-primary-subtle"></span>
                                                    <span class="d-block p-1 px-2 pb-0 bg-primary-subtle"></span>
                                                    <span class="d-block p-1 px-2 pb-0 bg-primary-subtle"></span>
                                                </span>
                                            </span>
                                            <span class="flex-grow-1">
                                                <span class="d-flex h-100 flex-column">
                                                    <span class="bg-light d-block p-1"></span>
                                                    <span class="bg-light d-block p-1 mt-auto"></span>
                                                </span>
                                            </span>
                                        </span>
                                    </label>
                                </div>
                                <h5 class="fs-sm text-center fw-medium mt-2">Default</h5>
                            </div>

                            <div class="col-4">
                                <div class="form-check sidebar-setting card-radio">
                                    <input class="form-check-input" type="radio" name="data-sidebar-size" id="sidebar-size-compact" value="md">
                                    <label class="form-check-label p-0 avatar-md w-100" for="sidebar-size-compact">
                                        <span class="d-flex gap-1 h-100">
                                            <span class="flex-shrink-0">
                                                <span class="bg-light d-flex h-100 flex-column gap-1 p-1">
                                                    <span class="d-block p-1 bg-primary-subtle rounded mb-2"></span>
                                                    <span class="d-block p-1 pb-0 bg-primary-subtle"></span>
                                                    <span class="d-block p-1 pb-0 bg-primary-subtle"></span>
                                                    <span class="d-block p-1 pb-0 bg-primary-subtle"></span>
                                                </span>
                                            </span>
                                            <span class="flex-grow-1">
                                                <span class="d-flex h-100 flex-column">
                                                    <span class="bg-light d-block p-1"></span>
                                                    <span class="bg-light d-block p-1 mt-auto"></span>
                                                </span>
                                            </span>
                                        </span>
                                    </label>
                                </div>
                                <h5 class="fs-sm text-center fw-medium mt-2">Compact</h5>
                            </div>

                            <div class="col-4">
                                <div class="form-check sidebar-setting card-radio">
                                    <input class="form-check-input" type="radio" name="data-sidebar-size" id="sidebar-size-small" value="sm">
                                    <label class="form-check-label p-0 avatar-md w-100" for="sidebar-size-small">
                                        <span class="d-flex gap-1 h-100">
                                            <span class="flex-shrink-0">
                                                <span class="bg-light d-flex h-100 flex-column gap-1">
                                                    <span class="d-block p-1 bg-primary-subtle mb-2"></span>
                                                    <span class="d-block p-1 pb-0 bg-primary-subtle"></span>
                                                    <span class="d-block p-1 pb-0 bg-primary-subtle"></span>
                                                    <span class="d-block p-1 pb-0 bg-primary-subtle"></span>
                                                </span>
                                            </span>
                                            <span class="flex-grow-1">
                                                <span class="d-flex h-100 flex-column">
                                                    <span class="bg-light d-block p-1"></span>
                                                    <span class="bg-light d-block p-1 mt-auto"></span>
                                                </span>
                                            </span>
                                        </span>
                                    </label>
                                </div>
                                <h5 class="fs-sm text-center fw-medium mt-2">Small (Icon View)</h5>
                            </div>

                            <div class="col-4">
                                <div class="form-check sidebar-setting card-radio">
                                    <input class="form-check-input" type="radio" name="data-sidebar-size" id="sidebar-size-small-hover" value="sm-hover">
                                    <label class="form-check-label p-0 avatar-md w-100" for="sidebar-size-small-hover">
                                        <span class="d-flex gap-1 h-100">
                                            <span class="flex-shrink-0">
                                                <span class="bg-light d-flex h-100 flex-column gap-1">
                                                    <span class="d-block p-1 bg-primary-subtle mb-2"></span>
                                                    <span class="d-block p-1 pb-0 bg-primary-subtle"></span>
                                                    <span class="d-block p-1 pb-0 bg-primary-subtle"></span>
                                                    <span class="d-block p-1 pb-0 bg-primary-subtle"></span>
                                                </span>
                                            </span>
                                            <span class="flex-grow-1">
                                                <span class="d-flex h-100 flex-column">
                                                    <span class="bg-light d-block p-1"></span>
                                                    <span class="bg-light d-block p-1 mt-auto"></span>
                                                </span>
                                            </span>
                                        </span>
                                    </label>
                                </div>
                                <h5 class="fs-sm text-center fw-medium mt-2">Small Hover View</h5>
                            </div>
                        </div>
                    </div>

                    <div id="sidebar-view">
                        <h6 class="mt-4 fs-md mb-1">Sidebar View</h6>
                        <p class="text-muted fs-sm">Choose Default or Detached Sidebar view.</p>

                        <div class="row">
                            <div class="col-4">
                                <div class="form-check sidebar-setting card-radio">
                                    <input class="form-check-input" type="radio" name="data-layout-style" id="sidebar-view-default" value="default">
                                    <label class="form-check-label p-0 avatar-md w-100" for="sidebar-view-default">
                                        <span class="d-flex gap-1 h-100">
                                            <span class="flex-shrink-0">
                                                <span class="bg-light d-flex h-100 flex-column gap-1 p-1">
                                                    <span class="d-block p-1 px-2 bg-primary-subtle rounded mb-2"></span>
                                                    <span class="d-block p-1 px-2 pb-0 bg-primary-subtle"></span>
                                                    <span class="d-block p-1 px-2 pb-0 bg-primary-subtle"></span>
                                                    <span class="d-block p-1 px-2 pb-0 bg-primary-subtle"></span>
                                                </span>
                                            </span>
                                            <span class="flex-grow-1">
                                                <span class="d-flex h-100 flex-column">
                                                    <span class="bg-light d-block p-1"></span>
                                                    <span class="bg-light d-block p-1 mt-auto"></span>
                                                </span>
                                            </span>
                                        </span>
                                    </label>
                                </div>
                                <h5 class="fs-sm text-center fw-medium mt-2">Default</h5>
                            </div>
                            <div class="col-4">
                                <div class="form-check sidebar-setting card-radio">
                                    <input class="form-check-input" type="radio" name="data-layout-style" id="sidebar-view-detached" value="detached">
                                    <label class="form-check-label p-0 avatar-md w-100" for="sidebar-view-detached">
                                        <span class="d-flex h-100 flex-column">
                                            <span class="bg-light d-flex p-1 gap-1 align-items-center px-2">
                                                <span class="d-block p-1 bg-primary-subtle rounded me-1"></span>
                                                <span class="d-block p-1 pb-0 px-2 bg-primary-subtle ms-auto"></span>
                                                <span class="d-block p-1 pb-0 px-2 bg-primary-subtle"></span>
                                            </span>
                                            <span class="d-flex gap-1 h-100 p-1 px-2">
                                                <span class="flex-shrink-0">
                                                    <span class="bg-light d-flex h-100 flex-column gap-1 p-1">
                                                        <span class="d-block p-1 px-2 pb-0 bg-primary-subtle"></span>
                                                        <span class="d-block p-1 px-2 pb-0 bg-primary-subtle"></span>
                                                        <span class="d-block p-1 px-2 pb-0 bg-primary-subtle"></span>
                                                    </span>
                                                </span>
                                            </span>
                                            <span class="bg-light d-block p-1 mt-auto px-2"></span>
                                        </span>
                                    </label>
                                </div>
                                <h5 class="fs-sm text-center fw-medium mt-2">Detached</h5>
                            </div>
                        </div>
                    </div>
                    <div id="sidebar-color">
                        <h6 class="mt-4 fs-md mb-1">Sidebar Color</h6>
                        <p class="text-muted fs-sm">Choose a color of Sidebar.</p>

                        <div class="row">
                            <div class="col-4">
                                <div class="form-check sidebar-setting card-radio" data-bs-toggle="collapse" data-bs-target="#collapseBgGradient.show">
                                    <input class="form-check-input" type="radio" name="data-sidebar" id="sidebar-color-light" value="light">
                                    <label class="form-check-label p-0 avatar-md w-100" for="sidebar-color-light">
                                        <span class="d-flex gap-1 h-100">
                                            <span class="flex-shrink-0">
                                                <span class="bg-white border-end d-flex h-100 flex-column gap-1 p-1">
                                                    <span class="d-block p-1 px-2 bg-primary-subtle rounded mb-2"></span>
                                                    <span class="d-block p-1 px-2 pb-0 bg-primary-subtle"></span>
                                                    <span class="d-block p-1 px-2 pb-0 bg-primary-subtle"></span>
                                                    <span class="d-block p-1 px-2 pb-0 bg-primary-subtle"></span>
                                                </span>
                                            </span>
                                            <span class="flex-grow-1">
                                                <span class="d-flex h-100 flex-column">
                                                    <span class="bg-light d-block p-1"></span>
                                                    <span class="bg-light d-block p-1 mt-auto"></span>
                                                </span>
                                            </span>
                                        </span>
                                    </label>
                                </div>
                                <h5 class="fs-sm text-center fw-medium mt-2">Light</h5>
                            </div>
                            <div class="col-4">
                                <div class="form-check sidebar-setting card-radio" data-bs-toggle="collapse" data-bs-target="#collapseBgGradient.show">
                                    <input class="form-check-input" type="radio" name="data-sidebar" id="sidebar-color-dark" value="dark">
                                    <label class="form-check-label p-0 avatar-md w-100" for="sidebar-color-dark">
                                        <span class="d-flex gap-1 h-100">
                                            <span class="flex-shrink-0">
                                                <span class="bg-primary d-flex h-100 flex-column gap-1 p-1">
                                                    <span class="d-block p-1 px-2 bg-light-subtle rounded mb-2"></span>
                                                    <span class="d-block p-1 px-2 pb-0 bg-light-subtle"></span>
                                                    <span class="d-block p-1 px-2 pb-0 bg-light-subtle"></span>
                                                    <span class="d-block p-1 px-2 pb-0 bg-light-subtle"></span>
                                                </span>
                                            </span>
                                            <span class="flex-grow-1">
                                                <span class="d-flex h-100 flex-column">
                                                    <span class="bg-light d-block p-1"></span>
                                                    <span class="bg-light d-block p-1 mt-auto"></span>
                                                </span>
                                            </span>
                                        </span>
                                    </label>
                                </div>
                                <h5 class="fs-sm text-center fw-medium mt-2">Dark</h5>
                            </div>
                            <div class="col-4">
                                <button class="btn btn-link avatar-md w-100 p-0 overflow-hidden border collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseBgGradient" aria-expanded="false" aria-controls="collapseBgGradient">
                                    <span class="d-flex gap-1 h-100">
                                        <span class="flex-shrink-0">
                                            <span class="bg-vertical-gradient d-flex h-100 flex-column gap-1 p-1">
                                                <span class="d-block p-1 px-2 bg-light-subtle rounded mb-2"></span>
                                                <span class="d-block p-1 px-2 pb-0 bg-light-subtle"></span>
                                                <span class="d-block p-1 px-2 pb-0 bg-light-subtle"></span>
                                                <span class="d-block p-1 px-2 pb-0 bg-light-subtle"></span>
                                            </span>
                                        </span>
                                        <span class="flex-grow-1">
                                            <span class="d-flex h-100 flex-column">
                                                <span class="bg-light d-block p-1"></span>
                                                <span class="bg-light d-block p-1 mt-auto"></span>
                                            </span>
                                        </span>
                                    </span>
                                </button>
                                <h5 class="fs-sm text-center fw-medium mt-2">Gradient</h5>
                            </div>
                        </div>
                        <!-- end row -->

                        <div class="collapse" id="collapseBgGradient">
                            <div class="d-flex gap-2 flex-wrap img-switch p-2 px-3 bg-light rounded">

                                <div class="form-check sidebar-setting card-radio">
                                    <input class="form-check-input" type="radio" name="data-sidebar" id="sidebar-color-gradient" value="gradient">
                                    <label class="form-check-label p-0 avatar-xs rounded-circle" for="sidebar-color-gradient">
                                        <span class="avatar-title rounded-circle bg-vertical-gradient"></span>
                                    </label>
                                </div>
                                <div class="form-check sidebar-setting card-radio">
                                    <input class="form-check-input" type="radio" name="data-sidebar" id="sidebar-color-gradient-2" value="gradient-2">
                                    <label class="form-check-label p-0 avatar-xs rounded-circle" for="sidebar-color-gradient-2">
                                        <span class="avatar-title rounded-circle bg-vertical-gradient-2"></span>
                                    </label>
                                </div>
                                <div class="form-check sidebar-setting card-radio">
                                    <input class="form-check-input" type="radio" name="data-sidebar" id="sidebar-color-gradient-3" value="gradient-3">
                                    <label class="form-check-label p-0 avatar-xs rounded-circle" for="sidebar-color-gradient-3">
                                        <span class="avatar-title rounded-circle bg-vertical-gradient-3"></span>
                                    </label>
                                </div>
                                <div class="form-check sidebar-setting card-radio">
                                    <input class="form-check-input" type="radio" name="data-sidebar" id="sidebar-color-gradient-4" value="gradient-4">
                                    <label class="form-check-label p-0 avatar-xs rounded-circle" for="sidebar-color-gradient-4">
                                        <span class="avatar-title rounded-circle bg-vertical-gradient-4"></span>
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div id="sidebar-img">
                        <h6 class="mt-4 fw-semibold fs-base">Sidebar Images</h6>
                        <p class="text-muted fs-sm">Choose a image of Sidebar.</p>

                        <div class="d-flex gap-2 flex-wrap img-switch">
                            <div class="form-check sidebar-setting card-radio">
                                <input class="form-check-input" type="radio" name="data-sidebar-image" id="sidebarimg-none" value="none">
                                <label class="form-check-label p-0 avatar-sm h-auto" for="sidebarimg-none">
                                    <span class="avatar-md w-auto bg-light d-flex align-items-center justify-content-center">
                                        <i class="ri-close-fill fs-3xl"></i>
                                    </span>
                                </label>
                            </div>

                            <div class="form-check sidebar-setting card-radio">
                                <input class="form-check-input" type="radio" name="data-sidebar-image" id="sidebarimg-01" value="img-1">
                                <label class="form-check-label p-0 avatar-sm h-auto" for="sidebarimg-01">
                                    <img src="assets/images/sidebar/img-sm-1.jpg" alt="" class="avatar-md w-auto object-cover">
                                </label>
                            </div>

                            <div class="form-check sidebar-setting card-radio">
                                <input class="form-check-input" type="radio" name="data-sidebar-image" id="sidebarimg-02" value="img-2">
                                <label class="form-check-label p-0 avatar-sm h-auto" for="sidebarimg-02">
                                    <img src="assets/images/sidebar/img-sm-2.jpg" alt="" class="avatar-md w-auto object-cover">
                                </label>
                            </div>
                            <div class="form-check sidebar-setting card-radio">
                                <input class="form-check-input" type="radio" name="data-sidebar-image" id="sidebarimg-03" value="img-3">
                                <label class="form-check-label p-0 avatar-sm h-auto" for="sidebarimg-03">
                                    <img src="assets/images/sidebar/img-sm-3.jpg" alt="" class="avatar-md w-auto object-cover">
                                </label>
                            </div>
                            <div class="form-check sidebar-setting card-radio">
                                <input class="form-check-input" type="radio" name="data-sidebar-image" id="sidebarimg-04" value="img-4">
                                <label class="form-check-label p-0 avatar-sm h-auto" for="sidebarimg-04">
                                    <img src="assets/images/sidebar/img-sm-4.jpg" alt="" class="avatar-md w-auto object-cover">
                                </label>
                            </div>
                        </div>
                    </div>

                    <div id="preloader-menu">
                        <h6 class="mt-4 fw-semibold fs-base">Preloader</h6>
                        <p class="text-muted fs-sm">Choose a preloader.</p>

                        <div class="row">
                            <div class="col-4">
                                <div class="form-check sidebar-setting card-radio">
                                    <input class="form-check-input" type="radio" name="data-preloader" id="preloader-view-custom" value="enable">
                                    <label class="form-check-label p-0 avatar-md w-100" for="preloader-view-custom">
                                        <span class="d-flex gap-1 h-100">
                                            <span class="flex-shrink-0">
                                                <span class="bg-light d-flex h-100 flex-column gap-1 p-1">
                                                    <span class="d-block p-1 px-2 bg-primary-subtle rounded mb-2"></span>
                                                    <span class="d-block p-1 px-2 pb-0 bg-primary-subtle"></span>
                                                    <span class="d-block p-1 px-2 pb-0 bg-primary-subtle"></span>
                                                    <span class="d-block p-1 px-2 pb-0 bg-primary-subtle"></span>
                                                </span>
                                            </span>
                                            <span class="flex-grow-1">
                                                <span class="d-flex h-100 flex-column">
                                                    <span class="bg-light d-block p-1"></span>
                                                    <span class="bg-light d-block p-1 mt-auto"></span>
                                                </span>
                                            </span>
                                        </span>
                                        <!-- <div id="preloader"> -->
                                        <span class="d-flex align-items-center justify-content-center">
                                            <span class="spinner-border text-primary avatar-xxs m-auto" role="status">
                                                <span class="visually-hidden">Loading...</span>
                                            </span>
                                        </span>
                                        <!-- </div> -->
                                    </label>
                                </div>
                                <h5 class="fs-sm text-center fw-medium mt-2">Enable</h5>
                            </div>
                            <div class="col-4">
                                <div class="form-check sidebar-setting card-radio">
                                    <input class="form-check-input" type="radio" name="data-preloader" id="preloader-view-none" value="disable">
                                    <label class="form-check-label p-0 avatar-md w-100" for="preloader-view-none">
                                        <span class="d-flex gap-1 h-100">
                                            <span class="flex-shrink-0">
                                                <span class="bg-light d-flex h-100 flex-column gap-1 p-1">
                                                    <span class="d-block p-1 px-2 bg-primary-subtle rounded mb-2"></span>
                                                    <span class="d-block p-1 px-2 pb-0 bg-primary-subtle"></span>
                                                    <span class="d-block p-1 px-2 pb-0 bg-primary-subtle"></span>
                                                    <span class="d-block p-1 px-2 pb-0 bg-primary-subtle"></span>
                                                </span>
                                            </span>
                                            <span class="flex-grow-1">
                                                <span class="d-flex h-100 flex-column">
                                                    <span class="bg-light d-block p-1"></span>
                                                    <span class="bg-light d-block p-1 mt-auto"></span>
                                                </span>
                                            </span>
                                        </span>
                                    </label>
                                </div>
                                <h5 class="fs-sm text-center fw-medium mt-2">Disable</h5>
                            </div>
                        </div>

                    </div><!-- end preloader-menu -->
                </div>
            </div>

        </div>
        <div class="offcanvas-footer border-top p-3 text-center">
            <div class="row">
                <div class="col-6">
                    <button type="button" class="btn btn-light w-100" id="reset-layout">Reset</button>
                </div>
                <div class="col-6">
                    <a href="#!" target="_blank" class="btn btn-primary w-100">Buy Now</a>
                </div>
            </div>
        </div>
    </div>

    <!-- JAVASCRIPT -->
    <script src="assets/libs/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets/libs/simplebar/simplebar.min.js"></script>
    <script src="assets/js/plugins.js"></script>
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

    <script src="assets/js/pages/datatables.init.js"></script>
    <script src="assets/js/app.js"></script>
</body>

</html>