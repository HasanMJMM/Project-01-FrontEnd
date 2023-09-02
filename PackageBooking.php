<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <title>Document</title>
    <link rel="preconnect" href="https://fonts.gstatic.com" /><link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,400;0,700;1,400;1,700&amp;family=Rubik:ital,wght@0,400;0,500;0,700;1,400;1,500;1,700&amp;display=swap" rel="stylesheet" />
    <!--  Stylesheets==
    -->
    <link href="assets/css/vendor.min.css" rel="stylesheet" /><link href="assets/css/style.css" rel="stylesheet" /><meta name="description" content="Pronto Lanka is the largest and most experienced Domestic Courier Service Company in the Island handling time sensitive documents and packages for corporate and individual clients for over 33 years." /><meta name="keywords" content="Delivery services in Sri Lanka,Courier services in Sri Lanka,Cash on Delivery,Courier,Pronto,Parcel Delivery,IslandWide Delivery,Mail Bag Service" />

    <script src="sweetalert2.all.min.js"></script>
    <script src="assets/js/vendor/sweetalert2.min.js"></script>
    <link rel="stylesheet" href="assets/css/sweetalert2.min.css" />
    <style>
        #mask {
            position: absolute;
            left: 0;
            top: 0;
            z-index: 9000;
            background-color: #000;
            display: none;
        }

        #boxes .window {
            position: absolute;
            left: 0;
            top: 0;
            width: 440px;
            height: 200px;
            display: none;
            z-index: 9999;
            padding: 20px;
            border-radius: 15px;
            text-align: center;
        }

        #boxes #dialog {
            width: 450px;
            height: auto;
            padding: 10px;
            background-color: #ffffff;
            font-family: 'Segoe UI Light', sans-serif;
            font-size: 15pt;
        }

        .maintext {
            text-align: center;
            font-family: "Segoe UI", sans-serif;
            text-decoration: none;
        }

        body {
            background: url('bg.jpg');
        }

        #lorem {
            font-family: "Segoe UI", sans-serif;
            font-size: 12pt;
            text-align: left;
        }

        #popupfoot {
            font-family: "Segoe UI", sans-serif;
            font-size: 16pt;
            padding: 10px 20px;
        }

            #popupfoot a {
                text-decoration: none;
            }

        .agree:hover {
            background-color: #D1D1D1;
        }

        .popupoption:hover {
            background-color: #D1D1D1;
            color: green;
        }

        .popupoption2:hover {
            color: red;
        }

        .required-f {
            border: 1px solid red;
        }
    </style>
    <style>
        .gfg {
            margin: 3%;
            position: relative;
        }

        #receiver {
            position: absolute;
            color: #000;
            top: 30px;
            left: 190px;
        }

        #DateandTime {
            position: absolute;
            color: #000;
            bottom: 110px;
            left: 450px;
        }

        #NIC {
            position: absolute;
            color: #000;
            bottom: 75px;
            left: 450px;
        }

        #Image2 {
            position: absolute;
            color: #000;
            bottom: 110px;
            left: 120px;
        }

        .navbar.navbar-fixed .navbar-nav>li>a {
            font-size: 12px !important;
        }

        /*.second-txt {
            position: absolute;
            bottom: 20px;
            left: 10px;
        }*/
        
    </style>
</head>
<body>
       <!--End .col-lg-6-->
       <div class="col-12 col-lg-12">
        <div class="contact-panel">
            <div class="contact-types">
                <a class="button quote-btn" href="javascript:void(0)" data-form="quoteFormActive"><i class="flaticon-020-order"></i><span>Book Your Pick Up</span></a>
                <a class="button track-btn active" href="javascript:void(0)" data-form="trackFormActive"><i class="flaticon-009-shipping-1"></i><span>Track & Trace</span></a>
            </div>
            <div class="contact-card">
                <div class="contact-body trackFormActive">
                    <forms class="contactForm quote-form mb-0">
                        <div class="row">
                            <div id="UpdatePanel3" style="width: 100%">

                                    <div id="PanelQ" style="width: 100%">

                                        <div class="row">
                                            <div class="col-lg-12">
                                                <h4>Book Your Pick Up</h4>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-lg-6">
                                                <div class="row">
                                                    <div class="col-12 col-md-12 col-lg-12 text--center">
                                                        <span style="font-size: 1.2em;">Sender's Details</span>
                                                    </div>
                                                    <div class="col-12 col-md-12 col-lg-12">
                                                        <input name="TextBox1" type="text" id="TextBox1" class="form-control" placeholder="Name *" autocomplete="on" />
                                                    </div>
                                                    <div class="col-12 col-md-12 col-lg-8">
                                                        <input name="TextBox2" type="text" id="TextBox2" class="form-control" placeholder="Address *" autocomplete="on" />
                                                    </div>
                                                    <div class="col-12 col-md-12 col-lg-4">
                                                        <input name="TextBox4" type="text" maxlength="10" id="TextBox4" class="form-control NumbersOnly" placeholder="Telephone Number *" autocomplete="on" />
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-6">
                                                <div class="col-12 col-md-12 col-lg-12 text--center">
                                                    <span style="font-size: 1.2em;">Receiver's Details</span>
                                                </div>
                                                <div class="row">
                                                    <div class="col-12 col-md-12 col-lg-12">
                                                        <select name="DropDownList5" onchange="javascript:setTimeout(&#39;__doPostBack(\&#39;DropDownList5\&#39;,\&#39;\&#39;)&#39;, 0)" id="DropDownList5" class="form-control">
