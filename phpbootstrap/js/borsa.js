/**
 * Created by hossam on 09/03/16.
 */
$(function(){
$(".delete_alarm").on("click",delete_alarm); //we can add this event when creating the button instead
    $(".disable_alarm").on("change",disable_alarm);//we can add this event when creating the button instead

//fun delete uses id attr of the row
    function delete_alarm(){
    var current_row =$(this).parent().parent();
    var id=current_row.attr("id");
    $.ajax({
        url: "model/delete_alarm.php",
        success: function(ajax_response){
            $("tr").remove("#"+id);
        },
        data: {
            id: id
        },
        error: function(){
            alert("Delete Failed!!.");
        }
    });
}
    function disable_alarm(){
        var status=0;
        if($(this).is(':checked'))
        {
            status=1;
        }
        var current_row =$(this).parent().parent();
        var id=current_row.attr("id");
        $.ajax({
            url: "model/disable_alarm.php",
            success: function(ajax_response){

            },
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