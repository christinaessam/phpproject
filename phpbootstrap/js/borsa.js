/**
 * Created by hossam on 09/03/16.
 */
$(function(){
    var isValid=false;
    var row_to_del=null; //reset it inside show_del_modal() then use it inside delete_row()
    $(".services").on("click",".delete_alarm",show_del_modal); //we can add this event when creating the button instead
    $(".services").on("change",".disable_alarm",disable_alarm);//we can add this event when creating the button instead
    $("#email").on("focusout",email_reg);
    $("#user_name").on("focusout",user_reg);
    $("#password").on("focusout",passwd_reg);
    $("#password_confirmation").on("focusout",conf_passwd);

   $("#btn_sign_up").on("click",sign_up);
function email_reg(){
    var emailRegex = /^\b[A-Z0-9._%-]+@[A-Z0-9.-]+\.[A-Z]{2,4}\b$/i;
    $(".form-group").eq(0).removeClass("has-error");
    if (!$("#email").val().match(emailRegex)){
        $("#email").val("");
        $(".form-group").eq(0).addClass("has-error");
    }
}
    function user_reg(){
        var userName=  /^[a-z]{6,18}$/i;
        $(".form-group").eq(1).removeClass("has-error");
        if (!$("#user_name").val().match(userName)){
            $("#user_name").val("");
            $(".form-group").eq(1).addClass("has-error");
        }
    }
    function passwd_reg(){
        var passwordRegex = /^[a-z0-9_-]{6,18}$/i;
        $(".form-group").eq(2).removeClass("has-error");
        if (!$("#password").val().match(passwordRegex)){
            $("#password").val("");
            $(".form-group").eq(2).addClass("has-error");
        }
    }
    function conf_passwd(){
        $(".form-group").eq(3).removeClass("has-error");
        if ($("#password_confirmation").val()!==$("#password").val()){
            $("#password_confirmation").val("");
            $(".form-group").eq(3).addClass("has-error");
        }
    }
    //fun to sign up
    function sign_up(){

        if($("#email").val().length>0&&$("#user_name").val().length>0&&$("#password").val().length>0&&$("#password_confirmation").val().length>0)
        {
            $.ajax({
                url:"http://localhost/phpproject/model/sign_up.php",
                type: "POST",
                data:{UserEmail:$("#email").val(),UserPassword:$("#password").val(),UserName:$("#user_name").val()},
                success:function(data){
                    alert(data);
                },
                async:true
            });
        }else{
            $(".form-group").addClass("has-error");

        }
    }

//show modal alarm before delete
    function show_del_modal(){
        row_to_del=$(this).parent().parent();
        $("#modal_del_but").on("click",delete_alarm)
        $('#deleteModal').modal();
    }

    //fun delete uses id attr of the row and row_to_del var
    function delete_alarm(){
    var id=row_to_del.attr("id");
    $.ajax({
        url: "model/delete_alarm.php",
        success: function(ajax_response){
            $("tr").filter("#"+id).fadeOut(600,function(){
                $("tr").filter("#"+id).remove();
            });
        },
        data: {
            id: id
        },
        error: function(){
            alert("Delete Failed!!.");
        }
    });
}
    //fun disable uses id attr of the row
    function disable_alarm(){
        var status=1;
        if(!$(this).is(':checked'))
        {
            status=0;
            $('#disableModal').modal();
        }
        var current_row =$(this).parent().parent();
        var id=current_row.attr("id");
        $.ajax({
            url: "model/disable_alarm.php",
            data: {
                id: id,
                status:status
            },
            error: function(){
                alert("Disable Failed!!");
            }
        });
    }

});