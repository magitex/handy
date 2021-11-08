<div class="content-wrapper">
    <section class="content-header">
      <h1>
        <i class="fa fa-users"></i> Our Mission
        <small>Add, Edit, Delete</small>
      </h1>
    </section>
    <section class="content">
        <div class="row">
            <div class="col-xs-12 text-right">
                <div class="form-group">
                    <a class="btn btn-primary" href="<?php echo base_url(); ?>addCon"><i class="fa fa-plus"></i> Add New</a>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
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
        <div class="row">
            <div class="col-xs-12">
              <div class="box">
                <div class="box-header">
                    <h3 class="box-title">List</h3>
                    <div class="box-tools">
                        <form action="<?php echo base_url() ?>userListing1" method="POST" id="searchList">
                            <div class="input-group">
                              <input type="text" name="searchText" value="<?php echo $searchText; ?>" class="form-control input-sm pull-right" style="width: 150px;" placeholder="Search"/>
                              <div class="input-group-btn">
                                <button class="btn btn-sm btn-default searchList"><i class="fa fa-search"></i></button>
                              </div>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="box-body table-responsive no-padding">
                  <table class="table table-hover">
                    <tr>
                        <th>Page Name</th>
                        <th class="text-center">Uploaded Document</th>
                        <th>Description</th>
                        <th class="text-center">Created Date</th>
                        <th class="text-center">Actions</th>
                    </tr>
                    <?php
                    if(!empty($listing))
                    {
                        foreach($listing as $record)
                        {
                    ?>
                    <tr>
                        <td><?php echo $record->page_name; ?></td>
                        <td class="text-center"><img src="<?php echo assets_url(); ?>uploads/<?php echo $record->multi_file; ?>" width="90" height="100"></td>
                        <td style="width:500px; text-align:justify;"><div style="height: 70px; overflow: hidden; line-height: 22px;"><p><?php echo $record->description; ?></p></div></td>
                        <!-- <td><?php echo $record->description; ?></td> -->
                        <td class="text-center"><?php echo date("d-m-Y", strtotime($record->createdDtm)); ?></td>
                        <td class="text-center">
                            <a class="btn btn-sm btn-info" href="<?php echo base_url().'editCon/'.$record->id; ?>" title="Edit"><i class="fa fa-pencil"></i></a> |
                            <!-- <a class="btn btn-sm btn-danger delete" href="#" data-userid="<?php echo $record->id; ?>" title="Delete"><i class="fa fa-trash"></i></a> -->
                            <a class="btn btn-sm btn-danger" href="<?php echo base_url().'delete/'.$record->id; ?>" onclick="return prod_del();" title="Delete"><i class="fa fa-trash"></i></a>
                        </td>
                    </tr>
                    <?php
                        }
                    }
                    ?>
                  </table>
                  
                </div>
                <div class="box-footer clearfix">
                    <?php echo $this->pagination->create_links(); ?>
                </div>
              </div>
            </div>
        </div>
    </section>
</div>
<script type="text/javascript" src="<?php echo base_url(); ?>assets/js/delete.js" charset="utf-8"></script>
<script type="text/javascript">
    jQuery(document).ready(function(){
        jQuery('ul.pagination li a').click(function (e) {
            e.preventDefault();            
            var link = jQuery(this).get(0).href;            
            var value = link.substring(link.lastIndexOf('/') + 1);
            jQuery("#searchList").attr("action", baseURL + "index.php/userListing1/" + value);
            jQuery("#searchList").submit();
        });
    });
</script>
<style>
    .box-body .text-contant{width:500px; text-align:justify;}
    .box-body .text-contant div{height: 70px; overflow: hidden; line-height: 22px;}




</style>
