<?php $this->load->view('admin/templete/header');?>
<?php $this->load->view('admin/templete/side_panel');?>

<main class="main-content bgc-grey-100">
    <div id="mainContent">
        <div class="container-fluid">
            <div class="row">
            	<div class="col-md-6 col-xs-6">
            		<h4 class="c-grey-900 mB-20">Users</h4>
            	</div>
            	<div class="col-md-6 col-xs-6 text-right">
            		<a href="<?php echo base_url('admin/add_user')?>" role="button" class="btn btn-info">Add User</a>
            	</div>
                <div class="col-md-12">
                    <div class="bgc-white bd bdrs-3 p-20 mB-20">
                        <table id="dataTable" class="table table-striped table-responsive-xs table-bordered" cellspacing="0" width="100%">
                            <thead>
                                <tr>
                                    <th><b>#</b></th>
                                    <th>Image</th>
                                    <th>Name</th>
                                    <th>Mobile</th>
                                    <th>Email</th>
                                    <th>Address</th>
                                    <th>Date</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tfoot>
                                <tr>
                                    <th><b>#</b></th>
                                    <th>Image</th>
                                    <th>Name</th>
                                    <th>Mobile</th>
                                    <th>Email</th>
                                    <th>Address</th>
                                    <th>Date</th>
                                    <th>Action</th>
                                </tr>
                            </tfoot>
                            <tbody>
                               
                                <?php 
                                    $sr = 1;
                                    foreach($data['all_user'] as $all_user){ ?>
                                        <tr>
                                            <td><?php echo $sr ;?></td>
                                            <td> <a href=""><img src="<?php if(!empty($all_user['img'])){echo base_url('/assets/images/user/').$all_user['img'];}else{echo base_url('/assets/images/user/user.png');}?>" width = '50px'></a></td>
                                            <td><a href=""></a><?php echo $all_user['name']; ?></td>
                                            <td><?php echo $all_user['mobile_number'] ;?></td>
                                            <td><?php echo $all_user['email_addr']; ?></td>
                                            <td><?php echo $all_user['address']; ?></td>
                                            <td><?php echo $all_user['date_time']; ?></td>
                                            <td>
                                                <div class="dropdown show">
                                                    <a class="btn btn-secondary dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                        Action
                                                    </a>
                                                    <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                                        <a onclick="deleteUser(<?php echo $all_user['id']?>)" style="cursor: pointer;" class="dropdown-item"> <i class="fa fa-trash mr-2"> </i> Delete User</a>
                                                        <a style="cursor: pointer;" class="dropdown-item" href="<?php echo base_url('admin/edit_user/'.$all_user['id'])?>"> <i class="fa fa-pencil mr-2"> </i>  Edit User</a>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                    <?php $sr++;  }
                                ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>

<?php $this->load->view('admin/templete/footer'); ?>

<script>
    $(document).ready(function(){

    });

    function deleteUser(id){
        alert("Would you like to delete the user ?");
         window.location.assign("<?php echo base_url('admin/delete_user/')?>"+id);
    }
</script>