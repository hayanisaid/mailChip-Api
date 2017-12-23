$(document).ready(function(){

 $("#mailForm").on("submit",function(e){

  e.preventDefault();
  var name=$("#name").val();
  var mail=$("#mail").val();
  if (mail!="") {
     $.ajax({
    method:"POST",
    url:"mailChip.php",
    data:{"mail":mail,"name":name},
    success:function(data){
      //
      if ($.trim(data)=="ok") {
        
        $("#data").fadeIn().addClass("alert-success").html("You Subscibed Successfully").delay(3000).fadeOut();
        $("#mailForm")[0].reset();
      }
      else if($.trim(data)=="fake"){
     
        $("#data").fadeIn().addClass("alert-danger").html("Email Subscribed Already or fake");
        $("#mail").focus();
      }else{
        alert("error please try again");
      }     
    }
  }); 
   }else{
    alert("Email required")
   }



 })

})