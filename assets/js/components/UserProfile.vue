<template>
    <div class="container">
        <div class="row">
            <div class="col-md-3"></div>
            <div class="col-md-6">
                <div class="panel panel-default">
                    <div class="panel-heading">  <h4 class="text-center" style="padding-top: 2em">User Profile</h4></div>
                    <div class="panel-body">
                        <div class="box box-info">
                            <div class="box-body">
                                <div class="col-sm-12 text-center">
                                    <div align="center"> <img alt="User Pic" src="https://x1.xingassets.com/assets/frontend_minified/img/users/nobody_m.original.jpg" id="profile-image1" class="img-circle img-responsive">

                                        <!--Upload Image Js And Css-->

                                    </div>
                                    <br>
                                    <!-- /input-group -->
                                </div>
                                <div class="col-sm-12 text-center">
                                    <h4 style="color:#00b1b1;">{{first_name}} {{last_name}} </h4>
                                </div>
                                <div class="clearfix"></div>
                                <hr style="margin:5px 0 5px 0;">


                                <div class="col-sm-12 text-center tital" >First Name:</div><div class="col-sm-12 text-center">{{first_name}}</div>
                                <div class="clearfix"></div>
                                <div class="bot-border"></div>

                                <div class="col-sm-12 text-center tital " >Last Name:</div><div class="col-sm-12 text-center"> {{last_name}}</div>
                                <div class="clearfix"></div>
                                <div class="bot-border"></div>

                                <div class="col-sm-12 text-center tital" > Email:</div><div class="col-sm-12 text-center"> {{email}}</div>
                                <div class="clearfix"></div>
                                <div class="bot-border"></div>

                                <div class="col-sm-12 text-center tital" >Username:</div><div class="col-sm-12 text-center">{{username}}</div>

                                <div class="clearfix"></div>
                                <div class="bot-border"></div>
                                <!-- /.box-body -->
                            </div>
                            <!-- /.box -->
                        </div>
                    </div>

                </div>

                <div class="row">
                    <div class="col-sm-2"></div>
                        <div class="col-sm-4">
                            <a href="#"><button type="button" class="btn btn-warning">Change Password</button></a>
                        </div>
                    <div class="col-sm-1"></div>
                        <div class="col-sm-5">
                            <a href="#"><button type="button" class="btn btn-primary">Edit Account</button></a>
                        </div>
                    </div>

            </div>
        </div>
    </div>
</template>

<script>
    export default {
        name: 'user-profile',
        props: ['username', 'email', 'first_name', 'last_name']
    }
</script>