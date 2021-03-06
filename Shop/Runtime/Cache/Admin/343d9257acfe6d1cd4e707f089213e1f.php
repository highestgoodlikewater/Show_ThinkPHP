<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <title>ECSHOP 管理中心 - 添加分类 </title>
    <meta name="robots" content="noindex, nofollow">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <link href="/Public/Admin/styles/general.css" rel="stylesheet" type="text/css" />
    <link href="/Public/Admin/styles/main.css" rel="stylesheet" type="text/css" />
    <script type="text/javascript" src="/Public/Admin/js/jquery-1.7.2.min.js"></script>
</head>

<body>
    <h1>
<span class="action-span"><a href="catelist.html">商品分类</a></span>
<span class="action-span1"><a href="#">ECSHOP 管理中心</a>
</span><span id="search_id" class="action-span1"> - 添加属性 </span>
<div style="clear:both"></div>
</h1>
    <div class="main-div">
        <form action="/index.php/Admin/Attribute/add" method="post" name="theForm" enctype="multipart/form-data">
            <table width="100%" id="general-table">
                <tr>
                    <td class="label">属性名称:</td>
                    <td>
                        <input type='text' name='attr_name' maxlength="20" value='' size='27' />
                        <font color="red">*</font>
                    </td>
                </tr>
                <tr>
                    <td class="label">所属商品类型:</td>
                    <td>
                        <select name="type_id">
                            <option>选择商品类型...</option>
                            <?php foreach ($typedata as $key): ?>
                                <option value="<?php echo ($key["id"]); ?>"><?php echo ($key["type_name"]); ?></option>
                                <?php endforeach ?>
                        </select> <font color="red">*</font>
                    </td>
                </tr>
                <tr>
                    <td class="label">属性类型:</td>
                    <td>
                       <label><input type="radio" name="attr_type" value="0" checked="checked" /> 唯一属性</label>
                       <label><input type="radio" name="attr_type" value="1" /> 单选属性</label>
                    </td>
                </tr>
                <tr>
                    <td class="label">属性值录入方式:</td>
                    <td>
                        <label><input type="radio" name="attr_input_type" id='r1' value="0" checked="checked" /> 手工录入</label>
                        <label><input type="radio" name="attr_input_type" id='r2' value="1" /> 列表选择(多个用逗号隔开)</label>
                    </td>
                </tr>
                <tr>
                    <td class="label">可选值列表：</td>
                    <td>
                        <textarea name="attr_value" rows="5" cols="30" disabled="disabled"></textarea>
                    </td>
                </tr>
                <tr>
                    <td class="label"></td>
                    <td>
                        <input type="submit" value=" 确定 " />
                        <input type="reset" value=" 重置 " />
                    </td>
                </tr>
            </table>
            <div class="button-div">
            </div>
        </form>
    </div>
    <div id="footer">
        共执行 3 个查询，用时 0.021687 秒，Gzip 已禁用，内存占用 2.081 MB
        <br /> 版权所有 &copy; 2005-2010 上海商派网络科技有限公司，并保留所有权利。</div>
</body>
<script type="text/javascript">
  $(function () {
    $('#r2').bind('click', function() {
        $("textarea[name=attr_value]").attr('disabled',false);
    });
    $('#r1').bind('click',function(){
        $("textarea[name=attr_value]").val('').attr('disabled',true);
    });
  });
</script>
</html>