$(function(){
    var opts = {
        bSubmit: true
    };//标识可以提交
    var str="^[A-Za-z0-9]+$ ";
    $('#username').on('blur', function(e, param){
        //四个参数：url, data, callback, dataType

        $.get('welcome/check_name', {
            username: this.value
        }, function(data){
            if(data == 'success'){
                $('#user_msg').html('');
            }else{
                //$('#user_msg').html('用户名已存在，请重新输入');
                alert("用户名已存在，请重新输入");
                param && (param.bSubmit = false);
            }
        }, 'text');

    });

    $('#password').on('keyup', function(){
        if(this.value.length < 6&&!$(this).val().match(str)){
            //$('#pass_msg').html('至少六位!');
            alert("至少六位!");
        }else{
            $('#pass_msg').html('');
        }
    });
    $('#repassword').on('blur', function(){
        if(this.value != $('#password').val()){
            //$('#repass_msg').html('两次密码不一致!');
            alert('两次密码不一致!');
        }else{
            $('#repass_msg').html('');
        }
    });
    $('#form-reg').on('submit', function(){
        $('#email').trigger('blur', opts);
        $('#username').trigger('blur', opts);
        return opts.bSubmit;
    });
});


