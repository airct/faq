<?php /* Smarty version Smarty-3.1.13, created on 2014-02-25 03:48:32
         compiled from "application\views\templates_utf8\faq_list.html" */ ?>
<?php /*%%SmartyHeaderCode:8053530b9b5e73e2e2-72724692%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '367f8acd1b1ef6fe37bfcaa85451215e37773fbb' => 
    array (
      0 => 'application\\views\\templates_utf8\\faq_list.html',
      1 => 1393271296,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '8053530b9b5e73e2e2-72724692',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_530b9b5e777754_06445596',
  'variables' => 
  array (
    'faqdata' => 0,
    'key' => 0,
    'pageBar' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_530b9b5e777754_06445596')) {function content_530b9b5e777754_06445596($_smarty_tpl) {?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd"> 
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
							<a class="brand" href="#">FAQ 管理系統</a>
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
							   <li><a href="#">系統</a> <span class="divider">/</span></li>
							   <li class="active"> Faq </li>
							</ul>
						</div>	
					</div>	
			
					<BR />
					<div class="row-fluid">
						<div class="span10">
							<form class="form-horizontal" action="./index.php?func=member&action=list" method="GET">
								<div class="span6">
									<div class="control-group">
										<label class="control-label">建立日期（起）</label>
										<div class="controls">
											<input type="text" name="starttime" class="datepicker input-medium" value="2014-02-25" placeholder="建立日期（起）">
										</div>
									</div>
									
									<div class="control-group">
										<label class="control-label">問題關鍵字</label>
										<div class="controls">
											<input type="text" name="keyword" class="datepicker input-small" value="" placeholder="會員編號">
										</div>
									</div>
									
									
								</div>
								
								<div class="span6">
									<div class="control-group">
										<label class="control-label">建立日期（迄）</label>
										<div class="controls">
											<input type="text" name="endtime" class="datepicker input-medium" value="2014-02-25" placeholder="建立日期（迄）">
										</div>
									</div>

									<div class="control-group">
										<label class="control-label">狀態</label>
										<div class="controls">
											<select name="statu" class="input-medium">
												<option value="">狀態</option>
												<option value="">待解決</option>
												<option value="">已解決</option>								
											</select>
										</div>
									</div>
									
									<div class="control-group">
										<label class="control-label"></label>
										<div class="controls">
											<button type="submit" class="btn">查詢</button>
										</div>
									</div>
								</div>

								<input type="hidden" name="func" value="member" />
								<input type="hidden" name="action" value="list" />
								
							</form>
						</div>


					</div>
					<p>
					  <a class="btn btn-mini btn-info" href="./index.php/faq/edit"> 新增 Faq </a>
					</p>
					<div class="row-fluid">
						<div class="span">
							<table class="table table-condensed table-bordered table-hover table-striped">
								<thead>
									<tr>
										<th>序號</th>
										<th>問題抬頭</th>
										<th>問題描述</th>
										<th>狀態</th>
										<th>建立時間</th>
										
										<th>編輯</th>
										
									</tr>
								</thead>
								<tbody>
									<?php  $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['key']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['faqdata']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['key']->key => $_smarty_tpl->tpl_vars['key']->value){
$_smarty_tpl->tpl_vars['key']->_loop = true;
?>
									<tr>
										<td><?php echo $_smarty_tpl->tpl_vars['key']->value['faq_id'];?>
</td>			
										<td><?php echo $_smarty_tpl->tpl_vars['key']->value['faq_title'];?>
</td>		
										<td><?php echo $_smarty_tpl->tpl_vars['key']->value['faq_description'];?>
</td>
										
										<td><?php echo $_smarty_tpl->tpl_vars['key']->value['faq_status'];?>
</td>	
										<td><?php echo $_smarty_tpl->tpl_vars['key']->value['faq_createtime'];?>
</td>
										
										<td><a class="btn btn-link" href="./index.php/faq/edit/id/<?php echo $_smarty_tpl->tpl_vars['key']->value['faq_id'];?>
" >編輯</a></td>
									</tr>
									<?php } ?>
								</tbody>
							</table>
						</div>
					</div>

					<div class="row-fluid">
						<div class="pagination pagination-right">
							<?php echo $_smarty_tpl->tpl_vars['pageBar']->value;?>

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