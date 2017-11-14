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
  if (!current.val()) {
    return false;
  } else {
    const isValid = iteratatingForm(current);
    const submit = $('#submit');
    if (isValid) {
      submit.removeClass('disabled');
    } else {
      if (!submit.hasClass('disabled')) {
        submit.addClass('disabled');
      }
    }
  }
}

function iteratatingForm (current) {
  // first-name
  if (!($('#first-name').val())) return false;
  // // last-name
  if (!($('#last-name').val())) return false;
  // // email
  if (!($('#email').val())) return false;
  // everyday
  // if (!checkElementValidity($("input[name='everday']"))) {
  //   return false;
  // }
  // per_day
  // buy[]
  // as[]
  // frequency
  // spend
  // store
  // reason[]
  // important[]
  // difficult[]
  // drink
  // ingredients
  // agree

  return true;

}

function checkElementValidity(inputGroup) {
  inputGroup.each(function() {
    console.log('now iterating through all elements');
    if (element.val()) {
      console.log('wow! an element was true!');
      return true;
    }
  });
  return false;
}
