<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Codeigniter-3.1.9</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    </head>
    <body>
        <div class="container">
            <h1 style="text-align: center;">Welcome [ WAYCOOL ASSIGNMENTS]</h1>
            <br><br>
            <a href="<?php echo base_url('Login/login');?>" class="btn btn-primary"> Login With Email </a> 
            <a href="<?php echo base_url('Login/signup');?>" class="btn btn-danger"> Signup With Email</a>
            <br><br>
            <img style="width: 170px;" data-toggle="modal" data-target="#myModal1" src="include/fb.png" title="LOGIN WITH FACEBOOK">
            <img style="width: 170px;" data-toggle="modal" data-target="#myModal2" src="include/gmail.png" title="LOGIN WITH GOOGLE + ">
        </div>
        <div id="myModal1" class="modal fade" role="dialog">
            <div class="modal-dialog">
                <!-- Modal content-->
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        <h4 class="modal-title">Information</h4>
                    </div>
                    <div class="modal-body">
                        <p>Login With Facebook Requires HTTPS Connection. So For Demo Purpose Can't Be Implemented.</p>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>
        <div id="myModal2" class="modal fade" role="dialog">
            <div class="modal-dialog">
                <!-- Modal content-->
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        <h4 class="modal-title">Information</h4>
                    </div>
                    <div class="modal-body">
                        <p>Login With Gmail Requires HTTPS Connection. So For Demo Purpose Can't Be Implemented.</p>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>
    </body>
    <!--     FACEBOOK LOGIN API         -->
 
</html>