@extends('template/template')


@section('title', 'Dashboard')
@section('content')
<section class="row">
    <div class="col-12 col-lg-12">
        <div class="row">
            <div class="col-6 col-lg-4 col-md-6">
                <div class="card">
                    <div class="card-body px-3 py-4-5">
                        <div class="row">
                            <div class="col-md-2">
                                <div class="stats-icon purple">
                                    <i class="fas fa-users"></i>
                                </div>
                            </div>
                            <div class="col-md-10">
                                <h6 class="text-muted font-semibold">Total Users</h6>
                                <h6 class="font-extrabold mb-0">100</h6>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-6 col-lg-4 col-md-6">
                <div class="card">
                    <div class="card-body px-3 py-4-5">
                        <div class="row">
                            <div class="col-md-2">
                                <div class="stats-icon blue">
                                    <i class="fas fa-user-tie"></i>
                                </div>
                            </div>
                            <div class="col-md-10">
                                <h6 class="text-muted font-semibold">Total E-Franchisee</h6>
                                <h6 class="font-extrabold mb-0">55</h6>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-6 col-lg-4 col-md-6">
                <div class="card">
                    <div class="card-body px-3 py-4-5">
                        <div class="row">
                            <div class="col-md-2">
                                <div class="stats-icon green">
                                    <i class="fas fa-user"></i>
                                </div>
                            </div>
                            <div class="col-md-10">
                                <h6 class="text-muted font-semibold">Total Customer</h6>
                                <h6 class="font-extrabold mb-0">45</h6>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12 col-lg-8 col-md-6">
            <div class="card" style="height: 62vh;">
                    <div class="card-header">
                        <h4>Company Commission</h4>
                    </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-hover table-lg">
                                    <thead>
                                        <tr>
                                            <th></th>
                                            <th></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td class="col-3">
                                                <div class="d-flex align-items-center">
                                                    <p class="font-bold ms-3 mb-0"></p>
                                                </div>
                                            </td>
                                            <td class="col-auto">
                                                <p class=" mb-0"></p>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="col-3">
                                                <div class="d-flex align-items-center">
                                                    <p class="font-bold ms-3 mb-0"></p>
                                                </div>
                                            </td>
                                            <td class="col-auto">
                                                <p class=" mb-0"></p>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="col-3">
                                                <div class="d-flex align-items-center">
                                                    <p class="font-bold ms-3 mb-0"></p>
                                                </div>
                                            </td>
                                            <td class="col-auto">
                                                <p class=" mb-0"></p>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="col-3">
                                                <div class="d-flex align-items-center">
                                                    <p class="font-bold ms-3 mb-0"></p>
                                                </div>
                                            </td>
                                            <td class="col-auto">
                                                <p class=" mb-0"></p>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="col-3">
                                                <div class="d-flex align-items-center">
                                                    <p class="font-bold ms-3 mb-0"></p>
                                                </div>
                                            </td>
                                            <td class="col-auto">
                                                <p class=" mb-0"></p>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="col-3">
                                                <div class="d-flex align-items-center">
                                                    <p class="font-bold ms-3 mb-0"></p>
                                                </div>
                                            </td>
                                            <td class="col-auto">
                                                <p class=" mb-0"></p>
                                            </td>
                                        </tr>
                                       
                                    </tbody>
                                </table>
                            </div>
                        </div>
                </div>
            </div>
            <div class="col-12 col-lg-4 col-md-6">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body px-3 py-4-5">
                                <div class="row">
                                    <div class="col-md-2">
                                        <div class="stats-icon purple">
                                            <i class="fas fa-store"></i>
                                        </div>
                                    </div>
                                    <div class="col-md-10">
                                        <h6 class="text-muted font-semibold">Stores</h6>
                                        <h6 class="font-extrabold mb-0">35</h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body px-3 py-4-5">
                                <div class="row">
                                    <div class="col-md-2">
                                        <div class="stats-icon red">
                                            <i class="fas fa-motorcycle"></i>
                                        </div>
                                    </div>
                                    <div class="col-md-10">
                                        <h6 class="text-muted font-semibold">Rider</h6>
                                        <h6 class="font-extrabold mb-0">15</h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body px-3 py-4-5">
                                <div class="row">
                                    <div class="col-md-2">
                                        <div class="stats-icon blue">
                                            <i class="fas fa-users-cog"></i>
                                        </div>
                                    </div>
                                    <div class="col-md-10">
                                        <h6 class="text-muted font-semibold">Manpower</h6>
                                        <h6 class="font-extrabold mb-0">50</h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12 col-xl-5">
                <div class="card">
                        <div class="card-header">
                            <h4>Other Commission</h4>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-hover table-lg">
                                    <thead>
                                        <tr>
                                            <th></th>
                                            <th></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td class="col-3">
                                                <div class="d-flex align-items-center">
                                                    <p class="font-bold ms-3 mb-0"></p>
                                                </div>
                                            </td>
                                            <td class="col-auto">
                                                <p class=" mb-0"></p>
                                            </td>
                                            
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                </div>
            </div>
            <div class="col-12 col-xl-7">
                <div class="card">
                    <div class="card-header">
                        <h4>History</h4>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-hover table-lg">
                                <thead>
                                    <tr>
                                        <th>Name</th>
                                        <th>Description</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td class="col-3">
                                            <div class="d-flex align-items-center">
                                                <p class="font-bold ms-3 mb-0">Jasmine</p>
                                            </div>
                                        </td>
                                        <td class="col-auto">
                                            <p class=" mb-0">Added a new Rider.</p>
                                        </td>
                                        
                                    </tr>
                                    <tr>
                                        <td class="col-3">
                                            <div class="d-flex align-items-center">
                                                <p class="font-bold ms-3 mb-0">Ada</p>
                                            </div>
                                        </td>
                                        <td class="col-auto">
                                            <p class=" mb-0">Added a new Customer.</p>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@stop