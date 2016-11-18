  function advert(response, option, object){
    var $submitButton = $('#submit-button'),
    message = document.getElementById('confirmMessageImg-' + option),
    goodColor = "#66cc66",
    badColor = "#ff6666";
    if(object.value !== ""){     
      if(response === true){
          //The passwords match. 
          //Set the color to the good color and inform
          //the user that they have entered the correct password
          $submitButton.prop('disabled', false);
          object.style.backgroundColor = goodColor;
          message.style.color = goodColor;
          message.innerHTML = '<img src="https://cdn3.iconfinder.com/data/icons/flat-actions-icons-9/792/Tick_Mark_Circle-32.png" alt="">';
      } else{
          //The passwords do not match.
          //Set the color to the bad color and
          //notify the user.
          $submitButton.prop('disabled', true);
          object.style.backgroundColor = badColor;
          message.style.color = badColor;
          message.innerHTML = '<img src="https://cdn3.iconfinder.com/data/icons/flat-actions-icons-9/792/Close_Icon_Dark-32.png" alt="">';
      }
    }else{
      object.style.backgroundColor = null;
      message.innerHTML = '';
      $submitButton.prop('disabled', true);
    }
    
  }
  
  
  function checkPassImg(){
      //Store the password field objects into variables ...
      var pass1 = document.getElementById('user_plainPassword_first');
      var pass2 = document.getElementById('user_plainPassword_second');
      //Compare the values in the password field 
      //and the confirmation field
      if(pass1.value == pass2.value){
        advert(true, "password", pass2);
      }else{
        advert(false, "password", pass2);
      }
    }  

function validateEmail(email) {
  var re = /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
  return re.test(email);
}

function validateName(name) {
  var size = Object.keys(name).length;
  var re = /^[0-9]$/
  if(size >= 4 && size <=20) {
    return true;
  }
  return false;
}

function checkName() {
  var name = $("#user_name").val();
  var obj = document.getElementById('user_name');
  if (validateName(name)) {
    advert(true, "name", obj);
  } else {
    advert(false, "name", obj);
  }
  return false;
}


function checkEmail() {
  var email = $("#user_email").val();
  var obj = document.getElementById('user_email');
  if (validateEmail(email)) {
    advert(true, "email", obj);
  } else {
    advert(false, "email", obj);
  }
  return false;
}


  