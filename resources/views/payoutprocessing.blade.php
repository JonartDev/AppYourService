@extends('template/template')


@section('title', 'Payout Processing')
@section('content')
<section class="section">
           
<style>
    td{
        font-size:10px;
    }
    .dataTable-selector{
        display:none;
    }
    .dataTable-dropdown label{
        display:none;
    }
    .dataTable-input{
        display:none;
    }
</style>
    <section id="multiple-column-form">
        <div class="row match-height">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <button class="btn btn-primary" data-bs-toggle="modal" data-bs-backdrop="false" data-bs-target="#PayoutSchedule"><i class="fa fa-calendar-alt"></i> Payout Schedule</button>
                        <button class="btn btn-primary" data-bs-toggle="modal" data-bs-backdrop="false" data-bs-target="#PayoutMethod"><i class="fa fa-credit-card"></i> Payout Methods</button>
                        <button class="btn btn-primary" data-bs-toggle="modal" data-bs-backdrop="false" data-bs-target="#ExportPayout"><i class="fa fa-file-export"></i> Export Payout</button>
                    </div>
                    <div class="card-body">
                        <div class="input-group mb-3">
                            <span class="input-group-text">Filter From</span>
                            <input type="date" class="form-control">&nbsp;
                            <span class="input-group-text">Filter to</span>
                            <input type="date" class="form-control" style="width: 50px;">&nbsp;
                            <a href="#" class="btn btn-warning"><i class="fa fa-trash"></i>&nbsp;Reject all</a>&nbsp;
                            <a href="#" class="btn btn-warning"><i class="fa fa-tasks"></i>&nbsp;Processing all</a>&nbsp;
                            <a href="#" class="btn btn-warning"><i class="fa fa-tasks"></i>&nbsp;Processed all</a>
                        </div>
                        <table class="table table-striped" id="table1">                            
                            <thead>
                                <tr>
                                    <th>Request Date</th>
                                    <th>Processing Date</th>
                                    <th>Processed Date</th>
                                    <th>Name</th>
                                    <th>ID</th>
                                    <th>Payout Method</th>
                                    <th>Gross Amount</th>
                                    <th>Service Fee</th>
                                    <th>Tax</th>
                                    <th>Receivable</th>
                                    <th>Status</th>
                                </tr>
                            </thead>
                           
                            <tr>
                                <td>10-12-2020 13:00</td>
                                <td>--</td>
                                <td>--</td>
                                <td>Tresigallo</td>
                                <td>12345</td>
                                <td><a href="#">Banco De Oro</a> </td>
                                <td>100.00</td>
                                <td>0.00</td>
                                <td>10.00</td>
                                <td>90.00</td>
                                <td style="color:green;">Pending</td>
                            </tr>                            
                        </tbody>
                    </table>
                    
                    <div class="card-body">                        
                        <!--Payout Method Modal -->
                        @include('modal.payoutprocessingModals.payoutmethods')   
                        <!-- Payout Schedule Modal -->
                        @include('modal.payoutprocessingModals.payoutschedule')    
                        <!-- Export Payout Modal -->
                        @include('modal.payoutprocessingModals.exportpayout')   
                    </div>

                </div>
            </div>
        </div>
    </section>

</section>
@stop