@extends('layouts.app')

@section('title', 'Create Transaction')

@section('content')

<div class="app-main">
    <!-- BEGIN .main-heading -->
    <header class="main-heading">
        <div class="container-fluid">
            <div class="row">
                <div class="col-xl-8 col-lg-8 col-md-8 col-sm-8">
                    <div class="page-icon">
                        <i class="icon-center_focus_strong"></i>
                    </div>
                    <div class="page-title">
                        <h5>Transaction</h5>
                        <h6 class="sub-heading">Create Transaction</h6>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- END: .main-heading -->
    <!-- BEGIN .main-content -->
    <div class="main-content">
        <!-- Row start -->
        <div class="row gutters">
            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
                <!-- Row start -->
                <div class="row gutters">
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                        <div class="card">
                            <div class="card-header">
                                <div class="row gutters">
                                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6">
                                        <div class="form-group">
                                            <label for="">Amount to be transfered</label>
                                            <input type="text" class="form-control" id="source_amount" name="source_amount"
                                                placeholder="1,000" value="{{ old('source_amount') }}" min="1" max=""
                                                autocomplete="off">
                                        </div>
                                    </div>
                                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6">
                                        <div class="form-group">
                                            <label for="selectTwo">Source Currency</label>
                                            <select class="form-control" id="selectTwo">
                                                {{-- <option value="" selected disabled></option> --}}
                                                <option>EUR - EURO</option>
                                                <option>NGN - NAIRA</option>
                                                <option>USD - US DOLLAR</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body">

                            </div>
                            <div class="card-footer">
                                <div class="row gutters">
                                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6">
                                        <div class="form-group">
                                            <label for="selectTwo">Recipient</label>
                                            <select class="form-control" id="selectTwo">
                                                {{-- <option value="" selected disabled></option> --}}
                                                <option>Alan</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6">
                                        <div class="form-group">
                                            <label for="selectTwo">Target Currency</label>
                                            <select class="form-control" id="selectTwo">
                                                {{-- <option value="" selected disabled></option> --}}
                                                <option>EUR - EURO</option>
                                                <option>NGN - NAIRA</option>
                                                <option>USD - US DOLLAR</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <button type="submit" class="btn btn-primary btn-block"> <i class="icon-location-arrow"></i> Transfer</button>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Row end -->
            </div>
            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
                <!-- Row start -->
                <div class="row gutters">
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                        <div class="card">
                            <div class="card-header">Your account balance</div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table align-middle table-row-dashed gy-5">
                                        <thead class="border-bottom border-gray-200 fs-7 fw-bolder">
                                            <tr class="text-start text-muted text-uppercase gs-0">
                                                <th class="min-w-100px">USD</th>
                                                <th class="min-w-100px">EUR</th>
                                                <th class="min-w-100px">NGN</th>
                                            </tr>
                                        </thead>
                                        <tbody class="fs-4 fw-bold text-gray-600">
                                            <tr>
                                                <td>$0.00</td>
                                                <td>€0.00</td>
                                                <td>₦0.00</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Row end -->
            </div>
        </div>
        <!-- Row end -->
    </div>
    <!-- END: .main-content -->
</div>

@endsection
