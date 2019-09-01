<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Codeigniter-3.1.9</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

        <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCkLQ0eIhH8fAbmUDmhvQrfOdP5n-EAdq0&libraries=places"></script>
        <script>
            function init() {
                var input = document.getElementById('locationTextField');
                var autocomplete = new google.maps.places.Autocomplete(input);
            }
            google.maps.event.addDomListener(window, 'load', init);
        </script>

    </head>
    <body>
        <div class="container">
            <h1 style="text-align: center;">Signup With Email/Username</h1>
            <div class="row">
                <div class="col-md-4">
                    <form action="<?php echo base_url('Login/doSignup'); ?>" method="POST">
                        <input class="form-control" required type="text" name="name" placeholder="Enter Your Name">
                        <br><br>
                        <input class="form-control" required type="number" min="5" max="80" name="age" placeholder="Enter Your Age In Year">
                        <br><br>
                        <select class="form-control" name="gender" required="true">
                            <option value="">SELECT YOUR GENDER</option>
                            <option value="MALE">MALE</option>
                            <option value="FEMALE">FEMALE</option>
                            
                        </select>
                        <br><br>
                        <input class="form-control" required type="email" name="email" placeholder="Enter Your Email Address">
                        <br><br>

                         <input class="form-control" required type="text" id="locationTextField" name="location" placeholder="Start Typing Your Location">
                        <br>
                        <small>FOR GOOGLE MAP API WE NEED TO ENABLE BILLING IN GOOGLE. HERE I USED TEST KEY BUT AFTER 4-5 REQUEST [You have exceeded your daily request quota for this API] PLEASE SEE IN CONSOLE IF LOCATION NOT FETCHES </small>
                        <br>
                        <br>

                        <input class="btn btn-success" type="submit" value="Signup">
                        <a href="<?php echo base_url()?>" class="btn btn-danger"> BACK</a>
                    </form>
                    <br>
                    <div style="text-align: center;color: red">
                        <?php 
                            if($this->session->flashdata('error_msg')) 
                            { 
                            echo $this->session->flashdata('error_msg');
                            }
                            ?>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>