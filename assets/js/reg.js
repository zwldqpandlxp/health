$(function(){
    $elem=$('#submit');
    $elem.prop('disabled',true);
    var flag=[false,false,false];
    var str = /^[A-Za-z0-9]+$/;

    /** 用户名校验 **/
    $('#username').on('blur', function(e){
        //四个参数：url, data, callback, dataType
        $.get('welcome/check_name', {
            username:$(this).val()
        }, function(data){
            if(data.trim() == 'success'){
                flag[0]=true;
                $('#user_msg').html('');
            }else if(data.trim() == 'fail'){
                flag[0]=false;
                $('#user_msg').html('用户名已存在！');
            }
            if(flag[0]&&flag[1]&&flag[2])
                $elem.prop('disabled',false);
        }, 'text');
        if(flag[0]&&flag[1]&&flag[2])
            $elem.prop('disabled',false);
    });

    var $password = $('#password');
    var $repassword = $('#repassword');
    /** 密码校验 **/
    $password.on('blur', function(){
        $('#pass_msg').html('');
        if(str.test(this.value)){
            if(this.value.length < 6){
                //alert("至少六位!");
                $('#pass_msg').html('至少六位');
                flag[1]=false;
            }else{
                $('#pass_msg').html('');
                flag[1]=true;
            }
        }else{
            $('#pass_msg').html('密码中含有非法字符');
            //alert("密码中含有非法字符");
            flag[1]=false;
        }
        if(this.value == $repassword.val()){
            $('#repass_msg').html('');
            flag[2]=true;
        }
        if(flag[0]&&flag[1]&&flag[2])
            $elem.prop('disabled',false);
    });

    /** 确认密码校验 **/
    $repassword.on('blur', function(){
        if(this.value != $password.val()){
            $('#repass_msg').html('两次密码不一致!');
            flag[2]=false;
        }else{
            //alert("you are silly");
            $('#repass_msg').html('');
            flag[2]=true;
        }
        if(flag[0]&&flag[1]&&flag[2])
            $elem.prop('disabled',false);
    });
});

