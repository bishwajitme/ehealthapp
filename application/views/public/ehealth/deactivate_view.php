<?php defined('BASEPATH') OR exit('No direct script access allowed');

$this->load->view('public/ehealth/_parts/header'); 
?>
<title><?php echo $this->config->item('site_title'); ?></title>
</head>
<body>

<div id="custom-bootstrap-menu" class="navbar navbar-default " role="navigation">
    <div class="container-fluid">
        <!-- Load Navbar Header -->
        <?php $this->load->view('public/ehealth/_parts/navbar_header');?>
        <div class="collapse navbar-collapse navbar-menubuilder">
            <ul class="nav navbar-nav navbar-left">
                <li class="active"><a href="<?php echo base_url();?>"><i class="fa fa-home" aria-hidden="true"></i> <?php echo lang('nav_home');?></a></li>
				<li><a href="<?php echo base_url('users');?>"><i class="fa fa-users" aria-hidden="true"></i> <?php echo lang('nav_all_users');?></a></li>                
             
            </ul>
			<ul class="nav navbar-nav navbar-right">
				<li><a href="<?php echo base_url();?>"><i class="fa fa-lock" aria-hidden="true"></i><span class="nav_log"> <?php echo lang('nav_login');?></span></a></li>
			</ul>
        </div>

    </div>
</div>

<div class="container">
	<div class="row">
		<div class="headline"><p class="headline_title"><?php echo lang('headline_deactivated');?></p></div>
		<div class="alert alert-warning must_login_note"><?php echo lang('view_deactivated_alert');?></div>
	</div>
</div>

<?php $this->load->view('public/ehealth/_parts/footer'); ?>