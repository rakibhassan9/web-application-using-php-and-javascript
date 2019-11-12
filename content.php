



<body>
    
<!--Modal: Login / Register Form-->
<div class="modal fade" id="modalLRForm" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog cascading-modal" role="document">
        <!--Content-->
        <div class="modal-content">

            <!--Modal cascading tabs-->
            <div class="modal-c-tabs">

                <!-- Nav tabs -->
                <ul class="nav nav-tabs tabs-2 light-blue darken-3" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link active" data-toggle="tab" href="#panel7" role="tab"><i class="fa fa-user mr-1"></i> Login</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-toggle="tab" href="#panel8" role="tab"><i class="fa fa-user-plus mr-1"></i> Register</a>
                    </li>
                </ul>


                <!-- Tab panels -->
                <div class="tab-content">
                    <!--Panel 7-->
                    <div class="tab-pane fade in show active" id="panel7" role="tabpanel">

                        <!--Body-->
                        <div class="modal-body mb-1">
                          <form action="loginProcess.php" method="post">
                            <div class="md-form form-sm mb-5">
                                <i class="fa fa-phone prefix"></i>
                                <input type="tel" name="l_phone" id="modalLRInput10" required="1" class="form-control form-control-sm validate" placeholder="Your Phone">
                                <!-- <label data-error="wrong" data-success="right" for="modalLRInput10">Your Phone</label> -->
                            </div>

                            <div class="md-form form-sm mb-4">
                                <i class="fa fa-lock prefix"></i>
                                <input type="password" name="l_pass" id="modalLRInput11"  required="1" class="form-control form-control-sm validate" placeholder="Password">
                               <!--  <label data-error="wrong" data-success="right" for="modalLRInput11">Your password</label> -->
                            </div>
                            <div class="text-center mt-2">
                                <button name ="login_acc" id = "login_btn" type="submit" class="btn btn-primary">Log in <i class="fa fa-sign-in ml-1"></i></button>
                            </div>
                          </form>
                        </div>
                        <!--Footer-->
                        <div class="modal-footer">
                            <div class="options text-center text-md-right mt-1">
                                <p>Not a member? <a href="#" class="blue-text">Sign Up</a></p>
                                <p>Forgot <a href="#" class="blue-text">Password?</a></p>
                                
                                </ul>

                            </div>
                            <button type="button" class="btn btn-outline-info waves-effect ml-auto" data-dismiss="modal">Close</button>
                        </div>

                    </div>
                    <!--/.Panel 7-->

                    <!--Panel 8-->
                    <div class="tab-pane fade" id="panel8" role="tabpanel">

                        <!--Body-->
                        <div class="modal-body">
                          <form action="signup-process.php" method="post">
                            <div class="md-form form-sm mb-5">
                                <i class="fa fa-user prefix"></i>
                                <input name="fname" type="text" id="modalLRInput12" required="1" class="form-control form-control-sm validate" placeholder="First Name">
                                <!-- <label data-error="wrong" data-success="right" for="modalLRInput12">First Name</label> -->
                            </div>

                            <div class="md-form form-sm mb-5">
                                <i class="fa fa-user prefix"></i>
                                <input name="lname" type="text" id="modalLRInput12" class="form-control form-control-sm validate" placeholder="Last Name" required="1">

                                <!-- <label data-error="wrong" data-success="right" for="modalLRInput12">Last Name</label> -->
                            </div>

                            <div class="md-form form-sm mb-5">
                                <i class="fa fa-phone prefix"></i>
                                <input name="phone" type="text" id="ppp" required="1" onchange="onlive();" oninput ="validate();" class="form-control form-control-sm validate" placeholder="Your Phone">
                                <div class="okbtnphn"><i class="fas fa-check-circle okbtnphn"></i></div>
                                
                                <!-- <label data-error="wrong" data-success="right" for="modalLRInput12">Your Phone</label> -->
                            </div>


                            <div class="md-form form-sm mb-5">
                                <i class="fa fa-lock prefix"></i>
                                <input name="pass" type="password" id="pas1" required="1" onchange="onlive();" oninput ="validate();" class="form-control form-control-sm validate" placeholder="Password">
                                <div class="okbtnpass"><i class="fas fa-check-circle okbtnpass"></i></div>
                                <!-- <label data-error="wrong" data-success="right" for="modalLRInput13">Your password</label> -->
                            </div>

                            <div class="md-form form-sm mb-4">
                                <i class="fa fa-lock prefix"></i>
                                <input name="repass" type="password" required="1" onchange="onlive();" oninput ="validate();" id="repas" class="form-control form-control-sm validate" placeholder="Repeat Password">
                                <div class="okbtnrepass"><i class="fas fa-check-circle okbtnrepass"></i></div>
                                <!-- <label data-error="wrong" data-success="right" for="modalLRInput14">Repeat password</label> -->
                            </div>

                            <div class="text-center form-sm mt-2">
                                <button type="submit" name="signup" id="sing_up" class="btn btn-primary">Sign up <i class="fa fa-sign-in ml-1"></i></button>
                            </div>
                          </form>
                        </div>
                        <!--Footer-->
                        <div class="modal-footer">
                            <div class="options text-right">
                                <p class="pt-1">Already have an account? <a href="#" class="blue-text">Log In</a></p>
                            </div>
                            <button type="button" class="btn btn-outline-info waves-effect ml-auto" data-dismiss="modal">Close</button>
                        </div>
                        <div style="" id="animate" class="nothing">
                            <div class="warning_error">
                                <div id="triangle-up">
                                    
                                </div>
                                <div id="talkbubble">
                                  <p>Please input 11 digit phone number</p>     
                                </div>
                            </div>
                        </div>

                        <div style="" id="animatePas" class="nothing">
                            <div class="warning_error">
                                <div id="triangle-up">
                                    
                                </div>
                                <div id="talkbubble">
                                  <p>Password must be 6 character</p>     
                                </div>
                            </div>
                        </div>


                    </div>
                    <!--/.Panel 8-->
                </div>

            </div>
        </div>
        <!--/.Content-->
    </div>
</div>
<!--Modal: Login / Register Form-->


                



  <!-- Custom Content is Start from Here -->

    <div class="main-wrapper">
      <div class="container">
        <div class="row" style="margin-top: 30px">
            
            <div class="col-md-6">
                <div class="header_logo">
                  <img class="logo-img"src="images/logo-bn.png" alt="">
                </div>
            </div>
            <div class="col-md-6">
                <div class="header_Slogan" style="text-align: center;">
                	<h2 style=""><span style="color: #E3106E;">b</span>kash</h2>
                	<h2 style="font-size: 20px;"> 24/7 At Your Service</h2>
   				     </div>
            </div>
          
             
            <div class="col-md-12" style="margin-top: 100px" id="dialBox">

                <div class="text-center">
                    <a href="" class="btn btn-primary btn-rounded my-3" data-toggle="modal" data-target="#modalLRForm">LogIn/Register</a>
                </div>
           	                	
            </div>
          </div>
      
     </div>

 </div>



      