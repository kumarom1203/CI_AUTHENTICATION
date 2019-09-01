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
        <nav class="navbar navbar-inverse" style="border:0px !important; border-radius: 0px !important">
            <div class="container">
                <div class="navbar-header">
                    <a class="navbar-brand" href="#" style="text-transform:uppercase">WAYCOOL ASSIGNMENT </a>
                </div>
                <ul class="nav navbar-nav">
                    <li><a href="<?php echo base_url('Home/dashboard'); ?>">DASHBOARD</a></li>
                    <li><a href="<?php echo base_url('Home'); ?>">PROFILE</a></li>
                    <li><a href="<?php echo base_url('Home/pagination'); ?>">PAGINATION</a></li>
                    <li><a href="<?php echo base_url('Login/logout'); ?>">LOGOUT</a></li>
                </ul>
                <div class="navbar-header" style="float:right">
                    <a class="navbar-brand" href="#" style="text-transform:uppercase"><?php echo $this->session->userdata('name');?></a>
                </div>
            </div>
        </nav>