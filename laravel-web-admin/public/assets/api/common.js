//将token保存到cookie
function setTokenToCookie(value) {
    // var Days = 1; //此 cookie 将被保存 1 天
    var hour = 2;
    var exp = new Date();
    // exp.setTime(exp.getTime() + Days * 24 * 60 * 60 * 1000);//天
    exp.setTime(exp.getTime() + hour *  60 * 60 * 1000);//2小时(与后端过期时间一致config/jwt.php)

    document.cookie = "my_token =" + escape(value) + ";expires=" + exp.toGMTString();
}

//GMT时间格式转普通时间格式
function  GMTToStr(time){
    let date = new Date(time)
    let Str=date.getFullYear() + '-' +
        (date.getMonth() + 1) + '-' +
        date.getDate() + ' ' +
        date.getHours() + ':' +
        date.getMinutes() + ':' +
        date.getSeconds()
    return Str
}


//获取token
function getCookie(name) {
    var cookieValue = "";
    if (document.cookie && document.cookie !== '') {
        var cookies = document.cookie.split(';');
        for (var i = 0; i < cookies.length; i++) {
            var cookie = $.trim(cookies[i]);
            if (cookie.substring(0, name.length + 1) === (name + '=')) {
                cookieValue = decodeURIComponent(cookie.substring(name.length + 1));
                break;
            }
        }
    }
    return cookieValue;
}


