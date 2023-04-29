function validate_email(email) {
  if (email == "") {
    return false;
  } else {
    return true;
  }
}

function validate_email_pattern(email) {
  var email_pattern =
    /^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$/;
  if (email_pattern.test(email)) {
    return true;
  } else {
    return true;
  }
}

function validate_passoword(password) {
  if (password == "") {
    return false;
  } else {
    return true;
  }
}

function validate_password_pattern(password) {
  var password_pattern =
    /^(?=.*\d)(?=.*[a-z])(?=.*[A-Z])(?=.*[^a-zA-Z0-9])(?!.*\s).{8,15}$/;
  if (!password_pattern.test(password)) {
    return false;
  } else {
    return true;
  }
}

function validate_name(name) {
  if (name == "") {
    return false;
  } else {
    return true;
  }
}

function validateForm() {
  if (validate_email($("#inputEmail4").val())) {
    if (validate_email_pattern($("#inputEmail4").val())) {
      if (validate_passoword($("#inputPassword4").val())) {
        if (validate_password_pattern($("#inputPassword4").val())) {
          if (validate_name($("#inputAddress").val())) {
            if (validate_name($("#inputCity").val())) {
              if (validate_name($("#inputState").val())) {
                if (validate_name($("#inputZip").val())) {
                  return true;
                } else {
                  console.log("Please Enter Zip Code");
                  return false;
                }
              } else {
                console.log("Please Enter State");
                return false;
              }
            } else {
              console.log("Please Enter City");
              return false;
            }
          } else {
            console.log("Please Enter Address");
            return false;
          }
        } else {
          console.log("Please Enter Valid Password");
          return false;
        }
      } else {
        console.log("Please Enter Password");
        return false;
      }
    } else {
      console.log("Please Enter Valid Email Id");
      return false;
    }
  } else {
    console.log("Please Enter Email Id");
    return false;
  }
}
