<?php include('templete/header.php')?>
<?php include('templete/side_panel.php') ?>

<?php 
 //echo "<pre>";
    //print_r($data['user_data']);
?>
<main class="main-content bgc-grey-100">
    <div id="mainContent">
        <div class="row gap-20 masonry pos-r">
            <div class="masonry-sizer col-md-6"></div>
            <div class="masonry-item col-md-12">
                <div class="bgc-white p-20 bd">
                    <h4 class="c-grey-900">Edit My Profile</h4>
                    <?php if (form_error('f_name') || form_error('m_number')) { ?>
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-12 p-0">
                                    <div class="alert alert-danger">
                                        <?php echo form_error('f_name'); ?>
                                        <?php echo form_error('m_number'); ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php } ?>
                    <div class="row">
                        <div class="col-md-10">
                            <div class="mT-30">
                                <?php echo form_open_multipart('index.php/admin/update_admin_profile');?>
                                    <div class="form-row">
                                        <div class="form-group col-md-4 col-xs-12">
                                            <label >Full Name</label>
                                            <?php echo form_input(['name' => 'f_name',  'class' => 'form-control', 'value' => $data['user_data'][0]['name'] ]) ?>
                                        </div>

                                        <div class="form-group col-md-4 col-xs-12">
                                            <label>Email</label>
                                            <?php echo form_input(['name' => 'email', 'required' => 'required','readonly' => 'readonly', 'class' => 'form-control', 'value' => $data['user_data'][0]['email_addr']  ]) ?>
                                        </div>

                                        <div class="form-group col-md-4">
                                            <label for="inputState">Mobile Number </label>
                                            <?php echo form_input(['name' => 'm_number', 'required' => 'required', 'class' => 'form-control', 'value' => $data['user_data'][0]['mobile_number'] ]) ?>
                                        </div>

                                        <div class="form-group col-md-6">
                                            <label for="inputState">Image </label>
                                            <?php echo form_input(['name' => 'image', 'value' => set_value('image'), 'type' => 'file', 'class' => 'form-control']) ?>
                                        </div>
                                        
                                        <div class="form-group col-md-3">
                                            <label for="inputState">User Role </label>
                                            <select name="user_type" class="form-control selectpicker" required>
                                                <option disabled="disabled" selected="selected">Choose...</option>
                                                <option value="Seller" <?php if ($data['user_data'][0]['user_type'] == "Seller"){echo "selected";} ?>> Seller </option>
                                                <option value="Admin" <?php if ( $data['user_data'][0]['user_type'] == "Admin"){echo "selected";} ?>>Admin</option>
                                            </select>
                                        </div>

                                        <div class="form-group col-md-3">
                                            <label for="inputState">Password </label>
                                            <?php echo form_input(['name' => 'password', 'value' => set_value('password'), 'autocomplete'=>"new-password", 'type' => 'password', 'class' => 'form-control']) ?>
                                        </div>
                                    </div>
                                    <?php echo form_input(['name' => 'id', 'type' => 'hidden', 'class' => 'form-control', 'value' => $data['user_data'][0]['id'] ]) ?>

                                    <div class="form-row mt-5">
                                        <div class="form-group col-md-3 w-100"></div>
                                        <div class="form-group col-md-3 w-100"></div>
                                        <div class="form-group col-md-3 w-100">
                                            <button type="submit" class="btn btn-outline-primary w-100">Update</button>
                                        </div>
                                        <div class="form-group col-md-3 w-100">
                                            <a href="<?php echo base_url('/admin')?>" role="button" class="btn btn-outline-danger w-100"> Cancel </a>
                                        </div>
                                    </div>
                                <?php echo form_close(); ?>
                            </div>
                        </div>
                        <div class="col-md-2">
                            <img src="<?php echo base_url('assets/images/user/').$data['user_data'][0]['img'];?>" class="img-responsive" alt="" style="max-height:150px;border-radius: 50%;">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>

<?php include('templete/footer.php') ?>