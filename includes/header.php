<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- Favicon -->
    <link rel="icon" type="image/png" href="photos/logo.png" sizes="16x16">
    <!-- Font link -->
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
    <!-- Bootstrap css -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <!-- Custom css -->
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/calendar.css">
    <title>Resource Scheduler</title>
</head>

<body class="resource-main-body">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-7">
                <div class="logo">
                    <h2>TEP LOGO</h2>
                </div>
            </div>
            <div class="col">
                <form class="select-resource-form">
                    <div class="row">
                        <div class="col">
                            <div class="input-group mb-3">
                                <select class="custom-select custom-select-lg mb-3 select-rsc">
                                    <option selected>Select Options</option>
                                    <option value="Studio">Studio</option>
                                    <option value="Conference room">Conference room</option>
                                    <option value="Training room">Training room</option>
                                    <option value="Bamboo bar">Bamboo bar</option>
                                    <option value="Pool car 1">Pool car 1</option>
                                    <option value="Pool car 2">Pool car 2</option>
                                    <option value="Abuja Pool car">Abuja Pool car</option>
                                    <option value="Van">Van</option>
                                    <option value="Transporters">Transporters</option>
                                    <option value="Pick-up">Pick-up</option>
                                    <option value="Table tennis court">Table tennis court</option>
                                </select>
                                <div class="input-group-append">
                                    <button class="btn btn-outline-secondary go-btn" type="submit"
                                        id="button-addon2">GO!</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>