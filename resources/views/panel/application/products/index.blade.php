@extends('panel.layouts.app')

@section('body-content')
    <div class="row">

        <div class="col-lg-8 col-xl-9 col-md-9">
            {{--TABLE SECTION--}}
            <div class="card">
                <div class="card-body">
                    <div class="d-flex no-block align-items-center mb-4">
                        {{--TABLE TITLE--}}
                        <h4 class="card-title">@choice('panel.products', 2)</h4>
                        <div class="ms-auto">
                            <div class="btn-group">
                                {{--ADD BUTTON--}}
                                <button type="button"
                                        class="btn btn-light-primary text-primary font-weight-medium rounded-pill px-4"
                                        data-bs-toggle="modal" data-bs-target="#createmodel">
                                    @lang('panel.add') @choice('panel.products', 1)
                                </button>
                            </div>
                        </div>
                    </div>

                    <div class="table-responsive">
                        <div id="file_export_wrapper"
                             class="dataTables_wrapper container-fluid dt-bootstrap4 no-footer">
                            {{--GENERAL ACTIONS SECTION--}}
                            <div class="dt-buttons">
                                <button class="dt-button buttons-copy buttons-html5 btn btn-primary mr-1" tabindex="0"
                                        aria-controls="file_export"><span>Copy</span></button>
                                <button class="dt-button buttons-csv buttons-html5 btn btn-primary mr-1" tabindex="0"
                                        aria-controls="file_export"><span>CSV</span></button>
                                <button class="dt-button buttons-excel buttons-html5 btn btn-primary mr-1" tabindex="0"
                                        aria-controls="file_export"><span>Excel</span></button>
                                <button class="dt-button buttons-pdf buttons-html5 btn btn-primary mr-1" tabindex="0"
                                        aria-controls="file_export"><span>PDF</span></button>
                                <button class="dt-button buttons-print btn btn-primary mr-1" tabindex="0"
                                        aria-controls="file_export"><span>Print</span></button>
                            </div>


                            <div id="file_export_filter" class="dataTables_filter"><label>Search:<input type="search"
                                                                                                        class="form-control mb-2 form-control-sm"
                                                                                                        placeholder=""
                                                                                                        aria-controls="file_export"></label>
                            </div>

                            {{--TABLE--}}
                            <table id="file_export" class="table table-bordered nowrap display dataTable no-footer"
                                   role="grid" aria-describedby="file_export_info">
                                <thead>
                                <tr role="row">
                                    <th class="sorting" tabindex="0" aria-controls="file_export" rowspan="1" colspan="1"
                                        aria-label="Name: activate to sort column ascending" style="width: 0px;">
                                        @lang('panel.name')
                                    </th>
                                    <th class="sorting" tabindex="0" aria-controls="file_export" rowspan="1" colspan="1"
                                        aria-label="Email: activate to sort column ascending" style="width: 0px;">
                                        @lang('panel.field_x')
                                    </th>
                                    <th class="sorting" tabindex="0" aria-controls="file_export" rowspan="1" colspan="1"
                                        aria-label="Role: activate to sort column ascending" style="width: 0px;">
                                        @choice('panel.companies', 1)
                                    </th>
                                    <th class="sorting" tabindex="0" aria-controls="file_export" rowspan="1" colspan="1"
                                        aria-label="Joining date: activate to sort column ascending"
                                        style="width: 0px;">
                                        @lang('panel.created_at')
                                    </th>
                                    <th class="sorting" tabindex="0" aria-controls="file_export" rowspan="1" colspan="1"
                                        aria-label="Salery: activate to sort column ascending" style="width: 0px;">
                                        @lang('panel.unity_price')
                                    </th>
                                    <th class="sorting" tabindex="0" aria-controls="file_export" rowspan="1" colspan="1"
                                        aria-label="Action: activate to sort column ascending" style="width: 0px;">
                                        @lang('panel.actions')
                                    </th>
                                </tr>
                                </thead>
                                <tbody>

                                @forelse($rows as $row)
                                    <tr role="row" class="{{ $loop->iteration % 2 ? 'odd': 'even' }}">
                                        <td>
                                            <img src="../assets/images/users/1.jpg" alt="user"
                                                 class="rounded-circle"
                                                 width="30"> <span class="fw-normal">Genelia Deshmukh</span>
                                        </td>
                                        <td>genelia@gmail.com</td>
                                        <td>+123 456 789</td>
                                        <td>
                                            <span class="badge bg-light-danger text-danger font-weight-medium">
                                                Designer
                                            </span>
                                        {{--<span class="badge bg-light-info text-info font-weight-medium"></span>--}}
                                        {{--<td><span  class="badge bg-light-danger text-danger font-weight-medium">Manager</span></td>--}}
                                        {{--<td><span class="badge bg-inverse">HR</span></td>--}}
                                        </td>
                                        <td>23</td>
                                        <td>12-10-2014</td>
                                        <td>$1200</td>
                                        <td>
                                            <button type="button"
                                                    class="btn btn-sm btn-icon btn-pure btn-outline delete-row-btn"
                                                    data-bs-toggle="tooltip" data-original-title="Delete"
                                                    data-bs-original-title="" title=""><i class="ti-close"
                                                                                          aria-hidden="true"></i>
                                            </button>
                                        </td>

                                    </tr>
                                @empty

                                @endforelse
                                </tbody>
                            </table>

                            {{--DATATABLES PAGINATION--}}
                            <div class="dataTables_info" id="file_export_info" role="status" aria-live="polite">Showing
                                1 to
                                10 of 24 entries
                            </div>
                            <div class="dataTables_paginate paging_simple_numbers" id="file_export_paginate">
                                <ul class="pagination">
                                    <li class="paginate_button page-item previous disabled" id="file_export_previous"><a
                                            href="#" aria-controls="file_export" data-dt-idx="0" tabindex="0"
                                            class="page-link">Previous</a></li>
                                    <li class="paginate_button page-item active"><a href="#" aria-controls="file_export"
                                                                                    data-dt-idx="1" tabindex="0"
                                                                                    class="page-link">1</a></li>
                                    <li class="paginate_button page-item "><a href="#" aria-controls="file_export"
                                                                              data-dt-idx="2" tabindex="0"
                                                                              class="page-link">2</a></li>
                                    <li class="paginate_button page-item "><a href="#" aria-controls="file_export"
                                                                              data-dt-idx="3" tabindex="0"
                                                                              class="page-link">3</a></li>
                                    <li class="paginate_button page-item next" id="file_export_next"><a href="#"
                                                                                                        aria-controls="file_export"
                                                                                                        data-dt-idx="4"
                                                                                                        tabindex="0"
                                                                                                        class="page-link">Next</a>
                                    </li>
                                </ul>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-lg-4 col-xl-3 col-md-3">
            {{--FILTROS--}}
            <div class="card">
                <div class="border-bottom p-3">
                    <button type="button" class="btn btn-info" data-bs-toggle="modal" data-bs-target="#Sharemodel"
                            style="width: 100%">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                             stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                             class="feather feather-share-2 feather-sm fill-white me-2">
                            <circle cx="18" cy="5" r="3"></circle>
                            <circle cx="6" cy="12" r="3"></circle>
                            <circle cx="18" cy="19" r="3"></circle>
                            <line x1="8.59" y1="13.51" x2="15.42" y2="17.49"></line>
                            <line x1="15.41" y1="6.51" x2="8.59" y2="10.49"></line>
                        </svg>
                        Share With
                    </button>
                </div>
                <div class="card-body">
                    <form>
                        <div class="input-group mb-3">
                        <span class="input-group-text"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                            viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                            stroke-width="2" stroke-linecap="round"
                                                            stroke-linejoin="round"
                                                            class="feather feather-search feather-sm fill-white"><circle
                                    cx="11" cy="11" r="8"></circle><line x1="21" y1="21" x2="16.65"
                                                                         y2="16.65"></line></svg></span>
                            <input type="text" class="form-control" placeholder="Search Contacts Here..."
                                   aria-label="Amount (to the nearest dollar)">
                            <button class="btn btn-info">Ok</button>
                        </div>
                    </form>
                    <div class="list-group mt-4">
                        <a href="javascript:void(0)" class="list-group-item active">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                 fill="none"
                                 stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                 class="feather feather-list feather-sm fill-white me-2">
                                <line x1="8" y1="6" x2="21" y2="6"></line>
                                <line x1="8" y1="12" x2="21" y2="12"></line>
                                <line x1="8" y1="18" x2="21" y2="18"></line>
                                <line x1="3" y1="6" x2="3" y2="6"></line>
                                <line x1="3" y1="12" x2="3" y2="12"></line>
                                <line x1="3" y1="18" x2="3" y2="18"></line>
                            </svg>
                            All Contacts</a>
                        <a href="javascript:void(0)" class="list-group-item">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                 fill="none"
                                 stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                 class="feather feather-star feather-sm fill-white me-2">
                                <polygon
                                    points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon>
                            </svg>
                            Favourite Contacts</a>
                        <a href="javascript:void(0)" class="list-group-item">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                 fill="none"
                                 stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                 class="feather feather-bookmark feather-sm fill-white me-2">
                                <path d="M19 21l-7-5-7 5V5a2 2 0 0 1 2-2h10a2 2 0 0 1 2 2z"></path>
                            </svg>
                            Recently Created</a>
                    </div>
                    <h4 class="card-title mt-4">Groups</h4>
                    <div class="list-group">
                        <a href="javascript:void(0)" class="list-group-item d-flex align-items-center">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                 fill="none"
                                 stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                 class="feather feather-flag feather-sm fill-white me-2">
                                <path d="M4 15s1-1 4-1 5 2 8 2 4-1 4-1V3s-1 1-4 1-5-2-8-2-4 1-4 1z"></path>
                                <line x1="4" y1="22" x2="4" y2="15"></line>
                            </svg>
                            Success Warriers
                            <span
                                class="badge bg-light-info text-info font-weight-medium rounded-pill ms-auto">20</span>
                        </a>
                        <a href="javascript:void(0)" class="list-group-item d-flex align-items-center">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                 fill="none"
                                 stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                 class="feather feather-file feather-sm fill-white me-2">
                                <path d="M13 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V9z"></path>
                                <polyline points="13 2 13 9 20 9"></polyline>
                            </svg>
                            Project
                            <span class="badge bg-success ms-auto">12</span>
                        </a>
                        <a href="javascript:void(0)" class="list-group-item d-flex align-items-center">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                 fill="none"
                                 stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                 class="feather feather-users feather-sm fill-white me-2">
                                <path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path>
                                <circle cx="9" cy="7" r="4"></circle>
                                <path d="M23 21v-2a4 4 0 0 0-3-3.87"></path>
                                <path d="M16 3.13a4 4 0 0 1 0 7.75"></path>
                            </svg>
                            Envato Author
                            <span
                                class="badge bg-light-primary rounded-pill text-primary font-weight-medium ms-auto">22</span>
                        </a>
                        <a href="javascript:void(0)" class="list-group-item d-flex align-items-center">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                 fill="none"
                                 stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                 class="feather feather-user-plus feather-sm fill-white me-2">
                                <path d="M16 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path>
                                <circle cx="8.5" cy="7" r="4"></circle>
                                <line x1="20" y1="8" x2="20" y2="14"></line>
                                <line x1="23" y1="11" x2="17" y2="11"></line>
                            </svg>
                            IT Friends
                            <span
                                class="badge bg-light-danger text-danger font-weight-medium rounded-pill ms-auto">101</span>
                        </a>
                    </div>
                    <h4 class="card-title mt-4">More</h4>
                    <div class="list-group">
                        <a href="javascript:void(0)" class="list-group-item">
                        <span class="badge bg-info me-2"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                              viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                              stroke-width="2" stroke-linecap="round"
                                                              stroke-linejoin="round"
                                                              class="feather feather-download feather-sm fill-white"><path
                                    d="M21 15v4a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2v-4"></path><polyline
                                    points="7 10 12 15 17 10"></polyline><line x1="12" y1="15" x2="12"
                                                                               y2="3"></line></svg></span> Import
                            Contacts
                        </a>
                        <a href="javascript:void(0)" class="list-group-item">
                        <span class="badge bg-warning text-white me-2"><svg xmlns="http://www.w3.org/2000/svg"
                                                                            width="24" height="24" viewBox="0 0 24 24"
                                                                            fill="none" stroke="currentColor"
                                                                            stroke-width="2" stroke-linecap="round"
                                                                            stroke-linejoin="round"
                                                                            class="feather feather-upload feather-sm fill-white"><path
                                    d="M21 15v4a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2v-4"></path><polyline
                                    points="17 8 12 3 7 8"></polyline><line x1="12" y1="3" x2="12" y2="15"></line></svg></span>
                            Export Contacts
                        </a>
                        <a href="javascript:void(0)" class="list-group-item">
                        <span class="badge bg-success me-2"><svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                                 height="24" viewBox="0 0 24 24" fill="none"
                                                                 stroke="currentColor" stroke-width="2"
                                                                 stroke-linecap="round" stroke-linejoin="round"
                                                                 class="feather feather-refresh-cw feather-sm fill-white"><polyline
                                    points="23 4 23 10 17 10"></polyline><polyline points="1 20 1 14 7 14"></polyline><path
                                    d="M3.51 9a9 9 0 0 1 14.85-3.36L23 10M1 14l4.64 4.36A9 9 0 0 0 20.49 15"></path></svg></span>
                            Restore Contacts
                        </a>
                        <a href="javascript:void(0)" class="list-group-item">
                        <span class="badge bg-primary me-2"><svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                                 height="24" viewBox="0 0 24 24" fill="none"
                                                                 stroke="currentColor" stroke-width="2"
                                                                 stroke-linecap="round" stroke-linejoin="round"
                                                                 class="feather feather-layers feather-sm fill-white"><polygon
                                    points="12 2 2 7 12 12 22 7 12 2"></polygon><polyline
                                    points="2 17 12 22 22 17"></polyline><polyline points="2 12 12 17 22 12"></polyline></svg></span>
                            Duplicate Contacts
                        </a>
                        <a href="javascript:void(0)" class="list-group-item">
                        <span class="badge bg-danger me-2"><svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                                height="24" viewBox="0 0 24 24" fill="none"
                                                                stroke="currentColor" stroke-width="2"
                                                                stroke-linecap="round" stroke-linejoin="round"
                                                                class="feather feather-trash-2 feather-sm fill-white"><polyline
                                    points="3 6 5 6 21 6"></polyline><path
                                    d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"></path><line
                                    x1="10" y1="11" x2="10" y2="17"></line><line x1="14" y1="11" x2="14" y2="17"></line></svg></span>
                            Delete All
                            Contacts
                        </a>
                    </div>
                </div>
            </div>
        </div>

    </div>
@endsection
