//页面数据渲染
window.onload = function()
{
    $.getJSON("api/admin/index/index", function(json) {
        // console.log(document.getElementsByClassName("role"))
        // console.log(document.getElementsByClassName("role"))
        // document.getElementsByClassName("account").item(0).innerHTML=json.data.userInfo.account
        // document.getElementsByClassName("role").innerHTML=json.data.userInfo.name
        $(".account").html(json.data.userInfo.account)
        $(".position").html(json.data.userInfo.name)
        console.log($(".account"))

    });
}