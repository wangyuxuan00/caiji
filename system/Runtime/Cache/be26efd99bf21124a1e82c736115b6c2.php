<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
    <title></title>
    <meta charset="UTF-8">
        <link rel="stylesheet" type="text/css" href="/static/admin/Css/bootstrap.css" />
    <link rel="stylesheet" type="text/css" href="/static/admin/Css/bootstrap-responsive.css" />
    <link rel="stylesheet" type="text/css" href="/static/admin/Css/style.css" />
    <script type="text/javascript" src="/static/admin/Js/jquery.js"></script>
    <script type="text/javascript" src="/static/admin/Js/jquery.sorted.js"></script>
    <script type="text/javascript" src="/static/admin/Js/bootstrap.js"></script>
    <script type="text/javascript" src="/static/admin/Js/ckform.js"></script>
    <script type="text/javascript" src="/static/admin/Js/common.js"></script>

 

    <style type="text/css">
        body {
            padding-bottom: 40px;
        }
        .sidebar-nav {
            padding: 9px 0;
        }

        @media (max-width: 980px) {
            /* Enable use of floated navbar text */
            .navbar-text.pull-right {
                float: none;
                padding-left: 5px;
                padding-right: 5px;
            }
        }


    </style>
</head>
<body>
<form action="" method="post" class="definewidth m20">
<input type="hidden" name="id" value="<?php echo ($user["id"]); ?>" />
    <table class="table table-bordered table-hover definewidth m10">
        <tr>
            <td width="10%" class="tableleft">旧密码</td>
            <td><input type="password" name="password" value=""/></td>
        </tr>
        <tr>
            <td class="tableleft">新密码</td>
            <td><input type="password" name="newpassword"/></td>
        </tr>
        <tr>
            <td class="tableleft">重复新密码</td>
            <td><input type="password" name="repassword"/></td>
        </tr>
     
        <tr>
            <td class="tableleft"></td>
            <td>
                <button type="submit" class="btn btn-primary" type="button">保存</button>				 
            </td>
        </tr>
    </table>
</form>
</body>
</html>
<script>
    $(function () {       
		$('#backid').click(function(){
				window.location.href="<?php echo U('User/index');?>";
		 });

    });
</script>