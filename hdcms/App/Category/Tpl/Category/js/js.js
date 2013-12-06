//表单验证
$(function () {
    $("form").validation({
        //验证规则
        catname: {
            rule: {
                required: true
            },
            error: {
                required: "栏目名称不能为空"
            }
        },
        app: {
            rule: {
                required: true
            },
            error: {
                required: "项目不能为空"
            }
        },
        control: {
            rule: {
                required: true
            },
            error: {
                required: "模块不能为空"
            }
        },
        method: {
            rule: {
                required: true
            },
            error: {
                required: "方法不能为空"
            }

        }
    })
})
//获得静态目录
$(function () {
    $("[name='catname']").blur(function () {
        //不为空时处理
        $catdir = $.trim($("[name='catdir']").val());
        $catname = $.trim($("[name='catname']").val())
        if (!$catdir && $catname) {
            $.post(CONTROL + "&m=get_catdir", {catname: $(this).val()}, function (data) {
                $("[name='catdir']").val(data);
            })
        }
    })
})
//添加或修改栏目
$(function () {
    $("form").submit(function () {
        //如果为生成静态，必须设置静态目录
        if ($("[name='cattype']:checked").val() != 3) {
            if (!$.trim($("[name='catdir']").val())) {
                alert("请设置静态目录");
                return false;
            }
        }
        if ($(this).is_validation()) {

            var _post = $(this).serialize();
            $.ajax({
                type: "POST",
                url: METH,
                dataType: "JSON",
                cache: false,
                data: _post,
                success: function (data) {
                    if (data.stat == 1) {
                        $.dialog({
                            msg: data.msg,
                            type: "success",
                            close_handler: function () {
                                location.href = CONTROL;
                            }
                        });
                    }
                }
            })
        }
        return false;
    })
})

//删除栏目
function del_category(cid) {
    if (confirm("删除栏目会同时删除文章，确认删除吗？")) {
        $.ajax({
            type: "POST",
            url: CONTROL + "&m=del",
            dataType: "JSON",
            cache: false,
            data: {cid: cid},
            success: function (data) {
                if (data.stat == 1) {
                    $.dialog({
                        msg: data.msg,
                        type: "success",
                        close_handler: function () {
                            location.href = URL;
                        }
                    });
                } else {
                    $.dialog({
                        msg: data.msg,
                        type: "error"
                    });
                }
            }
        })
    }
}


//更新排序
$(function () {
    $("input.update_order").click(function () {
        var post = $("input[type='text']").serialize();
        $.ajax({
            type: "POST",
            url: CONTROL + "&m=update_order",
            dataType: "JSON",
            cache: false,
            data: post,
            success: function (data) {
                if (data.stat == 1) {
                    $.dialog({
                        msg: data.msg,
                        type: "success",
                        close_handler: function () {
                            location.href = URL;
                        }
                    });
                }
            }
        })
    })
})
//更新栏目缓存
function update_cache() {
    $.ajax({
        url: CONTROL + "&m=update_cache",
        success: function () {
            $.dialog({
                msg: "更新缓存成功！",
                type: "success",
                close_handler: function () {
                    location.href = URL;
                }
            });
        }
    })
}
