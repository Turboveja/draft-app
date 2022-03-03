@extends('layouts.app')

@section('body-content')
    <div class="card">
        <div class="card-body">
            <h4 class="card-title mb-3 pb-3 border-bottom">New Form</h4>
            <form method="POST" action="{{ route('companies.store') }}">
                @csrf
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-floating mb-3">
                            <input name="name" type="text" class="form-control" id="tb-fname"  placeholder="Enter Name here">
                            <label for="tb-fname">Name</label>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-floating mb-3">
                            <input name="email" type="email" class="form-control" id="tb-website"  placeholder="name@example.com">
                            <label for="tb-email">Email address</label>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-floating mb-3">
                            <input name="logo" type="text" class="form-control" id="tb-logo"  placeholder="Enter logo here">
                            <label for="tb-logo">Logo</label>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-floating mb-3">
                            <input name="website" type="text" class="form-control" id="tb-website" placeholder="Enter website here">
                            <label for="tb-website">Website</label>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="d-md-flex align-items-center mt-3">
                            <div class="ms-auto mt-3 mt-md-0">
                                <button type="submit" class="btn btn-info font-weight-medium rounded-pill px-4">
                                    <div class="d-flex align-items-center">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-send feather-sm fill-white me-2"><line x1="22" y1="2" x2="11" y2="13"></line><polygon points="22 2 15 22 11 13 2 9 22 2"></polygon></svg>
                                        Submit
                                    </div>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection
