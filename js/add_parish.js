
$(document).ready(function() {


$('#addContact').on('click', function(e){
    // We don't want this to act as a link so cancel the link action
    e.preventDefault();

    addParish();
  });

function addParish () {

	  var name = $('#name').val();
     var email = $('#email').val();
      var message = $('#message').val();

       $.ajax({
        url: 'administartor/addContact.php',
       data: 'name='+name+'&email='+email+'&message='+message,
       type: "POST",
       cache: false,  
       success: function(data) {
        console.log(data);
        $('#response').html(data);
        //location.reload();
       }
    }); 
}

});