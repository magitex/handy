    <footer class="main-footer">
        <div class="pull-right hidden-xs">
            <b>Handyman</b> Admin System
        </div>
        <strong>Copyright &copy; 2021 <a href="<?php echo base_url(); ?>">Admin Portal</a>.</strong> All rights reserved - <body onLoad="startTime()"><b id="txt"></b></body> 
    </footer>
    
    <script src="<?php echo assets_url(); ?>assets/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
    <script src="<?php echo assets_url(); ?>assets/dist/js/adminlte.min.js" type="text/javascript"></script>
    <!-- <script src="<?php echo assets_url(); ?>assets/dist/js/pages/dashboard.js" type="text/javascript"></script> -->
    <script src="<?php echo assets_url(); ?>assets/js/jquery.validate.js" type="text/javascript"></script>
    <script src="<?php echo assets_url(); ?>assets/js/validation.js" type="text/javascript"></script>
    <script type="text/javascript">
        var windowURL = window.location.href;
        pageURL = windowURL.substring(0, windowURL.lastIndexOf('/'));
        var x= $('a[href="'+pageURL+'"]');
            x.addClass('active');
            x.parent().addClass('active');
        var y= $('a[href="'+windowURL+'"]');
            y.addClass('active');
            y.parent().addClass('active');
    </script>
    </body>
</html>