<!DOCTYPE html>
<html>
<head>
    <title>Menu Options</title>
    <!-- Include Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <!-- Include Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <style>
        body {
            margin: 0;
            padding: 0;
            font-family: Arial, sans-serif;
        }
        #navbar {
            background-color: #333;
            overflow: hidden;
        }
        #navbar a {
            float: left;
            display: block;
            color: white;
            text-align: center;
            padding: 20px 16px;
            text-decoration: none;
        }
        #navbar a:hover {
            background-color: #ddd;
            color: black;
        }
        .product-image {
            width: 100%;
            height: auto;
        }
    </style>
</head>
<body>
    <div id="navbar">
        <a href="#">Home</a>
        <a href="#">Products</a>
        <a href="#">About</a>
        <a href="#">Contact</a>
    </div>

    <div class="row display_house" style="max-width: 99.9%; margin-left: -1px; clear: both;">
        <div class="col-lg-6">
            <div class="card text-white bg-light border border-info mt-2 mb-2">
                <img src="../path/to/your/house-image.jpg" alt="House Product" width="100%" style="height: 300px;">
                <div class="card-body bg-dark">
                    <div>
                        <span style="width:70%; float:left;">Section: <i class="fa fa-angle-double-down" style="font-size:15px;color:green"></i>Bedroom</span>
                    </div>

                    <table class="table mt-2 mb-">
                        <tbody>
                            <tr>
                                <td width="50%" style="color:white; border:white solid 1px; border-left: none; font-size:13px;">Product:  <i class="fa fa-caret-right" style="font-size:12px;color:red"></i> Bedsheets</td>
                                <td width="50%" style="color:white; border:white solid 1px; border-right: none; font-size:13px;">Price: <i class="fa fa-caret-down" style="font-size:12px;color:red"></i> Ksh.100,00</td>
                            </tr>
                            <tr>
                                <td width="50%" style="color:white; border:white solid 1px; border-bottom: none; border-left: none; font-size:13px;">
                                    <div id="show_details_house123">
                                        <a id="show_details" style="cursor:pointer" data-value="house123">
                                            <span class="text-primary"><i class="fa fa-info-circle" style="font-size:20px;color:yellow;"></i> Show details</span>
                                        </a>
                                    </div>
                                </td>
                                <td width="50%" style="color:white; border:white solid 1px; border-bottom: none; border-right: none; font-size:13px;">
                                    <button data-house_land="house123" class="share-button text-light btn btn-success"><span class="text-light">Share</span></button>
                                </td>
                            </tr>
                        </tbody>
                    </table>

                    <table class="table mt-2">
                        <tbody>
                            <tr>
                                <td width="50%" style="color:white; border:white solid 1px; border-bottom: none; font-size:13px;" class="text-center">
                                    <a id="view_house_photos" style="cursor:pointer" data-house_code="house123" data-username="john_doe">
                                        View Photos <i class="fa fa-image" style="font-size:15px;color:yellow"></i>
                                    </a>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>

                <div style="display: none;" id="show_house_details_house123">
                    <div style="position: absolute;width: 95%;padding: 10px;background-color: black;border-radius:5px;z-index: 9;">
                        <span id="show_less" style="cursor:pointer" class="text-warning d-flex justify-content-end" data-value="house123">Dismiss</span>
                        <table class="table mt-2">
                            <tbody>
                                <tr>
                                    <td>
                                        <table class="table mt-2">
                                            <tbody>
                                                <tr>
                                                    <td width="100%" style="color:white; border:white solid 1px; border-top: none; font-size:13px; ">Description  <i class="fa fa-caret-right" style="font-size:12px;color:red"></i></td>
                                                </tr>
                                            </tbody>
                                        </table>
                                        <table class="table mt-2">
                                            <tbody>
                                                <tr>
                                                    <td width="50%" style="color:white; border:white solid 1px; border-top: none; font-size:13px;">Your Text Here</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Include Bootstrap JS and jQuery -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    
    <script>
        $(document).ready(function () {
            $(document).on('click', '#show_details_house123', function () {
                $("#show_house_details_house123").show();
            });

            $(document).on('click', '#show_less', function () {
                $("#show_house_details_house123").hide();
            });
        });
    </script>
</body>
</html>
