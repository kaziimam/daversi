<?php $this->load->view('admin/templete/header')?>
<?php $this->load->view('admin/templete/side_panel')?>

<main class="main-content bgc-grey-100">
    <div id="mainContent">
        <div class="row gap-20 pos-r" style="height:auto !important">
            <div class="masonry-sizer col-md-6"></div>
            <div class="masonry-item col-md-12">
                <div class="bgc-white p-20 bd">
                    <h4 class="c-grey-900">Add New User</h4>
                    <?php if (form_error('f_name') || form_error('m_number') ||  form_error('email') ||  form_error('password')) { ?>
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-12 p-0">
                                    <div class="alert alert-danger">
                                        <?php echo form_error('f_name'); ?>
                                        <?php echo form_error('m_number'); ?>
                                        <?php echo form_error('email'); ?>
                                        <?php echo form_error('password'); ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php } ?>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="mT-30">
                                <?php echo form_open_multipart('index.php/admin/add_new_user');?>
                                    <div class="form-row">
                                        <div class="form-group col-md-3 col-xs-12">
                                            <label >Full Name</label>
                                            <?php echo form_input(['name' => 'f_name', 'required' => 'required', 'class' => 'form-control', 'value' => set_value('f_name') ]) ?>
                                        </div>

                                        <div class="form-group col-md-3 col-xs-12">
                                            <label>Email</label>
                                            <?php echo form_input(['name' => 'email', 'required' => 'required', 'class' => 'form-control', 'value' => set_value('email')  ]) ?>
                                        </div>

                                        <div class="form-group col-md-3">
                                            <label for="inputState">Mobile Number </label>
                                            <?php echo form_input(['name' => 'm_number', 'required' => 'required', 'class' => 'form-control', 'value' =>set_value('m_number')]) ?>
                                        </div>

                                        <div class="form-group col-md-3">
                                            <label for="inputState">User Role </label>
                                            <select name="user_type" class="form-control selectpicker" id="user_type" placeholder="Choose..." required = 'required'>
                                                <option value="Admin">Admin</option>
                                                <option value="Seller"> Seller </option>
                                            
                                            </select>
                                        </div>

                                        <div class="form-group col-md-4">
                                            <label for="inputState">Image </label>
                                            <?php echo form_input(['name' => 'userfile[]', 'value' => set_value('image'), 'type' => 'file','required' => 'required', 'class' => 'form-control']) ?>
                                        </div>

                                        <div class="form-group col-md-3">
                                            <label for="inputState">Password </label>
                                            <?php echo form_input(['name' => 'password', 'value' => set_value('password'), 'autocomplete'=>"new-password", 'type' => 'password', 'class' => 'form-control']) ?>
                                        </div>
                                    </div>
                                    <hr>
                                    <div class="form-row">
                                        <div class="from-group col-md-3 col-xs-12">
                                            <label >Zip Code</label>
                                            <?php echo form_input(['name' => 'zip', 'required' => 'required', 'class' => 'form-control', 'value' => set_value('zip') ]) ?>
                                        </div>

                                        <div class="form-group col-md-3 col-xs-12">
                                            <label for="city"> City</label>
                                            <?php echo form_input(['name'=>'city', 'required' =>'required', 'class' =>'form-control', 'value' => set_value('city')]);?>
                                        </div>

                                        <div class="form-group col-md-3 col-xs-12">
                                            <label for="city">Landmark</label>
                                            <?php echo form_input(['name'=>'landmark', 'required' =>'required', 'class' =>'form-control', 'value' => set_value('landmark')]);?>
                                        </div>

                                        <div class="form-group col-md-6 col-xs-12">
                                            <label for="city"> Address </label>
                                            <?php echo form_input(['name'=>'address', 'class' =>'form-control', 'value' => set_value('address')]);?>
                                        </div>                                        
                                    </div>
                                    <hr>

                                    <div class="form-row" id="sealer_details">
                                        <div class="form-group col-md-6 col-xs-12">
                                            <label for="city"> License No</label>
                                            <?php echo form_input(['name'=>'license_no', 'class' =>'form-control', 'value' => set_value('license_no')]);?>
                                        </div>
                                        <div class="form-group col-md-6 col-xs-12">
                                            <label for="city"> License Image</label>
                                            <?php echo form_input(['name' => 'userfile[]','value' => set_value('image'), 'type' => 'file', 'class' => 'form-control']) ?>
                                        </div>
                                        <div class="form-group col-md-6 col-xs-12">
                                            <label for="city"> Id card Image</label>
                                            <?php echo form_input(['name' => 'userfile[]', 'value' => set_value('id_card_image'), 'type' => 'file', 'class' => 'form-control']) ?>
                                        </div>
                                    </div>

                                    <div class="form-row mt-5">
                                        <div class="form-group col-md-4 w-100"></div>
                                        <div class="form-group col-md-4 w-100"></div>
                                        <div class="form-group col-md-2 w-100">
                                            <button type="submit" class="btn btn-outline-primary w-100">Add User</button>
                                        </div>
                                        <div class="form-group col-md-2 w-100">
                                            <a href="<?php echo base_url('/admin/users')?>" role="button" class="btn btn-outline-danger w-100"> Cancel </a>
                                        </div>
                                    </div>
                                <?php echo form_close(); ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>


<style>
.checkbox_label {
  display: block;
  position: relative;
  padding-left: 35px;
  margin-bottom: 12px;
  cursor: pointer;
  font-size: 22px;
  -webkit-user-select: none;
  -moz-user-select: none;
  -ms-user-select: none;
  user-select: none;
}

.checkbox_label input {
  position: absolute;
  opacity: 0;
  cursor: pointer;
  height: 0;
  width: 0;
}

.checkmark {
  position: absolute;
  top: 0;
  left: 0;
  height: 25px;
  width: 25px;
  background-color: #eee;
}

.checkbox_label:hover input ~ .checkmark {
  background-color: #ccc;
}

.checkbox_label input:checked ~ .checkmark {
  background-color: #2196F3;
}

.checkmark:after {
  content: "";
  position: absolute;
  display: none;
}

.checkbox_label input:checked ~ .checkmark:after {
  display: block;
}

.checkbox_label .checkmark:after {
  left: 9px;
  top: 5px;
  width: 5px;
  height: 10px;
  border: solid white;
  border-width: 0 3px 3px 0;
  -webkit-transform: rotate(45deg);
  -ms-transform: rotate(45deg);
  transform: rotate(45deg);
}
</style>


<?php $this->load->view('admin/templete/footer')?>
<script>
    $(document).ready(function(){
        $("#sealer_details").hide();
        $("#user_type").change(function(){
            var value = $(this).val();
            if(value === "Seller"){
                $("#sealer_details").show();
            }else{
                $("#sealer_details").hide();
            }
        });
    });
</script>