<option selected="selected" value="SELECT">Select No of Locations *</option>
<option value="1">1</option>
<option value="2">2</option>
<option value="3">3</option>
<option value="4">4</option>
<option value="5">5</option>
<option value="6">6</option>
<option value="7">7</option>
<option value="8">8</option>
<option value="9">9</option>
<option value="10">10</option>

</select>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-12 col-md-12 col-lg-4">
                                                        <input name="TextBox_s1_1" type="text" id="TextBox_s1_1" class="form-control" placeholder="Receiver Name" autocomplete="on" />
                                                    </div>
                                                    <div class="col-12 col-md-12 col-lg-4">
                                                        <input name="TextBox_s1_2" type="text" maxlength="10" id="TextBox_s1_2" class="form-control NumbersOnly" placeholder="Receiver Telephone Number" autocomplete="on" />
                                                    </div>
                                                    <div class="col-12 col-md-12 col-lg-4">
                                                        <input name="TextBox_s1_3" type="text" id="TextBox_s1_3" class="form-control" placeholder="Receiver Address" autocomplete="on" />
                                                    </div>
                                                </div>
                                                
                                                
                                                
                                                
                                                
                                                
                                                
                                                
                                                
                                            </div>
                                        </div>
                                        <br />
                                        <div class="row">
                                            <div class="col-12 col-md-12 col-lg-8">
                                                <select name="DropDownList1" id="DropDownList1" class="form-control">
<option value="SELECT">Select Document Type</option>
<option value="Normal Document">Normal Document</option>
<option value="Original Document / Certificates">Original Document / Certificates</option>
<option value="Confidential/ Legal Document">Confidential/ Legal Document</option>
<option value="Tender">Tender</option>
<option value="Passport / ID / Visa Forms">Passport / ID / Visa Forms</option>
<option value="Cheques">Cheques</option>
<option value="CR">CR</option>
<option value="Deeds">Deeds</option>

</select>
                                            </div>
                                            <div class="col-12 col-md-12 col-lg-4">
                                                <select name="DropDownList3" id="DropDownList3" class="form-control">
<option value="Select">Select Payment By</option>
<option value="Sender">Sender</option>
<option value="Receiver">Receiver</option>
<option value="Registered Account">Registered Account</option>

</select>
                                            </div>
                                            <div class="col-12 col-md-12 col-lg-6">
                                                <div class="row">
                                                    <div class="col-12 col-md-12 col-lg-12">
                                                        <select name="DropDownList2" onchange="javascript:setTimeout(&#39;__doPostBack(\&#39;DropDownList2\&#39;,\&#39;\&#39;)&#39;, 0)" id="DropDownList2" class="form-control">
<option selected="selected" value="SELECT">Select Parcel Type</option>
<option value="Normal Parcel">Normal Parcel</option>
<option value="Electronic Items">Electronic Items</option>
<option value="Other">Other</option>

</select>
                                                    </div>
                                                </div>
                                                
                                            </div>
                                            <div class="col-12 col-md-12 col-lg-6">
                                                
                                            </div>

                                            
                                        </div>
                                        <div class="row">
                                            <div class="col-4"></div>
                                            <div class="col-4">
                                                <button class="btn btn--secondary btn--block" type="button" id="Book_pickup">Book pickup</button>
                                                <a onclick="return ValidationInputData();" id="LinkButton2" class="btn btn--secondary btn--block" href="javascript:__doPostBack(&#39;LinkButton2&#39;,&#39;&#39;)" style="display:inline-block;width:100%;display: none;">Book pickup</a>
                                            </div>
                                            <input type="hidden" name="hdf007" id="hdf007" value="1" />
                                        </div>
                                        
                                        <br />
                                        <br />
                                        <div class="row">
                                            <div class="col-12">
                                                <ul>
                                                    <li><i class="fa fa-circle" style="font-size: 0.6em;"></i>&nbsp;&nbsp;Details (sender's/receiver's name, address, mobile number) should be mentioned on the parcel and keep it ready</li>
                                                    <li><i class="fa fa-circle" style="font-size: 0.6em;"></i>&nbsp;&nbsp;We do not accept perishable items, liquids, pets, fragile items & illegal products</li>
                                                    <li><i class="fa fa-circle" style="font-size: 0.6em;"></i>&nbsp;&nbsp;Medical items which can be delivered under normal condition will only be accepted</li>
                                                    <li><i class="fa fa-circle" style="font-size: 0.6em;"></i>&nbsp;&nbsp;Packages can be handed over to  Office - Badulla every weekday until 8.00 p.m.</li>
                                                    <li><i class="fa fa-circle" style="font-size: 0.6em;"></i>&nbsp;&nbsp;Packages can be handed over to all  branches on every Saturday until 12.00 p.m.</li>
                                                    <li><i class="fa fa-circle" style="font-size: 0.6em;"></i>&nbsp;&nbsp;Packaging materials can be purchased from  Head Office - Badulla on every weekday until 6.00 p.m.</li>
                                                    
                                                </ul>
                                            </div>

                                        </div>
                                    
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
</body>
</html>