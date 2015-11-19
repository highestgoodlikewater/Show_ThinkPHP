<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <title>ECSHOP 管理中心 - 商品列表 </title>
    <meta name="robots" c>
    <meta http-equiv="Content-Type" c />
    <link href="/Public/Admin/styles/general.css" rel="stylesheet" type="text/css" />
    <link href="/Public/Admin/styles/main.css" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" type="text/css" href="/Public/CSS/page.css" />
</head>

<body>
    <h1>
<span class="action-span"><a href="<?php echo U('Category/add'); ?>">添加商品栏目</a></span>
<span class="action-span1"><a href="#">ECSHOP 管理中心</a> </span><span id="search_id" class="action-span1"> - 商品列表 </span>
<div style="clear:both"></div>
</h1>
    <form method="post" action="" name="listForm">
        <div class="list-div" id="listDiv">
            <table cellpadding="3" cellspacing="1">
                <tr>
                    <th>
                        <input onclick='listTable.selectAll(this, "checkboxes")' type="checkbox" />
                        <a href="#">编号</a><img src="/Public/Admin/images/sort_desc.gif" />
                    </th>
                    <th><a href="#">栏目名称</a></th>
                    <th><a href="#">商品数量</a></th>
                    <th>操作</th>
                </tr>
                <?php foreach($catedata as $v){?>
                    <tr>
                        <td>
                            <input type="checkbox" name="checkboxes[]" value="32" /><?php echo $v['id'];?></td>
                        <td class="first-cell" style=""><span><?php echo str_repeat('--', $v['lev']*2); echo $v['cat_name']?></span></td>
                       <td class="first-cell" style=""><span>10</span></td>
                        <td align="center">
                            <a href="/index.php/Admin/Category/edt/id/<?php echo $v['id']; ?>" title="编辑">编辑</a>
                            <a href="/index.php/Admin/Category/del/id/<?php echo $v['id']; ?>" onclick="return confirm('你确定要删除吗？')" title="删除">删除</a>
                        </td>
                    </tr>
                    <?php }?>
            </table>
            <table id="page-table" cellspacing="0">
                <tr>
                    <td align="right" nowrap="true">
                      <div class="manu">
                        <?php echo $page; ?>
                      </div>
                    </td>
                </tr>
            </table>
        </div>
    </form>
    <div id="footer">
        共执行 7 个查询，用时 0.112141 秒，Gzip 已禁用，内存占用 3.085 MB
        <br /> 版权所有 &copy; 2005-2010 上海商派网络科技有限公司，并保留所有权利。</div>
</body>

</html>