//页面数据渲染
window.onload = function()
{
    //检测内部页面，用户是否登录，没登录前往登录页
    //到达过期时间，则重新登录获取新的token
    if( getCookie("my_token") == ''){
        window.location.href="/login";
    }

    //测试版(无token验证)
    // $.getJSON("api/admin/index/index", function(json) {
    //     $(".account").html(json.data.userInfo.account)
    //     $(".position").html(json.data.userInfo.name)
    // });

    //用户登录成功，获取登录用户的信息
    $.ajax({
        headers: {
            'Authorization':getCookie('my_token')
        },
        type:'get',
        url:"api/admin/index/index",
        success:function (json) {
            // console.log(json.data.userInfo.account)
            $(".account").html(json.data.userInfo.account)
            $(".position").html(json.data.userInfo.name)
        }
    })
}
