<div class="content-wrapper">
    <section class="content-header">
      <h1>
        <i class="fa fa-users"></i> Reports
        <small>Add, Edit, Delete</small>
      </h1>
    </section>
    <section class="content">
        <div class="row">
            <div class="col-xs-12 text-right">
                <div class="form-group">
                    <a class="btn btn-primary" href="<?php echo base_url(); ?>addReport"><i class="fa fa-plus"></i> Add Report</a>
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
                    <h3 class="box-title">Report List</h3>
                    <div class="box-tools">
                        <form action="<?php echo base_url() ?>reportListing" method="POST" id="searchList">
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
                        <!--<th>Meta Title</th>
                        <th>Meta Description</th>
                        <th>Meta Tag</th>-->
                        <th>Year</th>
                        <th>Month</th>
                        <th>Report Title</th>
                        <th>Report Description</th>
                        <th class="text-center">Report File</th>
                        <th class="text-center">Created Date</th>
                        <th class="text-center">Actions</th>
                    </tr>
                    <?php
                    if(!empty($reportListing))
                    {
                        foreach($reportListing as $record)
                        {
						if($record->month==1){ $mnth="January"; }
						if($record->month==2){ $mnth="February"; }
						if($record->month==3){ $mnth="March"; }
						if($record->month==4){ $mnth="April"; }
						if($record->month==5){ $mnth="May"; }
						if($record->month==6){ $mnth="June"; }
						if($record->month==7){ $mnth="July"; }
						if($record->month==8){ $mnth="August"; }
						if($record->month==9){ $mnth="September"; }
						if($record->month==10){ $mnth="October"; }
						if($record->month==11){ $mnth="November"; }
						if($record->month==12){ $mnth="December"; }
                    ?>
                    <tr>
                        <td><?php echo $record->year ?></td>
                        <td><?php echo $mnth; ?></td>
                        <td><?php echo $record->report_title ?></td>
                        
                        <td style="width:500px; text-align:justify;"><div style="height: 70px; overflow: hidden; line-height: 22px;"><?php echo $record->report_description ?></div></td>
                        
                        <!-- <td class="text-center"><a href="<?php echo base_url('report_uploads/'. $record->report_file); ?>" target="_blank"><img src="report_uploads/document.png" width="100" height="100"></a></td> -->
                        <td style="width:90px;"><?php echo $record->report_file ?></td>
                        
                        <td class="text-center"><?php echo date("d-m-Y", strtotime($record->created_dtm)) ?></td>
                        
                        <td class="text-center">
                            <a class="btn btn-sm btn-info" href="<?php echo base_url().'editReport/'.$record->report_id; ?>" title="Edit"><i class="fa fa-pencil"></i></a> |
                            <a class="btn btn-sm btn-danger" href="<?php echo base_url().'reportdelete/'.$record->report_id; ?>" title="Delete"><i class="fa fa-trash"></i></a>
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
            jQuery("#searchList").attr("action", baseURL + "index.php/reportListing/" + value);
            jQuery("#searchList").submit();
        });
    });
</script>
