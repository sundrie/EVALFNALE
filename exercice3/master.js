$(document).ready(function(){

// s'active lorsque le bouton submit du formulaire est clické
$("#send").click(function(e){
  e.preventDefault();
  var formValue = $("form").serialize();
  console.log(formValue);
  $.ajax({
    url : 'insertCar.php', // On fait appel au script d'insertion
    type : 'POST',
    data : formValue,
     success : function(){
       $("#result").html("<p>insertion réussie</p>");
     }
     error : function(){
       $("#result").html("<p>Erreur</p>");
     }
  });
});


});
