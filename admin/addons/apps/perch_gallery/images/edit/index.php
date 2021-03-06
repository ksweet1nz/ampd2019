<?php
    # include the API
    include('../../../../../core/inc/api.php');
    
    $API  = new PerchAPI(1.0, 'perch_gallery');
    $Lang = $API->get('Lang');
    $HTML = $API->get('HTML');
    $Paging = $API->get('Paging');

    # Set the page title
    $Perch->page_title = $Lang->get('Gallery: Edit image');

    $Perch->add_css($API->app_path().'/admin.css');

    # Do anything you want to do before output is started
    include('../../modes/_subnav.php');
    include('../../modes/image.edit.pre.php');
    
    
    # Top layout
    include(PERCH_CORE . '/inc/top.php');

    
    # Display your page
    include('../../modes/image.edit.post.php');
    
    
    # Bottom layout
    include(PERCH_CORE . '/inc/btm.php');
