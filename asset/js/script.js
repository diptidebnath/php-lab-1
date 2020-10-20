/* tutorial from https://ui.dev/validate-email-address-javascript/ for email validation */

function emailIsValid (email) {
    return /^[^\s@]+@[^\s@]+\.[^\s@]+$/.test(email)
  }

function validateForm() {
    var name = document.forms["myForm"]["name"].value;
    var email = document.forms["myForm"]["email"].value;
    if (name == "") {
      alert("Name must be filled out");
      return false;
    }
    if (email == "") {
        alert("email must be filled out");
        return false;
      }
    if (emailIsValid(email))
  {
    return (true)
  }
    alert("You have entered an invalid email address!")
    return (false)
  }
  