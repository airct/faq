<?php /* Smarty version Smarty-3.1.13, created on 2014-02-25 03:42:10
         compiled from "application\views\templates_utf8\faq_edit.html" */ ?>
<?php /*%%SmartyHeaderCode:11584530b7b5a902fa7-00521686%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'cabaa6eb7ecb7a7a8d05cb0a6eb90bee5d90b8ab' => 
    array (
      0 => 'application\\views\\templates_utf8\\faq_edit.html',
      1 => 1393270846,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '11584530b7b5a902fa7-00521686',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_530b7b5a94f130_98699369',
  'variables' => 
  array (
    'faq_id' => 0,
    'faq_data' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_530b7b5a94f130_98699369')) {function content_530b7b5a94f130_98699369($_smarty_tpl) {?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd"> 
<html> 
	<head>
		<base href="http://localhost/faq/" />
		<!-- Le styles -->
		<link href="./assets/css/bootstrap.css" rel="stylesheet">
		<link href="./assets/css/bootstrap-responsive.css" rel="stylesheet">

		<!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
		<!--[if lt IE 9]>
			<script src="../assets/js/html5shiv.js"></script>
		<![endif]-->
	</head> 
 
	<body> 
		<!-- <div class="container-fluid"> -->
		<div class="container">
		
			<div class="row-fluid">
				<div class="navbar " style="position: static;">
					<div class="navbar-inner">
						<div class="container">
							<a class="btn btn-navbar" data-toggle="collapse" data-target=".navbar-inverse-collapse">
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
							</a>
							<a class="brand" href="#"> FAQ 管理系統</a>
							<div class="nav-collapse collapse navbar-inverse-collapse">
								<ul class="nav">
									<li><a href="./">回頁面總覽</a></li>
									<!-- <li class="active"><a href="#">目前頁面</a></li> -->
								</ul>
								
								<ul class="nav pull-right">
									<li><a href="#">your name</a></li>
									<li class="divider-vertical"></li>
									<li class="dropdown">
										<a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="icon-wrench"></i> 控制 <b class="caret"></b></a>
										<ul class="dropdown-menu">
											<li><a href="./logout.php"><i class="icon-off"></i> 登出</a></li>
											<li class="divider"></li>
											<li><a href="#"><i class="icon-wrench"></i> 系統設置</a></li> 
											<li><a href="#"><i class="icon-wrench"></i> 權限設置</a></li>
										</ul>
									</li>
								</ul>
							</div><!-- /.nav-collapse -->
						</div>
					</div><!-- /navbar-inner -->
				</div>
			</div>
			<div class="row-fluid">
				
				<div class="span">
					<!-- 主內容區塊[開始] --> 

					<div class="row-fluid">
						<div class="span">
							<ul class="breadcrumb" style="margin-bottom: 5px;">
							   <li><a href="#"> 系統 </a> <span class="divider">/</span></li>
							   <li><a href="#"> Faq </a> <span class="divider">/</span> </li>
							   <li class="active"> 新增 Faq </li>
							</ul>
						</div>	
					</div>	
			
					<div class="row-fluid">
						<div class="span">
													
							<form class="form-horizontal" action="./index.php/faq/edit" method="POST">
								<legend> Faq </legend>
								<div class="control-group">
									<label class="control-label" for="inputEmail">問題抬頭</label>
									<div class="controls">
										<input type="text" name="title" value="<?php echo $_smarty_tpl->tpl_vars['faq_data']->value[$_smarty_tpl->tpl_vars['faq_id']->value]['faq_title'];?>
" placeholder="問題抬頭" required />
										<span class="text-info">請輸入您在購物時常用的包裹收件人英文姓名</span>
									</div>
								</div>
								
								
								<div class="control-group">
									<label class="control-label" for="inputPassword">問題描述</label>
									<div class="controls">
										<textarea name="description" class="input-xxlarge" rows="5"><?php echo $_smarty_tpl->tpl_vars['faq_data']->value[$_smarty_tpl->tpl_vars['faq_id']->value]['faq_description'];?>
</textarea>
										<BR />
										<span class="text-info">請輸入您在購物時常用的包裹收件人英文姓名</span>
									</div>
								</div>
															
								<div class="control-group">
									<label class="control-label" for="inputPassword">狀態</label>
									<div class="controls">

										<select class="input-large" name="status">
											<option value="waiting" <?php if ($_smarty_tpl->tpl_vars['faq_data']->value[$_smarty_tpl->tpl_vars['faq_id']->value]['faq_status']=='waiting'){?> selected <?php }?> >待解決</option>
											<option value="closed" <?php if ($_smarty_tpl->tpl_vars['faq_data']->value[$_smarty_tpl->tpl_vars['faq_id']->value]['faq_status']=='closed'){?> selected <?php }?> >已解決</option>					
											<option value="cancel" <?php if ($_smarty_tpl->tpl_vars['faq_data']->value[$_smarty_tpl->tpl_vars['faq_id']->value]['faq_status']=='cancel'){?> selected <?php }?> >取消</option>					
										</select>

									</div>
								</div>
								
								<div class="control-group">
									<label class="control-label" for="inputPassword">解決方式</label>
									<div class="controls">
										<textarea name="solution" class="input-xxlarge" rows="10"><?php echo $_smarty_tpl->tpl_vars['faq_data']->value[$_smarty_tpl->tpl_vars['faq_id']->value]['faq_solution'];?>
</textarea>
										<BR />
										<span class="text-info">請輸入您在購物時常用的包裹收件人英文姓名</span>
									</div>
								</div>
								
								
								<div class="control-group">
									<div class="controls">
										<button type="submit" class="btn">儲存設定</button>
									</div>
								</div>
								
								<input type="hidden" name="id" value="<?php echo $_smarty_tpl->tpl_vars['faq_id']->value;?>
" />
								
							</form>
							
						</div>
					<div class="row-fluid">
						<div class="pagination pagination-right">
							
						</div>
					</div>
					<script>
						$(function() {
							$("input[name='starttime']").datepicker({ yearRange: "2008:2015", dateFormat: "yy-mm-dd",changeMonth: true, changeYear: true});
							$("input[name='endtime']").datepicker({ yearRange: "2008:2015", dateFormat: "yy-mm-dd",changeMonth: true, changeYear: true});					
						});
					</script>
						<!-- 主內容區塊[結束] -->
				</div>
			</div>

			<div class="row-fluid">
				<div class="span pagination-centered">
					
					2013 ~ 2014 Copyright &copy; Company Ltd. All Rights reserved.
				</div>
			</div>
		</div>	
	</body> 
</html><?php }} ?>