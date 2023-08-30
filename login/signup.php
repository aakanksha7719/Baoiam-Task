<!doctype html>
<html>

<head>
<style>
    .body{
        font-family: 'Times New Roman', Times, serif;
    }
    .main{
        margin-left: 250px;
        margin-right: 180px;
        margin-top: 80px;
        margin-bottom: 50px;
        border: solid 2px;
        width: 800px;
        height: 500px;
    }
    .img{
        width: 420px;
        height: 400px;
        float: left;
    }
    .content{
        float: left;
        width: 300px;
        height: 400px;
    }
    button:hover{
        background-color: black;
        color: white;
        transition: .5s;
        cursor: pointer;
}
    .sign{
        font-size: 25px;
    }
    .sign:hover {
       font-size: 30px;
    }
  
</style>
</head>

<body style="font-family: 'Times New Roman', Times, serif;">
<div class="main">
    <div class="img">
        <image class="img-" style="height: 500px; width: 400px;" src="C:\xampp\htdocs\InternCrowdTask2\loginimg.jpg">
    </div>

    <div class="content" style="float: left;">
        <br>
        <br>
        <center>
            <img style="height: 45px; height: 45px;" src="C:\xampp\htdocs\InternCrowdTask2\login img.jpg">
        </center>
        <div class="sign">
        <b><center><p style="color: rgb(187, 97, 190);">Sign Up</p></center>
        </div>
        </b><br>
        <br>
        <form action="connectsignup.php" method="post">      
            <label> Username: </label>  &emsp; &emsp; &emsp; &emsp;
            <input type="text" name="username" size="15"/> <br> <br>   
            <label>Password: </label> &emsp; &emsp; &emsp; &emsp;
            <input type="Password" id="pass" name="pass" size="15"> <br> <br>  
            <br> 
            &emsp;  &emsp;  &emsp; &emsp;  &emsp; &emsp;  
            <button style="font-size: 16px; padding: 5px; " type="Submit" name="submit1" >Login</button>
            &emsp; 
            <br><br><br><br><br><br>
        <a href="http://localhost/InternCrowdTask2/signin.html">Register New User</a>
        </form>
    </div>
</div>
</body>

</html>




    