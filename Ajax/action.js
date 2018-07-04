$(document).ready(function () {
    $("*").click(function(){

        if(this.hasAttribute('data-id'))
        {
            var CarId = $(this).val();
            $("#reservation #CARID").val(CarId);

        }
        else if(this.hasAttribute('data-deleteRes'))
            {
                var ResID = $(this).val();
                $("#delete-reservation .confirm").attr("value",ResID);
            }
    })
        $("i.fa-pencil").click(function(){

                           if(this.hasAttribute("data-id"))
                               {
                                   var id = $(this).attr("data-id");
                                    var parent = $(this).attr("data-parent");

                                           $("#EditLayout #id").val(id);
                                           $("#EditLayout #title").val($("#"+parent+" "+".title2").text());
                                           $("#EditLayout #text").val($("#"+parent+" "+".text").text());


                               }

                           })
                           $('.cancel').click(function() {

                        $.ajax({
                         type: "POST",
                         url:  "../Controllers/DeleteReservation.php",
                         data: {}
                       }).done(function( msg ) {

                       });

                           });
            $("#EditLayout").submit(function(e){
        e.preventDefault();
        var id = $("#EditLayout #id").val();
        var title = $("#EditLayout #title").val();
        var text = $("#EditLayout #text").val();
    $.ajax({
            url: "Controllers/EditLayout.php",
            type: "POST",
            data: {
               id:id,
                title: title,
                text: text
            },
            success: function (data) {

                if (data == 1) {
                    $("#EditLayout #status").html("Content Updated Sucuessfully").removeClass("text-danger").addClass("text-success").animate({
                        opacity: "1"
                    }, 400, function () {
                        location.reload();
                    });
                } else if (data == 2)
                    $("#EditLayout #status").html("Invalid Title").removeClass("text-success").addClass("text-danger").animate({
                        opacity: "1"
                    }, 400)
                    else if (data == 3)
                    $("#EditLayout #status").html("Invalid Text").removeClass("text-success").addClass("text-danger").animate({
                        opacity: "1"
                    }, 400)
            }



        });
    })
    $("#contact-us").submit(function (e) {
        e.preventDefault();
        var name = $("#contact-us #name").val();
        var email = $("#contact-us #email").val();
        var subject = $("#contact-us #subject").val();
        var message = $("#contact-us #message").val();
        $.ajax({
            url: "Controllers/ContactUs.php",
            type: "POST",
            data: {
                name: name,
                email: email,
                subject: subject,
                message: message
            },
            success: function (data) {
                if (data == 1) {
                    $("#contact-us i").animate({
                        opacity: "0"
                    }, 400);
                    $("#contact-us #status").html("Message Sent Successfully").removeClass("text-danger").addClass("text-success").animate({
                        opacity: "1"
                    }, 400, function () {
                        $("#contact-us #name").val("");
                        $("#contact-us #email").val("");
                        $("#contact-us #subject").val("");
                        $("#contact-us #message").val("");
                        $("#contact-us #name").focus();
                    });
                } else if (data == 2) {
                    $("#contact-us i").animate({
                        opacity: "0"
                    }, 400);
                    $("#contact-us #status").html("Please Enter  Name Correctly").removeClass("text-success").addClass("text-danger").animate({
                        opacity: "1"
                    }, 400, function () {
                        $("#contact-us #NameError").animate({
                            opacity: "1"
                        }, 400);
                    });
                } else if (data == 3) {
                    $("#contact-us i").animate({
                        opacity: "0"
                    }, 400);
                    $("#contact-us #status").html("Please Enter Email Correctly").removeClass("text-success").addClass("text-danger").animate({
                        opacity: "1"
                    }, 400, function () {
                        $("#contact-us #EmailError").animate({
                            opacity: "1"
                        }, 400);
                    });
                } else if (data == 4) {
                    $("#contact-us i").animate({
                        opacity: "0"
                    }, 400);
                    $("#contact-us #status").html("Please Enter Subject Correctly").removeClass("text-success").addClass("text-danger").animate({
                        opacity: "1"
                    }, 400, function () {
                        $("#contact-us #SubjectError").animate({
                            opacity: "1"
                        }, 400);
                    });
                } else if (data == 5) {
                    $("#contact-us i").animate({
                        opacity: "0"
                    }, 400);
                    $("#contact-us #status").html("Please Enter Message Correctly").removeClass("text-success").addClass("text-danger").animate({
                        opacity: "1"
                    }, 400, function () {
                        $("#contact-us #MessageError").animate({
                            opacity: "1"
                        }, 400);
                    });

                } else if (data == 6) {
                    $("#contact-us i").animate({
                        opacity: "0"
                    }, 400);
                    $("#contact-us #status").html("There is Problem in Server , Try Again Later").removeClass("text-success").addClass("text-danger").animate({
                        opacity: "1"
                    }, 400);

                }
            }

        });


    });

    $("#registeration").submit(function (e) {
        e.preventDefault();
        var fname = $("#registeration #fname").val();
        var lname = $("#registeration #lname").val();
        var phone = $("#registeration #phone").val();
        var address = $("#registeration #address").val();
        var email = $("#registeration #email").val();
        var password = $("#registeration #password").val();
        var copassword = $("#registeration #copassword").val();
        $.ajax({
            url: "Controllers/regetration_info.php",
            type: "POST",
            data: {
                fname: fname,
                lname: lname,
                phone: phone,
                address: address,
                email: email,
                password: password,
                copassword: copassword
            },
            success: function (data) {

                if (data == 1) {

                    $("#registeration #status").html("Account Created Successfully").removeClass("text-danger").addClass("text-success").animate({
                        opacity: "1"
                    }, 400, function () {
                        $("#registeration input").val("");
                        location.reload();
                    });
                } else if (data == 2) {
                    $("#registeration i").animate({
                        opacity: "0"
                    }, 400);
                    $("#registeration #status").html("Please Enter First Name Correctly").removeClass("text-success").addClass("text-danger").animate({
                        opacity: "1"
                    }, 400, function () {
                        $("#registeration #FNameError").animate({
                            opacity: "1"
                        }, 400);
                    });
                } else if (data == 3) {
                    $("#registeration i").animate({
                        opacity: "0"
                    }, 400);
                    $("#registeration #status").html("Please Enter Last Name Correctly").removeClass("text-success").addClass("text-danger").animate({
                        opacity: "1"
                    }, 400, function () {
                        $("#registeration #LNameError").animate({
                            opacity: "1"
                        }, 400);
                    });
                } else if (data == 4) {
                    $("#registeration i").animate({
                        opacity: "0"
                    }, 400);
                    $("#registeration #status").html("Please Enter Phone Correctly").removeClass("text-success").addClass("text-danger").animate({
                        opacity: "1"
                    }, 400, function () {
                        $("#registeration #PhoneError").animate({
                            opacity: "1"
                        }, 400);
                    });
                } else if (data == 5) {
                    $("#registeration i").animate({
                        opacity: "0"
                    }, 400);
                    $("#registeration #status").html("Please Enter Address Correctly").removeClass("text-success").addClass("text-danger").animate({
                        opacity: "1"
                    }, 400, function () {
                        $("#registeration #AddressError").animate({
                            opacity: "1"
                        }, 400);
                    });

                } else if (data == 6) {
                    $("#registeration i").animate({
                        opacity: "0"
                    }, 400);
                    $("#registeration #status").html("Please Enter Email Correctly").removeClass("text-success").addClass("text-danger").animate({
                        opacity: "1"
                    }, 400, function () {
                        $("#registeration #EmailError").animate({
                            opacity: "1"
                        }, 400);
                    });
                } else if (data == 7) {
                    $("#registeration i").animate({
                        opacity: "0"
                    }, 400);
                    $("#registeration #status").html("Please Enter Password Correctly").removeClass("text-success").addClass("text-danger").animate({
                        opacity: "1"
                    }, 400, function () {
                        $("#registeration #PasswordError").animate({
                            opacity: "1"
                        }, 400);
                    });
                } else if (data == 8) {
                    $("#registeration i").animate({
                        opacity: "0"
                    }, 400);
                    $("#registeration #status").html("Password and Confirm Password don't match").removeClass("text-success").addClass("text-danger").animate({
                        opacity: "1"
                    }, 400, function () {
                        $("#registeration #CoPasswordError").animate({
                            opacity: "1"
                        }, 400);
                        $("#registeration #PasswordError").animate({
                            opacity: "1"
                        }, 400);
                    });
                }
            }
        });
    });

    $("#Login").submit(function (e) {
        e.preventDefault();
        var email = $("#Login #email").val();
        var password = $("#Login #password").val();
        $.ajax({
            url: "Controllers/LoginController.php",
            type: "POST",
            data: {
                email: email,
                password: password
            },
            success: function (data) {


                if (data == 1) {
                    $("#Login #status").html("Login Successfully").removeClass("text-danger").addClass("text-success").animate({
                        opacity: "1"
                    }, 400, function () {
                        $("#login input").val("");
                        location.reload();
                    });
                } else
                    $("#Login #status").html("Wrong Username or Password").removeClass("text-success").addClass("text-danger").animate({
                        opacity: "1"
                    }, 400)
            }



        });

    });
    $("#forget").submit(function (e) {
        e.preventDefault();
        var email = $("#forget #email").val();

        $.ajax({
            url: "Controllers/ForgetPassword.php",
            type: "POST",
            data: {
                email: email
            },
            success: function (data) {
                if (data == 1) {
                    $("#forget #status").html("Email sent Successfully").removeClass("text-danger").addClass("text-success").animate({
                        opacity: "1"
                    }, 400, function () {
                        $("#forget input").val("");
                        $("#forget #status").delay(2000).animate({
                            opacity: "0"
                        }, 400, function () {
                            location.reload();
                        });
                    });
                } else
                    $("#forget #status").html("Reset Password Failed , Please Try Again").removeClass("text-success").addClass("text-danger").animate({
                        opacity: "1"
                    }, 400)
            }



        });

    });

    $("#AddCar").submit(function (e) {
        e.preventDefault();
        var id = $("#AddCar #id").val();
        var name = $("#AddCar #name").val();
        var model = $("#AddCar #model").val();
        var quantity = $("#AddCar #quantity").val();
        var pricehour = $("#AddCar #pricehour").val();
        var priceday = $("#AddCar #priceday").val();
        var engine = $("#AddCar #engine").val();
$("#AddCar #photo").upload("../Controllers/upload.php", function (data) {

        $.ajax({
            url: "../Controllers/infoaddcar.php",
            type: "POST",
            data: {
                id: id,
                name: name,
                model: model,
                quantity: quantity,
                pricehour: pricehour,
                priceday: priceday,
                engine: engine
            },

            success: function (data) {

                if (data == 1) {
                    $("#AddCar i").animate({
                        opacity: "0"
                    }, 400);
                    $("#AddCar #status").html("Car Added Successfully").removeClass("text-danger").addClass("text-success").animate({
                        opacity: "1"
                    }, 400, function () {
                        $("#AddCar #id").val("");
                        $("#AddCar #name").val("");
                        $("#AddCar #model").val("");
                        $("#AddCar #quantity").val("");
                        $("#AddCar #pricehour").val("");
                        $("#AddCar #priceday").val("");
                        $("#AddCar #engine").val("");
                        $("#AddCar #id").focus();
                        $("#AddCar #status").delay(3000).animate({
                            opacity: "0"
                        });

                    });

                } else if (data == 2) {
                    $("#AddCar i").animate({
                        opacity: "0"
                    }, 400);
                    $("#AddCar #status").html("Please Enter Car ID Correctly").removeClass("text-success").addClass("text-danger").animate({
                        opacity: "1"
                    }, 400, function () {
                        $("#AddCar #IdError").animate({
                            opacity: "1"
                        }, 400);
                    });
                } else if (data == 3) {
                    $("#AddCar i").animate({
                        opacity: "0"
                    }, 400);
                    $("#AddCar #status").html("Please Enter Car Name Correctly").removeClass("text-success").addClass("text-danger").animate({
                        opacity: "1"
                    }, 400, function () {
                        $("#AddCar #NameError").animate({
                            opacity: "1"
                        }, 400);
                    });
                } else if (data == 4) {
                    $("#AddCar i").animate({
                        opacity: "0"
                    }, 400);
                    $("#AddCar #status").html("Please Enter Car Model Correctly").removeClass("text-success").addClass("text-danger").animate({
                        opacity: "1"
                    }, 400, function () {
                        $("#AddCar #ModelError").animate({
                            opacity: "1"
                        }, 400);
                    });
                } else if (data == 5) {
                    $("#AddCar i").animate({
                        opacity: "0"
                    }, 400);
                    $("#AddCar #status").html("Please Enter Car Quantity Correctly").removeClass("text-success").addClass("text-danger").animate({
                        opacity: "1"
                    }, 400, function () {
                        $("#AddCar #QuantityError").animate({
                            opacity: "1"
                        }, 400);
                    });
                } else if (data == 6) {
                    $("#AddCar i").animate({
                        opacity: "0"
                    }, 400);
                    $("#AddCar #status").html("Please Enter Price Per Hour Correctly").removeClass("text-success").addClass("text-danger").animate({
                        opacity: "1"
                    }, 400, function () {
                        $("#AddCar #HourError").animate({
                            opacity: "1"
                        }, 400);
                    });
                } else if (data == 7) {
                    $("#AddCar i").animate({
                        opacity: "0"
                    }, 400);
                    $("#AddCar #status").html("Please Enter Price Per Day Correctly").removeClass("text-success").addClass("text-danger").animate({
                        opacity: "1"
                    }, 400, function () {
                        $("#AddCar #DayError").animate({
                            opacity: "1"
                        }, 400);
                    });
                } else if (data == 8) {
                    $("#AddCar i").animate({
                        opacity: "0"
                    }, 400);
                    $("#AddCar #status").html("Please Enter Car Engine Correctly").removeClass("text-success").addClass("text-danger").animate({
                        opacity: "1"
                    }, 400, function () {
                        $("#AddCar #EngineError").animate({
                            opacity: "1"
                        }, 400);
                    });
                }
                else if (data == 9) {
                    $("#AddCar i").animate({
                        opacity: "0"
                    }, 400);
                    $("#AddCar #status").html("Invalid file type. Only  JPG, GIF and PNG types are accepted").removeClass("text-success").addClass("text-danger").animate({
                        opacity: "1"
                    }, 400);
                }
            }
        });

});

    });


    $("#UpdateProfile").submit(function (e) {
        e.preventDefault();
        var id = $("#UpdateProfile #id").val();
        var fname = $("#UpdateProfile #fname").val();
        var lname = $("#UpdateProfile #lname").val();
        var phone = $("#UpdateProfile #phone").val();
        var address = $("#UpdateProfile #address").val();
        var email = $("#UpdateProfile #email").val();
        var password = $("#UpdateProfile #password").val();
        var confirmPassword = $("#UpdateProfile #confirmPassword").val();
        $.ajax({
            url: "../Controllers/edit_info.php",
            type: "POST",
            data: {
                id: id,
                fname: fname,
                lname: lname,
                phone: phone,
                address: address,
                email: email,
                password: password,
                confirmPassword: confirmPassword
            },
            success: function (data) {

                if (data == 1) {
                    $("#UpdateProfile #status").html("Data Updated Successfully").removeClass("text-danger").addClass("text-success").animate({
                        opacity: "1"
                    }, 400, function () {
                        location.reload();
                    });
                } else if (data == 2) {
                    $("#UpdateProfile i").animate({
                        opacity: "0"
                    }, 400);
                    $("#UpdateProfile #status").html("Please Enter First Name Correctly").removeClass("text-success").addClass("text-danger").animate({
                        opacity: "1"
                    }, 400, function () {
                        $("#UpdateProfile #FNameError").animate({
                            opacity: "1"
                        }, 400);
                    });
                } else if (data == 3) {
                    $("#UpdateProfile i").animate({
                        opacity: "0"
                    }, 400);
                    $("#UpdateProfile #status").html("Please Enter Last Name Correctly").removeClass("text-success").addClass("text-danger").animate({
                        opacity: "1"
                    }, 400, function () {
                        $("#UpdateProfile #LNameError").animate({
                            opacity: "1"
                        }, 400);
                    });
                } else if (data == 4) {
                    $("#UpdateProfile i").animate({
                        opacity: "0"
                    }, 400);
                    $("#UpdateProfile #status").html("Please Enter Phone Correctly").removeClass("text-success").addClass("text-danger").animate({
                        opacity: "1"
                    }, 400, function () {
                        $("#UpdateProfile #PhoneError").animate({
                            opacity: "1"
                        }, 400);
                    });

                } else if (data == 5) {
                    $("#UpdateProfile i").animate({
                        opacity: "0"
                    }, 400);
                    $("#UpdateProfile #status").html("Please Enter Address Correctly").removeClass("text-success").addClass("text-danger").animate({
                        opacity: "1"
                    }, 400, function () {
                        $("#UpdateProfile #AddressError").animate({
                            opacity: "1"
                        }, 400);
                    });
                } else if (data == 6) {
                    $("#UpdateProfile i").animate({
                        opacity: "0"
                    }, 400);
                    $("#UpdateProfile #status").html("Please Enter Email Correctly").removeClass("text-success").addClass("text-danger").animate({
                        opacity: "1"
                    }, 400, function () {
                        $("#UpdateProfile #EmailError").animate({
                            opacity: "1"
                        }, 400);
                    });
                } else if (data == 7) {
                    $("#UpdateProfile i").animate({
                        opacity: "0"
                    }, 400);
                    $("#UpdateProfile #status").html("Please Enter Password Correctly").removeClass("text-success").addClass("text-danger").animate({
                        opacity: "1"
                    }, 400, function () {
                        $("#UpdateProfile #PasswordError").animate({
                            opacity: "1"
                        }, 400);
                    });
                } else if (data == 8) {
                    $("#UpdateProfile i").animate({
                        opacity: "0"
                    }, 400);
                    $("#UpdateProfile #status").html("Password and Confirm Password don't match").removeClass("text-success").addClass("text-danger").animate({
                        opacity: "1"
                    }, 400, function () {
                        $("#UpdateProfile #CoPasswordError").animate({
                            opacity: "1"
                        }, 400);
                    });
                }
            }
        });
    });
    $("#SearchCar").submit(function (e) {
        e.preventDefault();
        var id = $("#SearchCar #id").val();
        $.ajax({
            url: "../Controllers/search_car_info.php",
            type: "POST",
            data: {
                id: id,
            },
            success: function (data) {
                if (data == 1) {
                    $("#Search #status").animate({
                        opacity: "0"
                    }, 400);
                    $('#SearchResults , #CarDelete').empty();
                    $("#SearchResults").load("Admin-Profile.php #result", function () {
                        $("#CarDelete").load("Admin-Profile.php #CarDelete",function(){
                             $(".search_delete").animate({
                            opacity: "1"
                        }, 400);
                        })


                    });
                } else if (data == 0) {
                    $(".search_delete").animate({
                        opacity: "0"
                    }, 400);
                    $("#Search #status").html("Car Not Found").removeClass("text-success").addClass("text-danger").animate({
                        opacity: "1"
                    }, 400)
                } else if (data == 2) {
                    $(".search_delete").animate({
                        opacity: "0"
                    }, 400);
                    $("#Search #status").html("Please Enter Car Id Correctly").removeClass("text-success").addClass("text-danger").animate({
                        opacity: "1"
                    }, 400)
                }

            }



        });

    });
        $("#FeedbackForm").submit(function (e) {
        e.preventDefault();
        var feedback = $("#FeedbackForm #FeedbackContent").val();
        $.ajax({
            url: "../Controllers/feedbackController.php",
            type: "POST",
            data: {
                feedback: feedback
            },
            success: function (data) {
                if (data == 1) {
                    $("#FeedbackForm #status").html("Feedback send Successfully , Thank You ").removeClass("text-danger").addClass("text-success").animate({
                        opacity: "1"
                    }, 400, function () {
                        $("#FeedbackForm #FeedbackContent").val("");
                        $("#FeedbackForm #status").delay(2000).animate({
                            opacity: "0"
                        }, 400, function () {
                        });
                    });
                } else
                    $("#FeedbackForm #status").html("Please Write Feedback Correctly").removeClass("text-success").addClass("text-danger").animate({
                        opacity: "1"
                    }, 400)
            }



        });

    });
        $("#reservation").submit(function (e) {
        e.preventDefault();
        var IDCAR = $("#reservation #CARID").val();
   var reserv_type =  $('input[name="reserv-type"]:checked', '#reservation').val();
        var fromdate1 = $("#reservation #fromdate1").val();
        var fromhour = $("#reservation #fromhour").val();
        var tohour = $("#reservation #tohour").val();
        var fromdate = $("#reservation #fromdate").val();
        var todate = $("#reservation #todate").val();

        $.ajax({
            url: "Controllers/makereservationController.php",
            type: "POST",
            data: {
                IDCAR: IDCAR,
                reserv_type:reserv_type,
                   fromdate1: fromdate1,
                fromhour:fromhour,
                   tohour: tohour,
                fromdate:fromdate,
                   todate: todate

            },
            success: function (data) {

                if (data == 1) {
                    $("#reservation #status").html("Please Wait , you will redirect to checkout").removeClass("text-danger").addClass("text-success").animate({
                        opacity: "1"
                    }, 400, function () {
                        $("#reservation #status").delay(2000).animate({
                            opacity: "0"
                        }, 400, function () {
                            window.location = "Views/Checkout.php";
                        });
                    });
                } else if(data == 0)
                    $("#reservation #status").html("Invalid Data , Please Try Another Date").removeClass("text-success").addClass("text-danger").animate({
                        opacity: "1"
                    }, 400)
            }



        });

    });
    $("#CloseReservation").submit(function (e) {
        e.preventDefault();
        $.ajax({
            url: "../Controllers/CloseReservation.php",
            type: "POST",
            success: function (data) {

                if (data == 1) {
                    $("#CloseReservation #status").html("Reservation Closed").removeClass("text-danger").addClass("text-success").animate({
                        opacity: "1"
                    }, 400, function () {
                        $("#login input").val("");
                        location.reload();
                    });
                } else
                    $("#CloseReservation #status").html("Failed , Please Try Again").removeClass("text-success").addClass("text-danger").animate({
                        opacity: "1"
                    }, 400)
            }



        });

    });
        $("#OpenReservation").submit(function (e) {
        e.preventDefault();
        $.ajax({
            url: "../Controllers/OpenReservation.php",
            type: "POST",
            success: function (data) {
              
                if (data == 1) {
                    $("#OpenReservation #status").html("Reservation Opened").removeClass("text-danger").addClass("text-success").animate({
                        opacity: "1"
                    }, 400, function () {
                        $("#login input").val("");
                        location.reload();
                    });
                } else
                    $("#OpenReservation #status").html("Failed , Please Try Again").removeClass("text-success").addClass("text-danger").animate({
                        opacity: "1"
                    }, 400)
            }



        });

    });
});
