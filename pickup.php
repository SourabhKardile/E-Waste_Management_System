<?php
session_start();
if (!isset($_SESSION["loggedIn"]) || !$_SESSION["loggedIn"]) {
    header("Location: index.html");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/selectize.js/0.12.6/js/standalone/selectize.min.js" integrity="sha256-+C0A5Ilqmu4QcSPxrlGpaZxJ04VjsRjKu+G82kl5UJk=" crossorigin="anonymous"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/selectize.js/0.12.6/css/selectize.bootstrap3.min.css" integrity="sha256-ze/OEYGcFbPRmvCnrSeKbRTtjG4vGLHXgOqsyLFTRjg=" crossorigin="anonymous" />
    <title>Document</title>
    
    <style>
      @import url('https://fonts.googleapis.com/css?family=Montserrat:400,800');
      
        
      * {
	box-sizing: border-box;
}
body {
	background: #f6f5f7;
	display: flex;
	justify-content: center;
	align-items: center;
	flex-direction: column;
	font-family: 'Montserrat', sans-serif;
	height: fit-content;
	margin: -40px 0 50px;
}
.container {
    text-align: center;
    color: #fff;
	margin-top:30px;
	background: -webkit-linear-gradient(to right, #17bd4e, #38e772);
	background: linear-gradient(to right, #17bd4e, #38e772);
	background-color: #fff;
	border-radius: 10px;
  	box-shadow: 0 14px 28px rgba(0,0,0,0.25), 
			0 10px 10px rgba(0,0,0,0.22);
	position: relative;
	overflow: hidden;
	width: 700px;
	max-width: 100%;
	min-height: 480px;
}
form {
	color: white;
	display: flex;
	align-items: left;
	justify-content: center;
	flex-direction: column;
	padding: 0 50px;
	height: 100%;
	text-align: center;
}

button {
	display: inline;
	border-radius: 20px;
	border: 1px solid white;
	background-color: #17bd4e;
	color: #FFFFFF;
  font-size: 12px;
	font-weight:bold;
	padding: 12px 45px;
	letter-spacing: 1px;
	text-transform: uppercase;
	transition: transform 80ms ease-in;
}

button:hover{
	color: green;
  border: 1px solid #17bd4e;
	background-color: white;
}

.form-container {
	
	top: 0;
	height: 100%;
	transition: all 0.6s ease-in-out;
    left: 0;
	width: 100%;
	z-index: 2;
  align-items: center;
}
input {
	background-color: white;
	border: 1px solid white;
	border-radius: 5px;
	padding: 12px 15px;
	margin: 8px 0;
  width: 50%;
  height: 30px;
}
select {
	position: relative;
  	/* font-family: Arial; */
  background-color: transparent;
  padding: 0 1em 0 0;
  margin: 0;
  width: 50%;
  /* font-family: inherit;
  font-size: inherit; */
  cursor: inherit;
  line-height: inherit;
  z-index: 1;
  border: 1px solid white;
  color: black;
  padding-left: 10px;

}
.selectWrapper{
  width: 50%;
  height: 30px;
  border-radius:6px;
  display:inline-block;
  background:white;
  /* border:0px solid #38e772; */
}
.logout-btn{
  margin-top: 70px;
    margin-left: 70%;
	margin-bottom: 30px;
}
.circle-wrap {
  margin-top: 20px;
  margin-left: 100px;
  width: 150px;
  height: 150px;
  background: #fefcff;
  border-radius: 50%;
  border: 1px solid #cdcbd0;
}
.circle-wrap .circle .mask,
.circle-wrap .circle .fill {
  width: 150px;
  height: 150px;
  position: absolute;
  border-radius: 50%;
}

.circle-wrap .circled .maskd,
.circle-wrap .circled .filld {
  width: 150px;
  height: 150px;
  position: absolute;
  border-radius: 50%;
}

.mask .fill {
  clip: rect(0px, 75px, 150px, 0px);
  background-color: #38e772;
}

.maskd .filld {
  clip: rect(0px, 75px, 150px, 0px);
  background-color: #38e772;
}
.circle-wrap .circle .mask {
  clip: rect(0px, 150px, 150px, 75px);
}

.circle-wrap .circled .maskd {
  clip: rect(0px, 150px, 150px, 75px);
}

.mask.full,
.circle .fill {
  animation: fill ease-in-out 3s;
  transform: rotate(var(--recy));
}

.maskd.fulld,
.circled .filld {
  animation: filld ease-in-out 3s;
  transform: rotate(var(--deco));
}

@keyframes fill{
  0% {
    transform: rotate(0deg);
  }
  100% {
    transform: rotate(var(--recy));
  }
}

@keyframes filld{
  0% {
    transform: rotate(0deg);
  }
  100% {
    transform: rotate(var(--deco));
  }
}
.circle-wrap .inside-circle {
  width: 122px;
  height: 122px;
  border-radius: 50%;
  background: #d2eaf1;
  line-height: 120px;
  text-align: center;
  margin-top: 14px;
  margin-left: 14px;
  color: #38e772;
  position: absolute;
  z-index: 100;
  font-weight: 700;
  font-size: 2em;
}

tr:hover{
  background: white;
  border: 1px solid #17bd4e;
}
#btn_status[disabled] {
  opacity: 0.6;
  cursor: not-allowed;
}

    </style>
     <script src="pickup.js"></script>
</head>
<body>
<button class="logout-btn" onclick="window.location.href='logout.php'">Logout</button>
    <div class="container">
        <br>
    <h1>Welcome <?php 
    
    include 'sqlconn.php';
    $email = $_SESSION["email"];
    $custid = $_SESSION["id"];
    $sql = "select cust_name from customer where cust_id=$custid";
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_assoc($result);
    echo $row['cust_name'];
    ?></h1>




    <button id="request" style="margin-top:50px;" onclick="window.location.href='customer/formDisplay.php'">Request for Pickup</button>

    


    
    
    <br>
    <button id="btn_status" style="margin-top:50px;" onclick="window.location.href='customer/pickup_status.php'" disabled>See Your Requests</button><br>
    <?php
      $sql5 = "select s.select_id as select_id, w.name as name, s.qty as qty from selects as s join waste as w on w.waste_id = s.waste_id join customer as c on c.cust_id = s.cust_id where s.schedule_id=0 and c.cust_id = $custid;";
      $result5 = mysqli_query($conn, $sql5);
      if(mysqli_fetch_assoc($result5)==true)
      {
        echo '<script>
        document.getElementById("btn_status").disabled = false;
      </script>';
      }
      else{
        echo '<script>
        document.getElementById("btn_status").disabled = true;
      </script>';
      }
    ?>
    <button id="" style="margin-top:50px;" onclick="window.location.href='customer/schedule_requests.php'">Scheduled Requests</button><br>
   
    <button id="achievement" style="margin-top:50px;" onclick="window.location.href='customer/achievement.php'">Your Achievements</button>
    </div>

    
   
</body>
</html>