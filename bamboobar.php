<!-- header -->
<?php
include_once ("includes/header.php");
?>
<!-- /header -->

<div class="row title-container">
        <div class="col-lg-4 offset-lg-4">
            <h2 class="resource-title">BAMBOO BAR</h2>
        </div>
    </div>
        <div class="row">
            <div class="col-lg-6">
                <span class="reservation-form-title">RESERVATION FORM</span><span
                    class="reservation-form-tagline">(Please kindly fill out the information below)</span>
                <div class="row">
                    <div class="col-lg-9">
                        <div class="form">
                            <!-- form -->
                            <?php
                                include_once ("includes/form-type1.php");
                            ?>
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
                
                <div class="row">
                    <div class="col">
                        <h4 class="facilities-header">Facilities Available</h4>
                        <ul class="facilities">
                            <li>Barbecue</li>
                            <li>Refrigerator</li>
                            <li>Bar, etc.</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>