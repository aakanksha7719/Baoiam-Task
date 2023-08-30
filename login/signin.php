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
        <div class="sign">
            <b><center> <p style="color: rgb(187, 97, 190);">Sign In</p></center>
        </div>
        </b><br>

        <form action="connectsignin.php" method="post">  
            <label> Full Name: </label> &emsp; &emsp; &emsp; &emsp13;  
            <input type="text" name="firstname" size="15"/> <br> <br>  
            <label> Email:</label>   &emsp13; &emsp; &emsp; &emsp; &emsp; &emsp13;
            <input type="text" name="email" size="15"/> <br> <br>  
            <label> Username: </label>  &emsp; &emsp; &emsp; &emsp13;
            <input type="text" name="username" size="15"/> <br> <br>   
            <label>Password: </label> &emsp; &emsp; &emsp; &emsp13; &emsp13;
            <input type="Password" id="pass" name="pass" size="15"> <br> <br>  
            <label>Re-type password: </label> &emsp; 
            <input type="Password" id="repass" name="repass" size="15"> <br> <br>  
            <br>
            &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; 
            <button style="font-size: 16px; padding: 5px; size: 20cm;" type="Submit">Register</button>
        </form>
    </div>
</div>
</body>

</html>
    