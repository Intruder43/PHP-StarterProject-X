<?php
    $this->showHeader('views/header.php');//this function will inludes the header.php
?>

<style>
    .box-login{
        padding: 10px;
        -webkit-box-shadow: 0px 0px 1px 0px rgba(0,0,0,0.75);
        -moz-box-shadow: 0px 0px 1px 0px rgba(0,0,0,0.75);
        box-shadow: 0px 0px 1px 0px rgba(0,0,0,0.75);
        webkit-transform: translate(0, calc(40vh - 50%));
        -ms-transform: translate(0, 40vh) translate(0, -50%);
        -o-transform: translate(0, calc(40vh - 50%));
        transform: translate(0, 40vh) translate(0, -50%);
    }
    .modal.in .modal-dialog{
        -webkit-transform: translate(0, calc(40vh - 50%));
        -ms-transform: translate(0, 40vh) translate(0, -50%);
        -o-transform: translate(0, calc(40vh - 50%));
        transform: translate(0, 40vh) translate(0, -50%);
    }
    .col-sm-12, .col-md-12, .col-lg-12 {
        padding-top: 10px;
    }
</style>

<div id="mdlRegister" class="modal fade" role="dialog" data-keyboard="false" data-backdrop="static">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">Account</h4>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-md-12 col-lg-12 col-sm-12">
                        <div class="input-group">
                            <div class="input-group-addon">First Name : </div>
                            <input class="form-control" type="text" id="fname">
                        </div>
                    </div>
                    <div class="col-md-12 col-lg-12 col-sm-12">
                        <div class="input-group">
                            <div class="input-group-addon">Last Name : </div>
                            <input class="form-control" type="text" id="lname">
                        </div>
                    </div>
                    <div class="col-md-12 col-lg-12 col-sm-12">
                        <div class="input-group">
                            <div class="input-group-addon">Middle Name : </div>
                            <input class="form-control" type="text" id="mname">
                        </div>
                    </div>
                    <div class="col-md-12 col-lg-12 col-sm-12">
                        <div class="input-group">
                            <div class="input-group-addon">Username : </div>
                            <input class="form-control" type="text" id="uname">
                        </div>
                    </div>
                    <div class="col-md-12 col-lg-12 col-sm-12">
                        <div class="input-group">
                            <div class="input-group-addon">Password : </div>
                            <input class="form-control" type="text" id="upass">
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>

<div class="container">
    <div class="row">
        <div class="col-md-6 col-lg-6 col-sm-12 col-lg-offset-3 col-md-offset-3 box-login">
            <div class="row">
                <div class="col-md-12 col-sm-12 col-lg-12">
                    <div class="input-group">
                        <div class="input-group-addon">Username : </div>
                        <input type="text" id="txtUsername" class="form-control">
                    </div>
                </div>
                <div class="col-md-12 col-sm-12 col-lg-12">
                    <div class="input-group">
                        <div class="input-group-addon">Password : </div>
                        <input type="password" id="txtPassword" class="form-control">
                    </div>
                </div>
                <div class="col-md-12 col-lg-12 col-sm-12">

                    <button class="btn btn-primary pull-right">Login</button>
                    <button class="btn btn-default pull-right" data-toggle="modal" data-target="#mdlRegister" style="margin-right: 5px;">Register</button>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    document.title = "TEST";

</script>
