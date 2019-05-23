<form class="form-type1">
    <div class="form-group">
        <label for="contactName">Contact Name</label>
        <input type="text" class="form-control" id="contactName" aria-describedby="emailHelp">
    </div>
    <!-- ///...................... -->
    <div class="row">
        <div class="col">
            <div class="form-group">
                <label for="phoneNumber">Phone Number</label>
                <input type="text" class="form-control" id="phoneNumber">
            </div>
        </div>
        <div class="col">
            <div class="form-group">
                <label for="email">Email Address</label>
                <input type="text" class="form-control" id="email">
            </div>
        </div>
    </div>
    <!-- ///...................... -->


    <!-- /////////////////////////// -->
    <fieldset class="form-group">
        <div class="row">
            <!-- <div class="col"> -->
            <legend class="col-form-label col-sm-5 pt-0 section-label">
                <h5>Type of
                    Project</h5>
            </legend>
            <!-- </div> -->
        </div>
        <div class="row">
            <div class="col-sm-7">

                <!-- /////////// -->

                <table class="table table-borderless">
                    <tbody>
                        <tr>
                            <td>
                                <label class="form-check-label" for="gridRadios1">
                                    First radio
                                </label>
                            </td>
                            <td>
                                <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios1" value="option1" checked>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <label class="form-check-label" for="gridRadios2">
                                    Second radio
                                </label></td>
                            <td>
                                <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios2" value="option1">
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <label class="form-check-label" for="gridRadios3">
                                    Third radio
                                </label></td>
                            <td>
                                <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios3" value="option1">
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <label class="form-check-label" for="gridRadios4">
                                    Other Specific Projects
                                </label></td>
                            <td>
                                <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios4" value="option1">
                            </td>
                        </tr>
                    </tbody>
                </table>

                <!-- /////////// -->
            </div>
        </div>
    </fieldset>
    <!-- /////////////////////////// -->
    <!-- ///...................... -->
    <div class="row">
        <div class="col">
            <h5 class="section-label">Choose Date</h5>
        </div>
    </div>
    <div class="row">
        <div class="col">
            <div class="form-group">
                <label for="beginTime">From</label>
                <input type="date" class="form-control" id="beginTime">
            </div>
        </div>
        <div class="col">
            <div class="form-group">
                <label for="endTime">To</label>
                <input type="date" class="form-control" id="endTime">
            </div>
        </div>
    </div>
    <!-- ///...................... -->
    <!-- ///...................... -->
    <div class="row">
        <div class="col">
            <h5 class="section-label">Daily Resumption and closing time</h5>
        </div>
    </div>
    <div class="row">
        <div class="col">
            <div class="form-group">
                <label for="phoneNumber">Starting Time</label>
                <input type="time" class="form-control" id="phoneNumber">
            </div>
        </div>
        <div class="col">
            <div class="form-group">
                <label for="closingTime">Closing Time</label>
                <input type="time" class="form-control" id="closingTime">
            </div>
        </div>
    </div>
    <!-- ///...................... -->
    <div class="form-group section-label">
        <label for="numOfParticipants">
            <h5>Number of Participants</h5>
        </label>
        <input type="text" class="form-control" id="numOfParticipants">
    </div>
    <div class="form-group section-label">
        <label for="specialRequest">
            <h5>Special Request</h5>
        </label>
        <textarea class="form-control" id="specialRequest" rows="5"></textarea>
    </div>
    <button type="submit" class="btn btn-primary submit-button">Submit</button>
</form>