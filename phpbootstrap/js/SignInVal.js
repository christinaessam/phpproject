$(document).ready(function (){
    
    var UserPassStat=false;
    var UserMailStat=false;
    var emailRegex = /^\b[A-Z0-9._%-]+@[A-Z0-9.-]+\.[A-Z]{2,4}\b$/i;
    var passwordRegex = /^[a-z0-9_-]{6,18}$/i; 
   $("#usrname").focusout(function(){
        if($("#usrname").val().match(emailRegex))
            {
                UserMailStat=true;
                
            }
       else
       {
         UserMailStat=false;
       }
      
   });
    
     $("#psw").focusout(function(){
         if($("#psw").val().match(passwordRegex))
             {
                 UserPassStat=true;
                  
             }
         else
             {
                  UserPassStat=false;
             }
         
          if(UserPassStat==true && UserMailStat==true )
           {
               
           $('#btn-signin').prop('disabled', false);
           }
     });
    
    $("#btn-signin").click(function(){
       
        $.ajax({
		url: "http://localhost/phpproject/model/SignInValidation.php",
		type: "POST",
		data: {UserEmail:$("#usrname").val(),UserPassword:$("#psw").val()},
		success: function(ddata){
            var ResultJson=JSON.parse(ddata);
           // alert(ResultJson);
            for(var i in ResultJson)
                {
                 if(ResultJson['Founded']===false)  
                     {;
                           $("#usrname").closest('.form-group').addClass('has-error');
                           $("#psw").closest('.form-group').addClass('has-error');
                           $("#ErrorEmail").show();
                           $("#ErrorPassword").show();
                           
                     }else {
                     window.location="http://localhost/phpproject/index.php";
                 }
                    
                }
            
		},
           
		async:true});             
        
        return false;
    });
    
  
    
    
    
    
});