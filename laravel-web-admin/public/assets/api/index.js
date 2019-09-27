//页面数据渲染
window.onload = function()
{
    //检测内部页面，用户是否登录，没登录前往登录页
    //到达过期时间，则重新登录获取新的token
    if( getCookie("my_token") == ''){
        window.location.href="/login";
    }


    $.getJSON("api/admin/index/index", function(json) {
        $(".account").html(json.data.userInfo.account)
        $(".position").html(json.data.userInfo.name)
    });
}
