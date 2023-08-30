function validate() {
    var Name = document.getElementById("name").value;
    var Email = document.getElementById("email").value;
 


    console.log(Name);
    // var letters = /^[a-zA-Z]+$/;
        var letters = /^[a-zA-Z]/;
    var emailId = /^\S+@\S+\.\S+$/;


    if  (!Name.match(letters)) {
        alert("Names should contain alphabet only!!!");
    }
  else if (!Email.match(emailId)) {
        alert("Pl. Enter valid Mail");
    }
    else {
        alert("Form submitted successfully!")
    }
}
