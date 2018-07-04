<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
    <!-- Css Files -->
    
    <link rel="stylesheet" href="../Css/bootstrap.min.css">
    <link rel="stylesheet" href="../Css/font-awesome.min.css">
    <link rel="stylesheet" href="../Css/animate.css">
    <link rel="stylesheet" href="../Css/owl.carousel.css">
    <link rel="stylesheet" href="../Css/owl.theme.css">
    <link rel="stylesheet" href="../Css/main.css">
    <link rel="stylesheet" href="../Css/checkout.css">
    <link rel="stylesheet" href="../Css/media.css">
    
    <!-- Css Files -->
        <title>Check Out</title>
    </head>
    <body>
        <div id="wrap"></div>
        <!-- multistep form -->
<form id="msform">
  <!-- progressbar -->
  <ul id="progressbar">
    <li class="active">Account Info</li>
    <li>Payment Method</li>
    <li>Order Confirmation</li>
  </ul>
  <!-- fieldsets -->
  <fieldset>
    <h2 class="fs-title">Your Account Info</h2>
    <h3 class="fs-subtitle">This is step 1</h3>
<table class="text-left" style="width:100%">
                <tr>
                    <td class="text-blue">First Name</td>
                    <td class="text-dark">Karim</td>
                </tr>
                <tr>
                    <td class="text-blue">Last Name</td>
                    <td class="text-dark">Khamiss</td>
                </tr>
                <tr>
                    <td class="text-blue">Phone No</td>
                    <td class="text-dark">01210073443</td>
                </tr>
                <tr>
                    <td class="text-blue">E-mail</td>
                    <td class="text-dark">karim.khamiss@gmail.com</td>
                </tr>
            </table>
    <input type="button" name="next" class="next action-button" value="Next" />
  </fieldset>
  <fieldset>
    <h2 class="fs-title">Payment Method</h2>
    <h3 class="fs-subtitle">Be Calm It's Secure</h3>
    <div class="col-xs-12">
        <select>
            <option value="visa">VISA CARD</option>
            <option value="visa">VISA CARD</option>
            <option value="visa">VISA CARD</option>

        </select>
    </div>
    <div class="col-xs-12">
        <input type="text" placeholder="Card Holder" maxlength="14"> 
    </div>
    <div class="col-xs-12">
        <input type="text" placeholder="Card Number" maxlength="14"> 
    </div>
    <div class="col-xs-12">
        <div class="col-xs-4">
            <select>
                <option value="01">01</option>
                <option value="02">02</option>
                <option value="03">03</option>
                <option value="04">04</option>
                <option value="05">05</option>
                <option value="06">06</option>
                <option value="07">07</option>
                <option value="08">08</option>
                <option value="09">09</option>
                <option value="10">10</option>
                <option value="11">11</option>
                <option value="12">12</option>


            </select>
        </div>
 <div class="col-xs-4">
            <select>
                <option value="01">01</option>
                <option value="02">02</option>
                <option value="03">03</option>
                <option value="04">04</option>
                <option value="05">05</option>
                <option value="06">06</option>
                <option value="07">07</option>
                <option value="08">08</option>
                <option value="09">09</option>
                <option value="10">10</option>
                <option value="11">11</option>
                <option value="12">12</option>


            </select>
        </div>
        <div class="col-xs-3 fl-right">
            <input type="text" placeholder="CCV">
        </div>
    </div>

    <input type="button" name="previous" class="previous action-button" value="Previous" />
    <input type="button" name="next" class="next action-button" value="Next" />
  </fieldset>
  <fieldset>
    <h2 class="fs-title">Order Confirmation</h2>
    <h3 class="fs-subtitle" style="line-height: 1.5">Finally We Finished <br> We Happy Because We have Client Like You</h3>
    <div class="cart">
             <div class="item">
                <div class="content">
                <div class="image">
                    <img src="../Images/Cars/BMW/1.jpg">
                </div>
                <div class="text">
                    <table>
                        <tr>
                            <td class="text-left">Name</td>
                            <td class="text-right">BMW x6<td>
                        </tr>
                        <tr>
                            <td class="text-left">Company</td>
                            <td class="text-right">BMW<td>
                        </tr>
                        <tr>
                            <td class="text-left">Model</td>
                            <td class="text-right">2015<td>
                        </tr>
                        <tr>
                            <td class="text-left">Speed</td>
                            <td class="text-right">200 km/s<td>
                        </tr>
                        <tr>
                            <td class="text-left">Engine</td>
                            <td class="text-right">3.0 L<td>
                        </tr>
                        <tr>
                            <td class="text-left">Date</td>
                            <td class="text-right">05/04/2016<td>
                        </tr>
                        <tr>
                            <td class="text-left">From</td>
                            <td class="text-right">6:00 PM<td>
                        </tr>
                        <tr>
                            <td class="text-left">To</td>
                            <td class="text-right">11:00 AM<td>
                        </tr>
                        <tr>
                            <td class="text-left">Price Per Hour</td>
                            <td class="text-right">20$<td>
                        </tr>
                        <tr>
                            <td class="text-left">Number Of Hours</td>
                            <td class="text-right">5<td>
                        </tr>
                        <tr>
                            <td class="text-left">Total</td>
                            <td class="text-right">100$<td>
                        </tr>
                        
                    </table>
                </div>
                </div>
            </div>
    </div>
    <input type="button" name="previous" class="previous action-button" value="Previous" />
    <input type="submit" name="submit" class="submit action-button" value="Confirm" />
  </fieldset>
