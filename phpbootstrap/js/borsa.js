/**
 * Created by hossam on 09/03/16.
 */
$(function(){
    var row_to_del=null; //reset it inside show_del_modal() then use it inside delete_row()
$(".delete_alarm").on("click",show_del_modal); //we can add this event when creating the button instead
    $(".disable_alarm").on("change",disable_alarm);//we can add this event when creating the button instead

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