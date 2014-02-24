<?php /* Smarty version Smarty-3.1.13, created on 2014-02-25 03:10:10
         compiled from "application\views\templates_utf8\index.html" */ ?>
<?php /*%%SmartyHeaderCode:105495230bc3ca0b6c1-97311562%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b5ecbcef5d9a68ad6e035479260b0f1c784f7ff0' => 
    array (
      0 => 'application\\views\\templates_utf8\\index.html',
      1 => 1393269000,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '105495230bc3ca0b6c1-97311562',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_5230bc3ca37815_61004900',
  'variables' => 
  array (
    'pageBar' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5230bc3ca37815_61004900')) {function content_5230bc3ca37815_61004900($_smarty_tpl) {?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd"> 
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
							<a class="brand" href="#">SPEX 後台管理系統</a>
							<div class="nav-collapse collapse navbar-inverse-collapse">
								<ul class="nav">
									<li><a href="./index.php">回頁面總覽</a></li>
									<!-- <li class="active"><a href="#">目前頁面</a></li> -->
								</ul>
								
								<ul class="nav pull-right">
									<li><a href="#">黃九形 <!--(jerryhuang@9skin.com)--></a></li>
									<li class="divider-vertical"></li>
									<li class="dropdown">
										<a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="icon-wrench"></i> 控制 <b class="caret"></b></a>
										<ul class="dropdown-menu">
											<li><a href="./logout.php"><i class="icon-off"></i> 登出</a></li>
											<li class="divider"></li>
											<li><a href="./index.php?func=sys&action=list"><i class="icon-wrench"></i> 系統設置</a></li> 
											<li><a href="./index.php?func=role&action=list"><i class="icon-wrench"></i> 權限設置</a></li>
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
							<div class="alert alert-info">
								帥啊，老皮。
							</div>
						</div>
					</div>

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
											<input type="text" name="ect_no" class="datepicker input-small" value="" placeholder="會員編號">
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
											<select name="vld" class="input-medium">
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
					  <button class="btn btn-mini btn-info" type="button"> 新增 Faq </button>
					</p>
					<div class="row-fluid">
						<div class="span">
							<table class="table table-condensed table-bordered table-hover table-striped">
								<thead>
									<tr>
										<th>序號</th>
										<th>英文名</th>
										<th>身份證<BR />護照號碼</th>
										<th>會員編號</th>
										<th>生日</th>
										<th>性別</th>
										<th>電話</th>
										<th>手機</th>
										<th>地址</th>
										<th>郵遞<BR />區號</th>
										<th>推薦<BR />單位</th>
										<!-- <th>儲運金<BR />餘額</th> -->
										<th>權限</th>
										<th>狀態</th>
										<th>加入時間</th>
										<th>最後更新</th>
										<th>編輯</th>
										
									</tr>
								</thead>
								<tbody>
									<tr>
										<td>1</td>
										<td>sheng wei ho</td>
										<td>A127118931</td>
										<td>ECT0015593</td>
										<td>2004/01/01</td>
										<td>男</td>
										<td nowrap></td>
										<td>0910883528</td>
										<td>台北市大同區太原路85號</td>
										<td>103</td>
										<td>大台北北區</td>
										<!-- <td>0</td> -->
										<td>SPEX 會員</td>
										<td>開通</td>
										<td>2014/02/25 00:42:12</td>
										<td>2014/02/25 00:42:12</td>
										<td><a class="btn btn-link" href="./index.php?func=member&action=edit&sn=15593" >編輯</a></td>
									</tr>
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
					
					2013 ~ 2014 Copyright &copy; 9skin Company Ltd. All Rights reserved.
				</div>
			</div>
		</div>	
	</body> 
</html><?php }} ?>