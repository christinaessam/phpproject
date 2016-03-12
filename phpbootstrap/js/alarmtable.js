$(function(){
	//$("#login").on('click',function(){
		var url="http://localhost/phpproject/index.php";

		$.get(url/*,data*/);
	//});
	var cond="";
	$("input:radio[name=optradio]").on("click",function(){
		cond = $(this).val();
	});
	$(".mydrpelm").on('click',function(){
		$(".mydrp").text($(this).text());
	});
	$("#addalarm").on("click",function(){

		var share_name=$(".mydrp").text();//get share name 
		alert(share_name);
		var alarm_cond=cond;//get share condition 
		alert(alarm_cond);
		var alarm_value=$("#alarm_value").val()//get alarm value 
		alert(alarm_value);
		var symbol=share_name.substring(0,share_name.indexOf("("));
		var name=share_name.substring(share_name.indexOf("(")+1,share_name.length-1);
		alert("name :"+name);
		alert("symbol :"+symbol);
		var usr_id=1;
		alert("before ajax request");
		$.ajax({
			'url':"http://localhost/phpproject/model/add_alarm.php",
			'method':'get',
			'data':{
				'userid':usr_id,
				'name': name,
				'symbol':symbol,
				'condition':alarm_cond,
				'alarm_value':alarm_value
			},
			'success': function(result){
			if(($.parseJSON(result))!=null)
			{
				result=$.parseJSON(result);
            	var alarm_id=result["id"];
            	//console.log(alarm_id);
            	var alarm_price = result['lastprice'];
            	//console.log(alarm_price);
            	var date= result['lastdate'];
            	//console.log(date);
            	var condition="";
            	if(alarm_cond==1)
            		condition="goes above";
            	else 
            		condition="drops below";
            	var alert=condition+" "+ alarm_value;
            	$("#alarms_table tbody").append(
					"<tr id=\""+alarm_id+"\">"+
					'<td><input type="checkbox" value="" class="disable_alarm" id="check" checked onchange="disable_alarm"></td>'+
					'<td>'+share_name+'</td>'+
					'<td>'+result['lastprice']+'</td>'+
					'<td>'+alert+'</td>'+
					"<td>"+result['lastdate']+"</td>"+
					'<td id="deltd"><button type="button" class="btn btn-danger delete_alarm" onclick="show_del_modal">Delete</button></td>'+
					"</tr>");
            	//alert("ajax is done");
   			}
       		},
			'error':function(){
				alert("error");
			},
			'async':true
		});
	});
});