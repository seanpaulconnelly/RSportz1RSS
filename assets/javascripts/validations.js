// Ensures a field only has letters
jQuery.validator.addMethod('onlyLetters', function (value, element) {
  var pattern = /^([a-zA-Z]||\'||\.)+$/;
  return pattern.test(value);
}, "Only letters are allowed");


// Specifically used on the registration page to verify
// that the user's age is great than 13
jQuery.validator.addMethod('minimumAge', function (value, element, param) {

  // Default to invalid
  var valid = false;

  // If all fields are set, then we should check if they are valid
  if ($('#account_person_attributes_date_of_birth_1i').val() !== '' ||
      $('#account_person_attributes_date_of_birth_2i').val() !== '' ||
      $('#account_person_attributes_date_of_birth_3i').val() !== '') {

    // Get the year, month, and day as integers
    var year  = parseInt($('#account_person_attributes_date_of_birth_1i').val(), 10);
    var month = parseInt($('#account_person_attributes_date_of_birth_2i').val(), 10);
    var day   = parseInt($('#account_person_attributes_date_of_birth_3i').val(), 10);

    // Generate the date from the form
    var formDate = new Date(year, (month - 1), day);

    // Generate the date x number of years ago
    var yearsAgo = moment().subtract('years', param);

    // Compare the two dates. The form date (birthday) should be LESS than the 
    // yearsAgo time.
    valid = (formDate.getTime() < yearsAgo._d.getTime());
  }

  // return
  return valid;

}, "Must be at least 13 years old");
