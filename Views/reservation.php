

<div id="reservation-popup" class="popup">
    <i class="fa fa-close text-danger" data-toggle="tooltip" data-placement="right" title="Close"></i>
    <div class="popup-title">
        <h2>Reservation</h2>
    </div>
    
    <div class="popup-content">
        <?php if(isset($_SESSION['fname'])): ?>
        <form id="reservation" method="POST" action="Controllers/makereservationController.php">
            <input type="text" name="IDCAR" class="hidden" value="" id="CARID">

            
                <div class="col-xs-12">
                    <input type="radio" value="hour" name="reserv-type" class="reserv-type" id="Hours" />
                    <label for="Hours" class="text-grey text-lg">Reserve By Hours</label>
                </div>
                <div class="col-xs-12">
                    <input type="radio" value="day" name="reserv-type" class="reserv-type" id="Days" />
                    <label for="Days" class="text-grey text-lg">Reserve By Days</label>
                </div>
            
            <div class="hours">
                <div class="col-xs-12">
                    <label class="text-grey">Date</label>
                    <input type="date" id="fromdate1">
                    <i id="DateError" class="fa fa-warning"></i>
                </div>
                <div class="col-xs-6">
                    <label class="text-grey">From</label>
                    <input type="time" id="fromhour" >
                    <i id="TimeError" class="fa fa-warning"></i>
                </div>
                <div class="col-xs-6">
                    <label class="text-grey">To</label>
                    <input type="time" id="tohour">
                    <i id="TimeError" class="fa fa-warning"></i>
                </div>

                <div class="popup-footer col-xs-12" style="margin:30px 0 20px;">
                    <button type="submit" name="Reserve2" class="btn-trans fl-right">
                        Reserve
                    </button>
                    <div id="status"></div>
                </div>
            </div>
            <div class="days">
                <div class="col-xs-6">
                    <label class="text-grey">From</label>
                    <input type="date" id="fromdate">
                    <i id="date-inError" class="fa fa-warning"></i>
                </div>
                <div class="col-xs-6">
                    <label class="text-grey">To</label>
                    <input type="date" id="todate">
                    <i id="date-outError" class="fa fa-warning"></i>
                </div>

                <div class="popup-footer col-xs-12" style="margin:30px 0 20px;">
                    <button type="submit" name="Reserve2" class="btn-trans fl-right">
                        Reserve
                    </button>
                    <div id="status" class="text-center" style="margin-top:40px;"></div>
                </div>
            </div>
        </form>
        <?php else: ?>
            <h3 class="text-grey  text-center">You must login first</h3>
        <?php endif;?>
    </div>
</div>