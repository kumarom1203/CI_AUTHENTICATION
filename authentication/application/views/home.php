<?php
    include('header.php');
    ?>
<div class="container">
    <table class="table table-bordered">
        <tbody>
            <tr>
                <th>Name</th>
                <td style="text-transform: capitalize;"><?php echo $data['name']?></td>
                <th>Email</th>
                <td><?php echo $data['email']?></td>
            </tr>
            <tr>
                <th>Gender</th>
                <td><?php echo $data['gender']?></td>
                <th>Age</th>
                <td><?php echo $data['age']?> Y</td>
            </tr>
            <tr>
                <th>Username</th>
                <td><?php echo $data['username']?></td>
                <th>Location</th>
                <td style="text-transform: capitalize;"><?php echo $data['location']?> Y</td>
            </tr>
            <tr>
                <th>Facebook LINKED</th>
                <td>
                    <?php 
                        if($data['facebook_id'] == '')
                            echo 'NO <a data-toggle="modal" data-target="#myModal1" class="btn btn-primary"> LINKED FB NOW</a>';
                        else
                            echo 'YES';
                        ?>
                </td>
                <th>GOOGLE + LINKED</th>
                <td>
                    <?php 
                        if($data['google_id'] == '')
                            echo 'NO <a data-toggle="modal" data-target="#myModal2" class="btn btn-danger"> LINKED G+ NOW</a>';
                        else
                            echo 'YES';
                        ?>
                </td>
            </tr>
        </tbody>
    </table>
    <div style=" text-align: center; ">
        <span>ACTIVE SINCE: <?php echo date('d-m-Y', strtotime($data['created_at'])); ?></span>
        <br>
        <br>
        <a class="btn btn-danger" href="<?php echo base_url('Home/deleteAccount') ?>"> DELETE ACCOUNT</a>
    </div>
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
</html>