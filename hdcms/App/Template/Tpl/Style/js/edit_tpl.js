//表单验证
$(function () {
    $("form").validation({
        //验证规则
        filename: {
            rule: {
                required: true
            },
            error: {
                required: "模板文件名不能为空"
            }
        },
        content: {
            rule: {
                required: true
            },
            error: {
                required: "模板内容不能为空"
            }
        }
    })
})
$(function () {
    $("form").submit(function () {
        if ($(this).is_validation()) {
            var _post = $(this).serialize();
            if (confirm("确定修改吗?")) {
                $.ajax({
                    type: "post",
                    url: METH,
                    cache: false,
                    data: _post,
                    success: function (stat) {
                        if (stat == 1) {
                            $.dialog({
                                msg: "操作成功",
                                type: "success",
                                close_handler: function () {
                                    window.close();
                                }
                            });
                        }
                    }
                })
            }
        }
        return false;
    })
})