//表单验证
$(function () {
    $("form").validation({
        editor_height:{
            rule: {
                required: true,
                regexp:/^\d+$/
            },
            error: {
                required: "编辑器高度不能为空",
                regexp:"请输入数字"
            },
            message:"px"
        }
    })
})