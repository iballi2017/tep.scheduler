<!-- header -->
<?php
    include_once ("includes/header.php");
?>
<!-- /header -->

<div class="row title-container">
    <div class="col-lg-6 offset-lg-3">
        <h2 class="resource-title">PICK UP</h2>
    </div>
</div>
<div class="row">
    <div class="col-lg-6">
        <span class="reservation-form-title">RESERVATION FORM</span><span class="reservation-form-tagline">(Please
            kindly fill out the information below)</span>
        <div class="row">
            <div class="col-lg-9">
                <div class="form">
                    <!-- form -->
                    <form class="form-type1">
                        <div class="form-group">
                            <label for="contactName">Contact Person</label>
                            <input type="text" class="form-control" id="contactName">
                        </div>
                        <!-- ///...................... -->
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label for="phoneNumber">Phone Number</label>
                                    <input type="text" class="form-control" id="phoneNumber">
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label for="email">Email Address</label>
                                    <input type="text" class="form-control" id="email">
                                </div>
                            </div>
                        </div>
                        <!-- ///...................... -->

                        <!-- ///...................... -->
                        <div class="row">
                            <div class="col">
                                <!-- <h5 class="section-label">Pick up Location</h5> -->
                                <label class="section-label" for="pickupLocation">Pick up Location</label>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <select class="custom-select" id="pickupLocation">
                                        <option selected>State</option>
                                        <option value="1">One</option>
                                        <option value="2">Two</option>
                                        <option value="3">Three</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <select class="custom-select">
                                        <option selected>LGA</option>
                                        <option value="1">One</option>
                                        <option value="2">Two</option>
                                        <option value="3">Three</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <!-- ///...................... -->
                        <!-- ///...................... -->
                        <div class="row">
                            <div class="col">
                                <label class="section-label" for="dropoffLocation">Drop off Location</label>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <select class="custom-select" id="dropoffLocation">
                                        <option selected>State</option>
                                        <option value="1">One</option>
                                        <option value="2">Two</option>
                                        <option value="3">Three</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <select class="custom-select">
                                        <option selected>LGA</option>
                                        <option value="1">One</option>
                                        <option value="2">Two</option>
                                        <option value="3">Three</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <!-- ///...................... -->

                        <div class="row">
                            <div class="col">
                                <h5 class="section-label">Pick up Date</h5>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <div class="form-group">
                                    <label for="pickupBeginTime">From</label>
                                    <input type="date" class="form-control" id="pickupBeginTime">
                                </div>
                            </div>
                            <div class="col">
                                <div class="form-group">
                                    <label for="pickupEndTime">To</label>
                                    <input type="date" class="form-control" id="pickupEndTime">
                                </div>
                            </div>
                        </div>
                        <!-- ///...................... -->
                        <div class="row">
                            <div class="col">
                                <h5 class="section-label">Drop off Date</h5>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <div class="form-group">
                                    <label for="dropoffBeginTime">From</label>
                                    <input type="date" class="form-control" id="dropoffBeginTime">
                                </div>
                            </div>
                            <div class="col">
                                <div class="form-group">
                                    <label for="dropoffEndTime">To</label>
                                    <input type="date" class="form-control" id="dropoffEndTime">
                                </div>
                            </div>
                        </div>
                        <!-- ///...................... -->
                        <!-- /////////////////////////// -->
                        <div class="form-group">
                            <label for="pickupTime">Pickup Time</label>
                            <input type="time" class="form-control" id="pickupTime">
                        </div>
                        <!-- ///...................... -->
                        <!-- ///...................... -->
                        <div class="form-group section-label">
                            <label for="receiverName">Receiver's Name</label>
                            <input type="text" class="form-control" id="receiverName">
                        </div>
                        <div class="form-group section-label">
                            <label for="receiverNumber">Receiver's Number</label>
                            <input type="text" class="form-control" id="receiverNumber">
                        </div>
                        <div class="form-group section-label">
                            <label for="weight">Weight</label>
                            <div class="row">
                                <div class="col">
                                    <div class="form-group">
                                        <input type="text" class="form-control" id="weight">
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="form-group">
                                        <select class="custom-select">
                                            <option selected>Kg</option>
                                            <option value="1">g</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        <!-- ///...................... -->
                        <div class="form-group section-label">
                            <label for="packageContent">Package content</label>
                            <input type="text" class="form-control" id="packageContent">
                        </div>
                        </div>
                        <div class="form-group section-label">
                            <label for="specialRequest">Special Request</label>
                            <textarea class="form-control" id="specialRequest" rows="5"></textarea>
                        </div>
                        <button type="submit" class="btn btn-primary submit-button">Submit</button>
                    </form>
                    <!-- form -->
                </div>
            </div>
        </div>
    </div>

    <div class="col-lg-3 offset-lg-2">
        <span class="reservation-form-title">Working Days</span>
        <div id="calendar-piece">

            <!-- calendar -->
            <?php
                        include_once ("includes/calendar.php");
                    ?>
            <!-- calendar -->
        </div>
    </div>
</div>
</div>
</body>

</html>