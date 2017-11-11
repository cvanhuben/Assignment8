$(document).ready(function(){
  $('.parallax').parallax();

  isValid = true;
  $('body').click('#submit', function() {
    $('input').each(function() {
      if ($(this).val() === '' )
        isValid = false;
    });
    if (isValid) {
      console.log('nice');
    } else {
      console.log('boo');
    }
  });

});
