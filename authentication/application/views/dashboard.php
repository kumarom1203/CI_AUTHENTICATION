<?php
    include('header.php');
    ?>
<div class="container">
    <div class="row">
        <div class="col-md-6">
            <div class="panel panel-default">
                <div class="panel-heading">Active Users</div>
                <div class="panel-body">
                    <table class="table table-bordered" style="font-size: 12px">
                        <thead>
                            <tr>
                                <th>S.N</th>
                                <th>Name</th>
                                <th>Username</th>
                                <th>Email</th>
                                <th>Created At</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                                $sn = 1;
                                foreach ($active_users as $key) {
                            ?>
                            <tr>
                                <td><?php echo $sn++; ?> </td>
                                <td><?php echo $key['name']; ?> </td>
                                <td><?php echo $key['username']; ?> </td>
                                <td><?php echo $key['email']; ?> </td>
                                <td><?php echo date('d-m-Y', strtotime($key['created_at'])); ?> </td>
                            </tr>
                            <?php
                                }
                            ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="panel panel-default">
                <div class="panel-heading">Deleted Users</div>
                <div class="panel-body">
                    <table class="table table-bordered" style="font-size: 12px">
                        <thead>
                            <tr>
                                <th>S.N</th>
                                <th>Name</th>
                                <th>Username</th>
                                <th>Email</th>
                                <th>Deleted At</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                                $sn = 1;
                                foreach ($deleted_users as $key) {
                            ?>
                            <tr>
                                <td><?php echo $sn++; ?> </td>
                                <td><?php echo $key['name']; ?> </td>
                                <td><?php echo $key['username']; ?> </td>
                                <td><?php echo $key['email']; ?> </td>
                                <td><?php echo date('d-m-Y', strtotime($key['deleted_at'])); ?> </td>
                            </tr>
                            <?php
                                }
                            ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
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
                </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>