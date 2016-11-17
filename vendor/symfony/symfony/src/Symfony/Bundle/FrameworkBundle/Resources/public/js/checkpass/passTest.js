    function checkPassImg(){
      //Store the password field objects into variables ...
      var pass1 = document.getElementById('user_plainPassword_first');
      var pass2 = document.getElementById('user_plainPassword_second');
      //Store the Confimation Message Object ...
      var message = document.getElementById('confirmMessageImg');
      //Set the colors we will be using ...
      var goodColor = "#66cc66";
      var badColor = "#ff6666";
      //Compare the values in the password field 
      //and the confirmation field
      if(pass1.value == pass2.value){
        //The passwords match. 
        //Set the color to the good color and inform
        //the user that they have entered the correct password 
        pass2.style.backgroundColor = goodColor;
        message.style.color = goodColor;
        message.innerHTML = '<img src="https://cdn3.iconfinder.com/data/icons/flat-actions-icons-9/792/Tick_Mark_Circle-32.png" alt="Passwords Match!">';
      }else{
        //The passwords do not match.
        //Set the color to the bad color and
        //notify the user.
        pass2.style.backgroundColor = badColor;
        message.style.color = badColor;
        message.innerHTML = '<img src="https://cdn3.iconfinder.com/data/icons/flat-actions-icons-9/792/Close_Icon_Dark-32.png" alt="Passwords Do Not Match!">';
      }
    }  
  