</form>
        <script src="../Js/jquery-1.11.2.min.js"></script>
        <script src="../Js/bootstrap.js"></script>
        <script src="../Js/jquery.easing.1.3.js"></script>
        <script src="../Js/wow.min.js"></script>
        <script src="../Js/jquery.nicescroll.min.js"></script>
        <script src="../js/smooth-scroll.js"></script>
        <script src="../Js/owl.carousel.min.js"></script>
        <script src="../Js/main.js"></script>

        <script>
            new WOW().init();
        </script>
        <script>
            $(function () {
                $('[data-toggle="tooltip"]').tooltip()
            })
        </script>
<script>
//jQuery time
var current_fs, next_fs, previous_fs; //fieldsets
var left, opacity, scale; //fieldset properties which we will animate
var animating; //flag to prevent quick multi-click glitches

$(".next").click(function() {
  if (animating) return false;
  animating = true;

  current_fs = $(this).parent();
  next_fs = $(this).parent().next();

  //activate next step on progressbar using the index of next_fs
  $("#progressbar li").eq($("fieldset").index(next_fs)).addClass("active");

  //show the next fieldset
  next_fs.show();
  //hide the current fieldset with style
  current_fs.animate({
    opacity: 0
  }, {
    step: function(now, mx) {
      //as the opacity of current_fs reduces to 0 - stored in "now"
      //1. scale current_fs down to 80%
      scale = 1 - (1 - now) * 0.2;
      //2. bring next_fs from the right(50%)
      left = (now * 50) + "%";
      //3. increase opacity of next_fs to 1 as it moves in
      opacity = 1 - now;
      current_fs.css({
        'transform': 'scale(' + scale + ')',
        'position': 'absolute'
      });
      next_fs.css({
        'left': left,
        'opacity': opacity
      });
    },
    duration: 800,
    complete: function() {
      current_fs.hide();
      animating = false;
    },
    //this comes from the custom easing plugin
    easing: 'easeInOutBack'
  });
});

$(".previous").click(function() {
  if (animating) return false;
  animating = true;

  current_fs = $(this).parent();
  previous_fs = $(this).parent().prev();

  //de-activate current step on progressbar
  $("#progressbar li").eq($("fieldset").index(current_fs)).removeClass("active");

  //show the previous fieldset
  previous_fs.show();
  //hide the current fieldset with style
  current_fs.animate({
    opacity: 0
  }, {
    step: function(now, mx) {
      //as the opacity of current_fs reduces to 0 - stored in "now"
      //1. scale previous_fs from 80% to 100%
      scale = 0.8 + (1 - now) * 0.2;
      //2. take current_fs to the right(50%) - from 0%
      left = ((1 - now) * 50) + "%";
      //3. increase opacity of previous_fs to 1 as it moves in
      opacity = 1 - now;
      current_fs.css({
        'left': left
      });
      previous_fs.css({
        'transform': 'scale(' + scale + ')',
        'opacity': opacity
      });
    },
    duration: 800,
    complete: function() {
      current_fs.hide();
      animating = false;
    },
    //this comes from the custom easing plugin
    easing: 'easeInOutBack'
  });
});

$(".submit").click(function() {
  return false;
})
</script>
    </body>
</html>
