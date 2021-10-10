<!-- <body><div> in top-section-->
        <div class="login-box">
            <div class="login-logo">
                <a href="<?php echo base_url(); ?>"><b><?php echo PROJECT_NAME; ?></b></a>
            </div>
            <div class="card">
                <div class="card-body login-card-body">
                    <p class="login-box-msg">Enter OTP</p>
                    
                    <?php echo form_open('login/validateotp'); ?>
                        <div class="form-group has-feedback">
                            <input type="password" class="form-control" name="otp" placeholder="OTP" required>
                            <span class="glyphicon glyphicon-user form-control-feedback"></span>
                        </div>
                        <div class="text-center text-danger form-group">
                            <?php if($this->session->flashdata("logerr")!==NULL){ echo $this->session->flashdata("logerr");} ?>
                        </div>
                        <div class="row">
                            <div class="col-6"><a href="<?php echo base_url(); ?>">Login</a></div>
                            <div class="col-6">
                                <button type="submit" class="btn btn-primary btn-block btn-flat" name="submitotp">Submit OTP</button>
                            </div>
                        </div>
                    <?php echo form_close(); ?>
                </div>
          	</div>
            <!-- /.login-box-body -->
        </div>
        <!-- /.login-box -->
    
</body>