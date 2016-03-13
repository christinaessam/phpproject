/**
 * Created by hossam on 13/03/16.
 */
$(function(){
    $("#update_btn").click(function(){
        $("#up_modal").modal();
    });
    $("#email_up").on("focusout",email_reg);
    $("#user_name_up").on("focusout",user_reg);
    $("#psw_up").on("focusout",passwd_reg);
    $("#psw_up2").on("focusout",conf_passwd);
    $("#btn_update").on("click",update_profile);
    function email_reg(){
        var emailRegex = /^\b[A-Z0-9._%-]+@[A-Z0-9.-]+\.[A-Z]{2,4}\b$/i;
        $(".form-group").eq(2).removeClass("has-error");
        if (!$("#email_up").val().match(emailRegex)){
            $("#email_up").val("");
            $(".form-group").eq(2).addClass("has-error");
        }
    }
    function user_reg(){
        var userName=  /^[a-z]{6,18}$/i;
        $(".form-group").eq(3).removeClass("has-error");
        if (!$("#user_name_up").val().match(userName)){
            $("#user_name_up").val("");
            $(".form-group").eq(3).addClass("has-error");
        }
    }
    function passwd_reg(){
        if($("#psw_up").val().length>0){
        var passwordRegex = /^[a-z0-9_-]{6,18}$/i;
        $(".form-group").eq(4).removeClass("has-error");
        if (!$("#psw_up").val().match(passwordRegex)){
            $("#psw_up").val("");
            $(".form-group").eq(4).addClass("has-error");
        }
        }
    }
    function conf_passwd(){
        $(".form-group").eq(5).removeClass("has-error");
        if ($("#psw_up2").val()!==$("#psw_up").val()){
            $("#psw_up2").val("");
            $(".form-group").eq(5).addClass("has-error");
        }
    }
    function update_profile(){
        if($("#email_up").val().length>0&&$("#user_name_up").val().length>0)
        {
            $.ajax({
                url:"http://localhost/phpproject/model/update_profile.php",
                type: "POST",
                data:{UserEmail:$("#email_up").val(),UserPassword:$("#psw_up").val(),UserName:$("#user_name_up").val()},
                success:function(data){
                    if (data=="true"){
                        $("#up_modal").modal('toggle');
                    }else {
                        $("#email").val("");
                        $("#up_modal").modal('toggle');
                        $(".form-group").eq(2).addClass("has-error");
                        $("#mailModal").modal();
                    }
                },
                async:true
            });
        }else{
            $(".form-group").addClass("has-error");

        }
    }

});
