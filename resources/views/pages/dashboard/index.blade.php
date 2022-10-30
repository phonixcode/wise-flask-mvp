@extends('layouts.app')

@section('title', 'Dashboard')

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
                        <h5>Dashboard</h5>
                        <h6 class="sub-heading">Welcome to Wise {{ auth()->user()->name }}</h6>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4 col-md-4 col-sm-4">
                    <div class="right-actions">
                        <a href="{{ route('transaction.create') }}" class="btn btn-primary float-right" data-toggle="tooltip" data-placement="left"
                            title="Perform a new transaction">
                            <i class="icon-add_box"></i>
                            New Transaction
                        </a>
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
                <div class="card">
                    <div class="card-header">Account Balance</div>
                    <div class="card-body">
                        <div class="row gutters">
                            <div class="col-xl-4 col-lg-4 col-md-4 col-sm-4 col mt-2">
                                <div class="info-stats">
                                    <p class="info-title">USD</p>
                                    <h4 class="info-total">$0.00</h4>
                                </div>
                            </div>
                            <div class="col-xl-4 col-lg-4 col-md-4 col-sm-4 col mt-2">
                                <div class="info-stats">
                                    <p class="info-title">EUR</p>
                                    <h4 class="info-total">€0.00</h4>
                                </div>
                            </div>
                            <div class="col-xl-4 col-lg-4 col-md-4 col-sm-4 col mt-2">
                                <div class="info-stats">
                                    <p class="info-title">NGN</p>
                                    <h4 class="info-total">₦0.00</h4>
                                </div>
                            </div>
                        </div>

                        <p class="text-muted mt-4">
                            The cheap, fast way to send money abroad.
                            Send money cheaper and easier than old-school banks and send money at the real exchange rate
                            with no hidden fees.
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
                <div class="card">
                    <div class="card-header">Account Summary</div>
                    <div class="card-body">
                        <ul class="settings">
                            <li>
                                <div class="row gutter">
                                    <div class="col-lg-10 col-md-9 col-sm-8 mb-2">
                                        <p><strong>Total Transactions:</strong> 0</p>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="row gutter">
                                    <div class="col-lg-10 col-md-9 col-sm-8 mb-3">
                                        <p><strong>Last Transaction:</strong> October 27th 2022, 7:15:14am</p>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="row gutter">
                                    <div class="col-lg-10 col-md-9 col-sm-8 mb-4">
                                        <p><strong>Default Currency:</strong> US Dollar(USD)</p>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!-- Row end -->


        <!-- Row start -->
        <div class="row gutters">
            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <strong>Transaction History</strong> <br>
                        <span class="text-muted">All transactions created as of {{ Date('M, d Y') }}</span>
                    </div>
                    <div class="card-body">
                        <table id="basicExample" class="table table-striped table-bordered">
                            <thead>
                                <tr>
                                    <th class="text-center">Sno.</th>
                                    <th class="text-center">From</th>
                                    <th class="text-center">To</th>
                                    <th class="text-center">Amount</th>
                                    <th class="text-center">Source Currency</th>
                                    <th class="text-center">Target Currency</th>
                                    <th class="text-center">Transaction Type</th>
                                    <th class="text-center">Status</th>
                                    <th class="text-center">Date & Time</th>
                                    <th class="text-center">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td class="text-center">1</td>
                                    <td class="text-center">Tiger</td>
                                    <td class="text-center">Nixon</td>
                                    <td class="text-center">
                                        <span class="text-danger">-200</span>
                                    </td>
                                    <td class="text-center">USD</td>
                                    <td class="text-center">USD</td>
                                    <td class="text-center">
                                        <span class="badge badge-danger">Debit</span>
                                    </td>
                                    <td class="text-center">
                                        <span class="badge badge-success">success</span>
                                    </td>
                                    <td class="text-center">
                                        October 27th 2022, 7:15:14am
                                    </td>
                                    <td class="text-center">
                                        <button class="btn btn-primary btn-xs">Details</button>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <!-- Row end -->

    </div>
    <!-- END: .main-content -->
</div>

@endsection
