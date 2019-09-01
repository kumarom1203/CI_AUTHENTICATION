<?php
    include('header.php');
    ?>
    <style>
        a{
            padding: 5px;
            text-decoration: none;
        }
    </style>
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading">USER LOG</div>
                <div class="panel-body">
                    <table class="table table-bordered" style="font-size: 12px">
                        <thead>
                            <tr>
                                <th>S.N</th>
                                <th>Username</th>
                                <th>Login Via</th>
                                <th>Action Date</th>
                                <th>System IP</th>
                                <th>Page Access</th>
                                <th>Remarks</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                                $sn = 1;
                                foreach ($user_log as $key) {
                            ?>
                            <tr>
                                <td><?php echo $sn++; ?> </td>
                                <td><?php echo $key['user_id']; ?> </td>
                                <td><?php echo $key['login_via']; ?> </td>
                                <td><?php echo date('d-m-Y', strtotime($key['date_time'])); ?> </td>
                                <td><?php echo $key['ip_address']; ?> </td>
                                <td><?php echo $key['action_page']; ?> </td>
                                <td><?php echo $key['remarks']; ?> </td>
                            </tr>
                            <?php
                                }
                            ?>
                        </tbody>
                    </table>

                    <?php echo $page_link;?>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>