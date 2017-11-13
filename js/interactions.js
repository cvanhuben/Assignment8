$(document).ready(function(){
  $('.parallax').parallax();

  $('body').on('click', '#submit', function() {
    let decision = confirm('Are you sure you would like to submit your survey?');
    if (decision) {
      $.post('insert.php', $('#survey').serialize());
     window.location.href = 'thankyou.php';
    }
  });

});
