 <?php

function  emptyImputSignup($name, $email, $username, $pwd, $pwdRepeat)
{
   $result="";
   if(empty($name)|| empty($email)|| empty($username)|| empty($pwd)|| empty($pwdRepeat)){
     $result = true;
   }else{
     $result = false;
   }
   return $result;
}

function invalidUid($username)
{
  $result = "";
  if(!ctype_alnum($username))
    { 
    $result = true;
    }else{
    $result = false; 
  }
  return $result;
  
  
}

function invalidEmail($email)
{
  $result = "";
  if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
    $result = true;
  }else{
    $result = false; 
  }
  return $result;
}

function pwdMatch($pwd,$pwdRepeat)
{
  $result="";
  if($pwd !== $pwdRepeat){ 
    $result = true;
  }else{
    $result = false; 
  }
    return $result;
}

function uidExist($conn, $username, $email )
{
 $sql = "SELECT * FROM users WHERE userUid = ? OR usersEmail = ? ;";
 $stmt = mysqli_stmt_init($conn);
 if(!mysqli_stmt_prepare($stmt,$sql)){
   header("location: ../signup.php?error=stmtfailed");
   exit();
 }
 mysqli_stmt_bind_param($stmt,"ss",$username, $email);
 mysqli_stmt_execute($stmt);

 $resultData= mysqli_stmt_get_result($stmt); 

 if($row = mysqli_fetch_assoc($resultData))
 {
  return $row;
 }else{
   $result = false;
   return $result;
 }
 mysqli_stmt_close($stmt);

} 

function createUser($conn,$name,$email,$username,$pwd) 
{
 $sql = "INSERT INTO users (usersName, usersEmail, userUid, userPwd) VALUES (?,?,?,?)";
 $stmt = mysqli_stmt_init($conn);
 if(!mysqli_stmt_prepare($stmt,$sql)){
   //header("location: ../signup.php?error=stmtfailed");
   var_dump($stmt);
   exit();
 }

 $hashedPwd = password_hash($pwd, PASSWORD_DEFAULT);
 mysqli_stmt_bind_param($stmt,"ssss", $name, $email, $username, $hashedPwd);
 mysqli_stmt_execute($stmt); 
 mysqli_stmt_close($stmt);
  header("location: ../signup.php?error=none");
  exit();

} 

function emptyImputLogin ($username, $pwd){

  $result = "";
  if(empty($username)||empty($pwd)) {
    $result = true;
  }else {
    $result = false;
  }
  return $result;
}

function loginUser($conn,$username,$pwd){
  $uidExist = uidExist($conn, $username, $username);

  if ($uidExist === false){
    header("location: ../login.php?error=wronglogin");
    exit();
  }
  $pwdHashed = $uidExist["userPwd"];
  $checkPwd = password_verify($pwd, $pwdHashed);
  if($checkPwd === false){
    header("location : ../login.php?error=wronglogin");
    exit();
  }
  else if ($checkPwd === true){
    session_start();
    $_SESSION["userid"] = $uidExist["usersid"];
    $_SESSION["useruid"] = $uidExist["userUid"];
    header("location : ../index.php");
    exit();
  }
}