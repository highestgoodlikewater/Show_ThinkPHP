<?php if (!defined('THINK_PATH')) exit();?><!-- $Id: goods_info.htm 17126 2010-04-23 10:30:26Z liuhui $ -->
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <title>ECSHOP 管理中心 - 添加新商品 </title>
    <meta name="robots" content="noindex, nofollow">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <link href="/Public/Admin/styles/general.css" rel="stylesheet" type="text/css" />
    <link href="/Public/Admin/styles/main.css" rel="stylesheet" type="text/css" />
    <!-- 通用编辑器 -->
    <script type="text/javascript" src="/Public/Admin/js/ueditor/ueditor.config.js"></script>
    <script type="text/javascript" src="/Public/Admin/js/ueditor/ueditor.all.min.js"></script>
    <script type="text/javascript" src="/Public/Admin/js/ueditor/lang/zh-cn/zh-cn.js"></script>
    <!-- 表单验证 -->
    <script type="text/javascript" src="/Public/Admin/js/jquery-1.7.2.min.js"></script>
    <script type="text/javascript" src="/Public/Admin/js/jquery.validate.min.js"></script>
    <script type="text/javascript" src="/Public/Admin/js/validate_zh_cn.js"></script>
    <style type="text/css">
    label.error {
        color: red;
        margin-left: 5px;
    }
    </style>
</head>

<body>
    <h1>
<span class="action-span"><a href="#">商品列表</a></span>
<span class="action-span1"><a href="#">ECSHOP 管理中心</a> </span><span id="search_id" class="action-span1"> - 添加新商品 </span>
<div style="clear:both"></div>
</h1>
    <!-- start goods form -->
    <div class="tab-div">
        <!-- tab bar -->
        <div id="tabbar-div">
            <p>
                <span class="tab-front" id="general-tab">通用信息</span>
            </p>
        </div>
        <!-- tab body -->
        <div id="tabbody-div">
            <form enctype="multipart/form-data" action="/index.php/Admin/Goods/add.html" method="post" name="theForm">
                <!-- 最大文件限制 -->
                <input type="hidden" name="MAX_FILE_SIZE" value="2097152" />
                <!-- 通用信息 -->
                <table width="90%" id="general-table" align="center">
                    <tr>
                        <td class="label">商品名称：</td>
                        <td>
                            <input type="text" name="goods_name" value="" style="float:left;color:;" size="30" />
                        </td>
                    </tr>
                    <tr>
                        <td class="label">商品货号：</td>
                        <td>
                            <input type="text" name="goods_sn" value="" style="float:left;color:;" size="30" /> *(如不填写系统自动生成。)
                        </td>
                    </tr>
                    <tr>
                        <td class="label">是否上架：</td>
                        <td>
                            <input type="radio" name="is_sale" value="1" checked="checked">是
                            <input type="radio" name="is_sale" value="0">否
                        </td>
                    </tr>
                    <tr>
                        <td class="label">是否新品：</td>
                        <td>
                            <input type="radio" name="is_new" value="1" checked="checked">是
                            <input type="radio" name="is_new" value="0">否
                        </td>
                    </tr>
                    <tr>
                        <td class="label">是否热卖：</td>
                        <td>
                            <input type="radio" name="is_hot" value="1" checked="checked">是
                            <input type="radio" name="is_hot" value="0">否
                        </td>
                    </tr>
                    <tr>
                        <td class="label">是否精品：</td>
                        <td>
                            <input type="radio" name="is_best" value="1" checked="checked">是
                            <input type="radio" name="is_best" value="0">否
                        </td>
                    </tr>
                    <tr>
                        <td class="label">商品栏目：</td>
                        <td>
                            <select name="cat_id">
                                <option value="0">请选择分类</option>
                                <?php foreach ($catedata as $v): ?>
                                    <option value="<?php echo ($v["id"]); ?>"><?php echo str_repeat('--',$v['lev']); echo $v['cat_name'] ?></option>
                                <?php endforeach ?>
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <td class="label">商品数量：</td>
                        <td>
                            <input type="text" name="goods_number" value="" style="float:left;color:;" size="20" />
                        </td>
                    </tr>
                    <tr>
                        <td class="label">商品价格：</td>
                        <td>
                            <input type="text" name="shop_price" value="0" size="20" />
                        </td>
                    </tr>
                    <tr>
                        <td class="label">市场价格：</td>
                        <td>
                            <input type="text" name="market_price" value="0" size="20" />
                        </td>
                    </tr>
                    <tr>
                      <td class="label">上传产品图片：</td>
                      <td>
                        <input type="file" name="img_ori" value="" />
                      </td>
                    </tr>
                    <tr>
                        <td class="label">商品描述：</td>
                        <td>
                            <textarea id="container" name="goods_desc"></textarea>
                        </td>
                    </tr>
                    <tr>
                        <td class="label">商品类型：</td>
                        <td>
                            <select name="goods_type">
                                <option value="0">请选择商品类型</option>
                                <?php foreach ($typedata as $v): ?>
                                    <option value="<?php echo $v['id']?>"><?php echo $v['type_name'] ?></option>
                                <?php endforeach ?>
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <td>&nbsp;</td>
                        <td>
                            <div id="showattr"></div>
                        </td>
                    </tr>
                </table>
                <div class="button-div">
                    <input type="hidden" name="id" value="0" />
                    <input type="submit" name="submit" value=" 确定 " class="button" />
                    <input type="reset" value=" 重置 " class="button" />
                </div>
            </form>
        </div>
    </div>
    <!-- end goods form -->
</body>
<script type="text/javascript">
// 给form表单name为theForm绑定验证
$('form[name=theForm]').validate({
    // rules 自定义规则
    rules: {
        // 表单goods_name规则
        goods_name: {
            required: true,
        },
        goods_number: {
            required: true,
            number: true,
        },
        shop_price: {
            required: true,
            number: true,
        },
        market_price: {
            required: true,
            number: true,
        },
    },
});

UE.getEditor('container', {
    initialFrameWidth: 650,
    initialFrameHeight: 320,
});

$('select[name=goods_type]').change(function (){
    var _typeid = $(this).val();
    // AJAX提交typeid,返回遍历好的生成表单的HTML
    $.ajax({
            url: '/index.php/Admin/Goods/showattr/typeid/' + _typeid,
            type: 'get',
            dataType: 'html',
            success:function(html){
                // console.log(html);
                $('#showattr').html(html);
            }
        });
});
</script>

</html>