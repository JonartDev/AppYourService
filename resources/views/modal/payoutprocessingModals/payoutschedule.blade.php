<div class="modal fade text-left" id="PayoutSchedule" tabindex="-1" aria-labelledby="myModalLabel4" style="display: none;" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal-dialog-md" role="document">
        <div class="modal-content" style="background-color:white;">
            <div class="modal-header">
                <h4 class="modal-title" id="myModalLabel4">Payout Schedule
                </h4>
                <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                    <i data-feather="x"></i>
                </button>
            </div>
            <div class="modal-body">
                <!-- code here -->
                <div class="input-group mb-3" >
                    <select class="form-select" id="schedule" name="Payout" class="form-control">
                            <option selected>Choose Payout</option>
                            <option value="perday">Payout Per Day</option>
                            <option value="perdate">Payout Per Date</option>
                    </select>
                </div> 
                <div id="day" style="display:none;">
                    <table class="table table-striped display hover" id="table1">
                        <div class="form-check">
                            <tbody>
                                <div class="custom-control custom-checkbox">
                                    <tr>
                                        <td><input type="checkbox" class="form-check-input form-check-primary"  name="customCheck" id="customColorCheck1"  style="font-size:14px !important;"></td>
                                        <td><label class="form-check-label" for="customColorCheck1" style="font-size:14px !important;">Monday</label></td>
                                    </tr> 
                                    <tr>
                                        <td><input type="checkbox" class="form-check-input form-check-primary"  name="customCheck" id="customColorCheck1"  style="font-size:14px !important;"></td>
                                        <td><label class="form-check-label" for="customColorCheck1" style="font-size:14px !important;">Tuesday</label></td>
                                    </tr> 
                                    <tr>
                                        <td><input type="checkbox" class="form-check-input form-check-primary"  name="customCheck" id="customColorCheck1"  style="font-size:14px !important;"></td>
                                        <td><label class="form-check-label" for="customColorCheck1" style="font-size:14px !important;">Wednesday</label></td>
                                    </tr> 
                                    <tr>
                                        <td><input type="checkbox" class="form-check-input form-check-primary"  name="customCheck" id="customColorCheck1"  style="font-size:14px !important;"></td>
                                        <td><label class="form-check-label" for="customColorCheck1" style="font-size:14px !important;">Thursday</label></td>
                                    </tr> 
                                    <tr>
                                        <td><input type="checkbox" class="form-check-input form-check-primary"  name="customCheck" id="customColorCheck1"  style="font-size:14px !important;"></td>
                                        <td><label class="form-check-label" for="customColorCheck1" style="font-size:14px !important;">Friday</label></td>
                                    </tr> 
                                    <tr>
                                        <td><input type="checkbox" class="form-check-input form-check-primary"  name="customCheck" id="customColorCheck1"  style="font-size:14px !important;"></td>
                                        <td><label class="form-check-label" for="customColorCheck1" style="font-size:14px !important;">Saturday</label></td>
                                    </tr> 
                                    <tr>
                                        <td><input type="checkbox" class="form-check-input form-check-primary"  name="customCheck" id="customColorCheck1"  style="font-size:14px !important;"></td>
                                        <td><label class="form-check-label" for="customColorCheck1" style="font-size:14px !important;">Sunday</label></td>
                                    </tr> 
                                </div>
                            </tbody>
                        </div>
                    </table>
                </div>
                <!-- calendar -->                
                @include('modal.payoutprocessingModals.calendar')   
                
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-light-secondary" data-bs-dismiss="modal">
                    <i class="bx bx-x d-block d-sm-none"></i>
                    <span class="d-none d-sm-block">Close</span>
                </button>
                <button type="button" class="btn btn-primary ml-1" data-bs-dismiss="modal">
                    <i class="bx bx-check d-block d-sm-none"></i>
                    <span class="d-none d-sm-block">Accept</span>
                </button>
            </div>
        </div>
    </div>
</div>
<script src="https://code.jquery.com/jquery-3.3.1.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>

<script>
    $(document).on('change', '#schedule', function(){
        var ch = $('#schedule').val();
        if(ch == "perday" ){
            $('#day').show();         
            $('#date').hide();
        }else if(ch == "perdate"){
            $('#day').hide();            
            $('#date').show();
        }else{
            $('#day').hide();     
            $('#date').hide();
        }
    });

</script>
