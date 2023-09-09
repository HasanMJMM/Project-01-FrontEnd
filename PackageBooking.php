<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.

user-cst/20/027
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Package Booking</title>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"
              integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <link rel="stylesheet" href="Admin_dashboard\bus registration.css">
        <title>Package Booking </title>



        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"
                integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz"
        crossorigin="anonymous"></script>
        <link rel="stylesheet" href="bus registration.css" />
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
              integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw=="
              crossorigin="anonymous" referrerpolicy="no-referrer" />
    </head>
    <body>
        <?php
        // put your code here
        ?>
       
        <div class="container-fluid bg-dark text-light py-3">
            <div class="d-flex justify-content-center">
                <h1 class="display-6">Package Booking</h1>
            </div>
        </div><br><br><br><br>
        
        <section class="container my-2 bgdark w-50 text">
        
            <form class="row g-3p-3">
                
               
                <div class="col-md-4">
                    
                    <label for="validationCustom01" class="form-label">Sender's Name</label>
                    <input type="text" class="form-control" id="validationCustom01" required>
                </div>

                <div class="col-md-4">
                    
                    <label for="validationCustom01" class="form-label">Receiver's Name</label>
                    <input type="text" class="form-control" id="validationCustom01" required>
                </div>


                <div >
                    <label for="inputState" class="form-label">Select Parcel Type</label><br>
                    <select id="inputState" class="form-select">
                        <option selected>Normal Parcel</option>
                        <option> Electronic Items</option>
                        <option> Other</option>

                    </select>
                </div>
                <div class="col-md-6">
                    <label for="validationCustom01" class="form-label">Receiver's Address</label>
                    <input type="text" class="form-control" id="validationCustom01" required>

                </div>
                <div class="col-md-6">
                    <label for="validationCustom02" class="form-label">Telephone Num</label>
                    <input type="text" class="form-control" id="validationCustom02" required><br>

                </div>
                <div class="col-md-6">
                    <label for="validationCustom02" class="form-label">Weight(kg)</label>
                    <input type="text" class="form-control" id="validationCustom02" required><br>

                </div>

                <div class="col-md-6">
                    <label for="inputEmail4" class="form-label">Payment Method</label>
                    <div class="form-check">
                    <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                    
                    </div>
                    <div class="form-check">
                    <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2" checked>
                    <label class="form-check-label" for="flexRadioDefault2">
                        Credit Card
                    </label>
                    </div><br>
                




                <div class="col-12">
                    <button type="submit" class="btn btn-primary">Reserve</button>
                </div>




        </section>

    </body>
</html>
