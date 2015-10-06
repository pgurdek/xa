$( document ).ready(function() {
    
$('.fast_contact-click').click(function() {

	$(this).parent().addClass('active_contact');

});

$('#close-fast-form').click(function(){


$(this).parent().removeClass('active_contact');
$(this).parent().addClass('timer');

var popup = $(this).parent();
setTimeout(function() {
popup.removeClass('timer')
}, 2000);


});
$('.wrapper-show-list h3').click(function(){

$(this).parent().find('.show-list').slideToggle('slow');

});





 $("#submit_btn").click(function() {
 //Pobieramy dane
 var user_name = $('input[name=name]').val();
 var user_email = $('input[name=email]').val();
 var user_ask = $('input[name=ask]').val();
 var user_message = $('textarea[name=message]').val();
 var user_query = $('input[name=query]').val();
 //Prosta walidacja (kolorujemy na czerwono pole jeśli jest puste
 var proceed = true;
 if(user_email==""){
 $('input[name=email]').css('border-color','red');
 proceed = false;
 }
 if(user_ask=="") {
 $('input[name=ask]').css('border-color','red');
 proceed = false;
 }
 if(user_message=="") {
 $('textarea[name=message]').css('border-color','red');
 proceed = false;
 }
//wszystko w porządku idziemy dalej
 if(proceed)
 {
 //Dane do wysłania
 post_data = {'userName':user_name, 'userEmail':user_email, 'userAsk':user_ask, 'userMessage':user_message,'userQuery':user_query};
  
 //Przesłanie danych poprzez AJAX
 templateDir +='contact_me.php';
 $.post('../contact_me.php', post_data, function(response){
//wczytanie danych zwrotnych JSON
 if(response.type == 'error')
 {
 output = '<div class="error">'+response.text+'</div>';
 }else{
 output =  '<div class="success">'+response.text+'</div>';
  
 //resetujemy wszystkie wartości
 $('#contact_second input').val('');
 $('#contact_second textarea').val('');
 }
  
 $("#result").hide().html(output).slideDown();
 }, 'json');
  
 }
 });
  
 //resetujemy kolorowanie po zaczęciu pisania
 $("#contact_form input, #contact_form textarea").keyup(function() {
 $("#contact_form input, #contact_form textarea").css('border-color','');
 $("#result").slideUp();
 });
  

















});