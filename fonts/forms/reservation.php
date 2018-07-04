<div id="reservation-popup" class="popup">
    <i class="fa fa-close text-danger" data-toggle="tooltip" data-placement="right" title="Close"></i>
    <div class="popup-title">
        <h2>Reservation</h2>
    </div>
    
    <div class="popup-content">
        <?php if(isset($_SESSION['fname'])): ?>
        <form id="reservation" method="POST">
                <div class="col-xs-12">
                    <input type="radio" name="reserv-type" id="Hours" />
                    <label for="Hours" class="text-grey text-lg">Reserve By Hours</label>
                </div>
                <div class="col-xs-12">
                    <input type="radio" name="reserv-type" id="Days" />
                    <label for="Days" class="text-grey text-lg">Reserve By Days</label>
                </div>
            <div class="hours">
                <div class="col-xs-12">
                    <label class="text-grey">Date</label>
                    <input type="date" id="date">
                    <i id="DateError" class="fa fa-warning"></i>
                </div>
                <div class="col-xs-6">
                    <label class="text-grey">From</label>
                    <input type="time" id="time">
                    <i id="TimeError" class="fa fa-warning"></i>
                </div>
                <div class="col-xs-6">
                    <label class="text-grey">To</label>
                    <input type="time" id="time">
                    <i id="TimeError" class="fa fa-warning"></i>
                </div>
                 <div class="col-xs-12">
                    <input type="radio" name="driver" id="driver" />
                    <label for="driver" class="text-grey text-lg">Driver</label>
                </div>

                <div class="popup-footer col-xs-12" style="margin:30px 0 20px;">
                    <button type="submit" name="login" class="btn-trans fl-right">
                        Reserve
                    </button>
                    <div id="status"></div>
                </div>
            </div>
            <div class="days">
                <div class="col-xs-6">
                    <label class="text-grey">From</label>
                    <input type="date" id="date-in">
                    <i id="date-inError" class="fa fa-warning"></i>
                </div>
                <div class="col-xs-6">
                    <label class="text-grey">To</label>
                    <input type="date" id="date-out">
                    <i id="date-outError" class="fa fa-warning"></i>
                </div>
  <div class="col-xs-12">
                    <input type="radio" name="driver" id="driver" />
                    <label for="driver" class="text-grey text-lg">Driver</label>
                </div>
                <div class="popup-footer col-xs-12" style="margin:30px 0 20px;">
                    <button type="submit" name="login" class="btn-trans fl-right">
                        Reserve
                    </button>
                    <div id="status"></div>
                </div>
            </div>
        </form>
        <?php else: ?>
            <h3 class="text-grey  text-center">You must login first</h3>
        <?php endif;?>
    </div>
</div>