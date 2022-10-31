// var a = "am move forward to the path God want me to be";
// var b =a.replace(/[a|m]/g, "x")
// console.log(b)
function ValidateEmail(input) {

    var validRegex = /^([a-z\d\.-]+)@([a-z]+)\.([a-z])$/;
  
    if (validRegex == input) {
  
      console.log("Valid email address!");
  
    
  
    } else {
  
      console.log("Invalid email address!");
  
     
  
    }
  
  }

  ValidateEmail("david32@gmail.com");