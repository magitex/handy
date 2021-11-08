<?php
$provider_id = $providerinfo->id;
$provider_image = $providerinfo->image;
$provider_name = $providerinfo->name;
$provider_age = $providerinfo->age;
$provider_phone = $providerinfo->phone;
$provider_address = $providerinfo->address;
$provider_hourly_rate = $providerinfo->hourly_rate;
$provider_work_ecperiance = $providerinfo->work_ecperiance;
$provider_work_done = $providerinfo->work_done;
$provider_description = $providerinfo->description;
$provider_isapproved = $providerinfo->isapproved;
$provider_package_id = $providerinfo->package_id;
$provider_package_start_date = $providerinfo->package_start_date;
$provider_package_end_date = $providerinfo->package_end_date;
?>

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        <i class="fa fa-users"></i> Our Provider
        <small>Edit</small>
      </h1>
    </section>
    
    <section class="content">
    
        <div class="row">
            <!-- left column -->
            <div class="col-md-8">
              <!-- general form elements -->
                
                
                
                <div class="box box-primary">
                    <div class="box-header">
                        <h3 class="box-title">Edit Details</h3>
                    </div><!-- /.box-header -->
                    <!-- form start -->
                    
                    <form role="form" enctype='multipart/form-data' action="<?php echo base_url() ?>editProviderConfig" method="post" id="editCon" role="form">
                        <div class="box-body">
                            <div class="row">
                                <div class="col-md-6">                                
                                    <div class="form-group">
                                        <label for="provider_image">Provider Image*</label>
                                        <input type="file" class="form-control"  id="provider_image" name="provider_image">
                                        <?php if($provider_image !=''){ ?>
                                        <img src="<?= base_url(); ?>uploads/<?= $provider_image; ?>" width="100px">
                                        <?php } ?>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">                                
                                    <div class="form-group">
                                        <label for="provider_name">Provider Name*</label>
                                        <input type="text" class="form-control" value="<?php echo $provider_name; ?>" id="provider_name" name="provider_name">
                                        <input type="hidden" value="<?php echo $provider_id; ?>" name="provider_id" id="provider_id" />
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">                                
                                    <div class="form-group">
                                        <label for="provider_age">Provider Age*</label>
                                        <input type="text" class="form-control" value="<?php echo $provider_age; ?>" id="provider_age" name="provider_age">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">                                
                                    <div class="form-group">
                                        <label for="provider_phone">Provider Phone*</label>
                                        <input type="tel" class="form-control" value="<?php echo $provider_phone; ?>" id="provider_phone" name="provider_phone">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">                                
                                    <div class="form-group">
                                        <label for="provider_address">Provider Address*</label>
                                        <input type="text" class="form-control" value="<?php echo $provider_address; ?>" id="provider_address" name="provider_address">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">                                
                                    <div class="form-group">
                                        <label for="provider_hourly_rate">Provider Hourly Rate*</label>
                                        <input type="text" class="form-control" value="<?php echo $provider_hourly_rate; ?>" id="provider_hourly_rate" name="provider_hourly_rate">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">                                
                                    <div class="form-group">
                                        <label for="provider_work_ecperiance">Provider Work Experiance*</label>
                                        <input type="text" class="form-control" value="<?php echo $provider_work_ecperiance; ?>" id="provider_work_ecperiance" name="provider_work_ecperiance">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">                                
                                    <div class="form-group">
                                        <label for="provider_work_done">Provider Work Done*</label>
                                        <input type="text" class="form-control" value="<?php echo $provider_work_done; ?>" id="provider_work_done" name="provider_work_done">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group" id="area">
                                        <label for="provider_description">Provider Description*</label>
                                        <textarea class="form-control" id="provider_description" name="provider_description" maxlength="128"><?php echo $provider_description; ?></textarea>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">                                
                                    <div class="form-group">
                                        <label for="package_id">Package*</label>
                                        <select class="form-control" id="package_id" name="package_id">
                                            <option value="">Select Package</option>
                                            <?php foreach($packagelist as $package){ ?>
                                                <option value="<?= $package->package_id; ?>" <?php if($provider_package_id==$package->package_id){ ?>Selected<?php } ?>><?= $package->package_name; ?></option>
                                            <?php } ?>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">                                
                                    <div class="form-group">
                                        <label for="provider_package_start_date">Provider Package Start Date*</label>
                                        <input type="date" class="form-control" value="<?php echo $provider_package_start_date; ?>" id="provider_package_start_date" name="provider_package_start_date">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">                                
                                    <div class="form-group">
                                        <label for="provider_package_end_date">Provider Package End Date*</label>
                                        <input type="date" class="form-control" value="<?php echo $provider_package_end_date; ?>" id="provider_package_end_date" name="provider_package_end_date">
                                    </div>
                                </div>
                            </div>

                        </div>
    
                        <div class="box-footer">
                            <input type="submit" class="btn btn-primary" value="Submit" />
                            <button type="button" class="btn btn-primary" value="Back" onclick="goBack()">Back</button>
                            <!--<input type="reset" class="btn btn-default" value="Reset" />-->
                        </div>
                    </form>
                </div>
            </div>
            <div class="col-md-4">
                <?php
                    $this->load->helper('form');
                    $error = $this->session->flashdata('error');
                    if($error)
                    {
                ?>
                <div class="alert alert-danger alert-dismissable">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                    <?php echo $this->session->flashdata('error'); ?>                    
                </div>
                <?php } ?>
                <?php  
                    $success = $this->session->flashdata('success');
                    if($success)
                    {
                ?>
                <div class="alert alert-success alert-dismissable">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                    <?php echo $this->session->flashdata('success'); ?>
                </div>
                <?php } ?>
                
                <div class="row">
                    <div class="col-md-12">
                        <?php echo validation_errors('<div class="alert alert-danger alert-dismissable">', ' <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button></div>'); ?>
                    </div>
                </div>
            </div>
        </div>    
    </section>
</div>

<script src="<?php echo base_url(); ?>assets/js/editCon.js" type="text/javascript"></script>
<script type="text/javascript">
    function goBack()
    {
        window.history.back();

    }
</script>
<script src = "https://code.jquery.com/jquery-3.3.1.min.js"></script>   
<script src="https://cdn.tiny.cloud/1/no-api-key/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>
<script type = "text/javascript">  
    tinymce.init({  
    selector: '#provider_description',  
    width: 700  
    }); 
</script>
<script>
    $(document).ready(function() {  
        $('#provider_description').click(function() {  
        $("#area").html("");  
        var content = tinymce.get("txtarea").getContent();  
        $("#area").html(content);  
        });  
    });  
</script>