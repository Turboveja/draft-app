@extends('panel.layouts.app')

@section('body-content')
    <div class="card">
        <div class="card-body">
            <h4 class="card-title">Companies</h4>
            @if(!count($rows))
                <h6 class="card-subtitle lh-base">Results not found.</h6>
            @else
                <h6 class="card-subtitle lh-base">Table subtitle</h6>
            @endif
        </div>

        {{--Filters--}}
        <div class="row" style="padding: 0 1.25rem 1.25rem 1.25rem;">
            <div class="col-sm-12 col-md-12">
                <div id="filters" class="table_filters">
                    <label>
                        Search
                        <input type="search" class="form-control mb-2 form-control-sm">
                    </label>
                </div>
            </div>
        </div>

        <div class="table-responsive">
            <table class="table customize-table mb-0 v-middle">
                <thead class="table-light">
                <tr>
                    <th class="border-bottom border-top">Name</th>
                    <th class="border-bottom border-top">Email</th>
                    <th class="border-bottom border-top">Logo</th>
                    <th class="border-bottom border-top">Website</th>
                    <th class="border-bottom border-top">Actions</th>
                </tr>
                </thead>

                <tbody>
                @forelse($rows as $row)
                    <tr>
                        <td>{{ $row->name  }}</td>
                        <td>{{ $row->email  }}</td>
                        <td>{{ $row->logo  }}</td>
                        <td>{{ $row->website  }}</td>
                        <td>
                            <div class="dropdown dropstart">
                                <a href="#" class="link" id="dropdownMenuButton" data-bs-toggle="dropdown"
                                   aria-expanded="false">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                         viewBox="0 0 24 24"
                                         fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                         stroke-linejoin="round" class="feather feather-more-horizontal feather-sm">
                                        <circle cx="12" cy="12" r="1"></circle>
                                        <circle cx="19" cy="12" r="1"></circle>
                                        <circle cx="5" cy="12" r="1"></circle>
                                    </svg>
                                </a>
                                <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                    <li><a class="dropdown-item"
                                           href="{{ route('companies.edit', ['company' => $row->id]) }}">Edit</a></li>
                                    <li><a class="dropdown-item"
                                           href="{{ route('companies.destroy', ['company' => $row->id]) }}">Delete</a>
                                    </li>
                                </ul>
                            </div>
                        </td>
                    </tr>
                @empty
                    {{--                    Results not match.--}}
                @endforelse
                </tbody>
            </table>
        </div>

        <div class="row"  style="padding: 1.25rem 1.25rem 0 1.25rem;">
            <div class="col-md-4 col-xs-12">
                <a href="{{ route('companies.create') }}" class="btn btn-yellow" title="{{ trans('strings.add') }}">
                    <i class="fa fa-plus"></i> <span>New Company</span></a>
            </div>

            <div class="col-sm-12 col-md-8" style="text-align: right;">
                <div class="dataTables_paginate paging_simple_numbers" id="zero_config_paginate">
{{--                    Showing 1 to 10 of 57 entries--}}
                    <ul class="pagination">
                        <li class="paginate_button page-item previous disabled" id="zero_config_previous">
                            <a href="#"
                               aria-controls="zero_config"
                               data-dt-idx="0"
                               tabindex="0"
                               class="page-link">Previous</a>
                        </li>
                        <li class="paginate_button page-item active">
                            <a href="#" aria-controls="zero_config"
                               data-dt-idx="1" tabindex="0"
                               class="page-link">1</a>
                        </li>
                        <li class="paginate_button page-item ">
                            <a href="#" aria-controls="zero_config" data-dt-idx="2"
                               tabindex="0" class="page-link">2</a>
                        </li>
                        <li class="paginate_button page-item ">
                            <a href="#" aria-controls="zero_config" data-dt-idx="3"
                               tabindex="0" class="page-link">3</a>
                        </li>
                        <li class="paginate_button page-item ">
                            <a href="#" aria-controls="zero_config" data-dt-idx="4"
                               tabindex="0" class="page-link">4</a>
                        </li>
                        <li class="paginate_button page-item ">
                            <a href="#" aria-controls="zero_config" data-dt-idx="5"
                               tabindex="0" class="page-link">5</a>
                        </li>
                        <li class="paginate_button page-item ">
                            <a href="#" aria-controls="zero_config" data-dt-idx="6"
                               tabindex="0" class="page-link">6</a>
                        </li>
                        <li class="paginate_button page-item next" id="zero_config_next">
                            <a href="#"
                               aria-controls="zero_config"
                               data-dt-idx="7" tabindex="0"
                               class="page-link">Next</a>
                        </li>
                    </ul>
                </div>
            </div>

            {{ $rows->links() }}
        </div>
    </div>
@endsection
