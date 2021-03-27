<?php
include("header.php")
?>
<section id="contact">
    <div class="container">
        <div class="row mt-5">
            <div class="col-sm-5  mt-5 p-4 mx-3 " style="box-shadow: 0px 10px 15px grey; background-color:aliceblue">
                <form class="needs-validation " novalidate>
                    <div class="form-row">
                        <div class="col-md-7 mb-3">
                            <label for="validationCustom01">First name</label>
                            <input type="text" class="form-control" id="validationCustom01" placeholder="First name" required>
                            <div class="valid-feedback">
                                first name!
                            </div>
                        </div>
                        <div class="col-md-7 mb-3">
                            <label for="validationCustom02">Last name</label>
                            <input type="text" class="form-control" id="validationCustom02" placeholder="Last name" required>
                            <div class="valid-feedback">
                                last name!
                            </div>
                        </div>
                        <div class="col-md-7 mb-3">
                            <label for="validationCustomUsername">Username</label>
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text" id="inputGroupPrepend">@</span>
                                </div>
                                <input type="text" class="form-control" id="validationCustomUsername" placeholder="Username" aria-describedby="inputGroupPrepend" required>
                                <div class="invalid-feedback">
                                    Please choose a username.
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="col-md-7 mb-3">
                            <label for="validationCustom03">City</label>
                            <input type="text" class="form-control" id="validationCustom03" placeholder="City" required>
                            <div class="invalid-feedback">
                                Please provide a valid city.
                            </div>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="validationCustom04">State</label>
                            <input type="text" class="form-control" id="validationCustom04" placeholder="State" required>
                            <div class="invalid-feedback">
                                Please provide a valid state.
                            </div>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="validationCustom05">Zip</label>
                            <input type="text" class="form-control" id="validationCustom05" placeholder="Zip" required>
                            <div class="invalid-feedback">
                                Please provide a valid zip.
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="invalidCheck" required>
                            <label class="form-check-label" for="invalidCheck">
                                Agree to terms and conditions
                            </label>
                            <div class="invalid-feedback">
                                You must agree before submitting.
                            </div>
                        </div>
                    </div>
                    <button class="btn btn-primary" type="submit">Submit form</button>
                </form>

                <script>
                    // Example starter JavaScript for disabling form submissions if there are invalid fields
                    (function() {
                        'use strict';
                        window.addEventListener('load', function() {
                            // Fetch all the forms we want to apply custom Bootstrap validation styles to
                            var forms = document.getElementsByClassName('needs-validation');
                            // Loop over them and prevent submission
                            var validation = Array.prototype.filter.call(forms, function(form) {
                                form.addEventListener('submit', function(event) {
                                    if (form.checkValidity() === false) {
                                        event.preventDefault();
                                        event.stopPropagation();
                                    }
                                    form.classList.add('was-validated');
                                }, false);
                            });
                        }, false);
                    })();
                </script>
            </div>
            <div class="col-sm-5 mx-5">
                <!-- include map-->
                <?php
                include("map.php")
                ?>

                <div class="row ">
                    <div class="col-sm-5 mt-5 m-2">
                        <div class="card " style="width: 12rem;">
                            <img class="card-img-top img-fluid" style="height: 12rem;" src="assest/contact/1.jpg" alt="Card image cap">
                            <div class="card-body">
                            
                                <h5 class="card-title">9897527242</h5>
                               
                                
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-5 mt-5 m-2">
                        <div class="card " style="width: 12rem;">
                            <img class="card-img-top img-fluid" style="height: 12rem;" src="assest/contact/2.jpg" alt="Card image cap">
                            <div class="card-body">
                                <h5 class="card-title">9897527242</h5>
                               
                                
                            </div>
                        </div>
                    </div>
                   
                </div>
            </div>
        </div>



</section>


<?php
include("footer.php");
?>