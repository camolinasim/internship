$( document ).ready(function() {
  $("input:radio").click(function() {
    console.log("you clicked the following button: " + $(this).attr('id'))

    if($(this).attr('id') == "Married") {
       $( "#married_menu" ).show()
       $( "#spouse_age_at_retirement" ).prop('required', true)
     }
else if($(this).attr('id') == "Single"){
        $( "#married_menu" ).hide()
        $( "#spouse_age_at_retirement" ).prop('required', false)


}
else return;
  });
});