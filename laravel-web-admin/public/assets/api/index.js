//页面数据渲染
window.onload = function()
{
    $.getJSON("api/admin/index/index", function(json) {
        $(".account").html(json.data.userInfo.account)
        $(".position").html(json.data.userInfo.name)
    });
}
