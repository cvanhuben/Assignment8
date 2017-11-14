$(document).ready(function(){
  $('.parallax').parallax();

  /*
    Confirmation Window
  */
  $('body').on('click', '#submit', function() {
    let decision = confirm('Are you sure you would like to submit your survey?');
    if (decision) {
      $.post('insert.php', $('#survey').serialize());
     window.location.href = 'thankyou.php';
    }
  });

  /*
    Tick other box if text is inputted
  */
  $('body').on('focusout', "input[id='other'][type='text']", function() {
    if($(this).val()) {
      $("input[id='other'][type='checkbox']").prop('checked', true);
    } else {
      $("input[id='other'][type='checkbox']").prop('checked', false);
    }
  });

  // $('body').on('focusout', "input[id='other'][type='checkbox']", function() {
  //   const othertext = $("input[id='other'][type='text']");
  //   if($(this).is(':checked') && !othertext.val()) {
  //     if (!othertext.hasClass('invalid')) {
  //       console.log('text is not yet invalid so we will add it');
  //       othertext.addClass('invalid');
  //     }
  //   } else if (othertext.val()) {
  //     console.log('there is value in text so we will remove invalid class');
  //     othertext.removeClass('invalid');
  //   }
  // });

  /*
    Toggle disabled submit button
  */
  $('body').on('click', 'input', function() {
    checkValidity($(this));
  });
  $('body').on('focusout', 'input', function() {
    checkValidity($(this));
  });

  function checkValidity (current) {
    let isValid = true;
    if (!current.val()) {
      isValid = false;
    } else {
      isValid = iteratatingForm(current);
    }
    const submit = $('#submit');
    if (isValid) {
      submit.removeClass('disabled');
    } else {
      if (!submit.hasClass('disabled')) {
        submit.addClass('disabled');
      }
    }
  }

  function iteratatingForm (current) {
    // first-name
    if (!document.forms['survey']['first'].value) return false;
    // // last-name
    if (!document.forms['survey']['last'].value) return false;
    // // email
    if (!document.forms['survey']['email'].value) return false;
    // everyday
    if (!document.forms['survey']['everyday'].value) return false;
    // per_day
    if (!document.forms['survey']['per_day'].value) return false;
    // frequency
    if (!document.forms['survey']['frequency'].value) return false;
    // spend
    if (!document.forms['survey']['spend'].value) return false;
    // store
    if (!document.forms['survey']['store'].value) return false;
    // drink
    if (!document.forms['survey']['drink'].value) return false;
    // ingredients
    if (!document.forms['survey']['ingredients'].value) return false;
    // agree
    if (!document.forms['survey']['agree'].value) return false;
    // buy[]
    if (!checkElementValidity('$(input[name="buy[]"])')) return false;
    // as[]
    if (!checkElementValidity('$(input[name="as[]"])')) return false;
    // reason[]
    if (!checkElementValidity('$(input[name="reason[]"])')) return false;
    // important[]
    if (!checkElementValidity('$(input[name="important[]"])')) return false;
    // difficult[]
    if (!checkElementValidity('$(input[name="difficult[]"])')) return false;
    // if no elements in the form are false,
    return true;
  }

  function checkElementValidity(inputGroup) {
    // inputGroup.each(function() {
    //   if (element.val()) {
         return true;
    //   }
    // });
    // return false;
  }

});
