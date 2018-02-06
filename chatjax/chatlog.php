<?php
session_start();
// Connect to a database
$conn = mysqli_connect('localhost', 'root', '', 'log');

// Check for POST variable
if(isset($_POST['message'])){
    $name = mysqli_real_escape_string($conn, $_POST['message']);
    $user_id = mysqli_real_escape_string($conn, $_SESSION['userid']);
    $chatid = mysqli_real_escape_string($conn, $_POST['chatid']);

    $query = "INSERT INTO log(chat_id,chat_user,message,time) VALUES($chatid,$user_id,'$name',now())";
  
    if(mysqli_query($conn, $query)){
      echo '<script>   console.log("Message Added...");</script>';
    } else {
      echo '<script>   console.log("insert failed");</script>';
    }
  }

  
if(isset($_POST['load'])){
    $id = mysqli_real_escape_string($conn,$_POST['load']);
    $query = "SELECT U.username, L.message, L.time FROM log.log L inner join db_users.tb_users U on L.chat_user = U.user_id WHERE L.chat_id=$id";
    $result=mysqli_query($conn, $query);
    $users = mysqli_fetch_all($result, MYSQLI_ASSOC);
    echo json_encode($users);
}


if(isset($_POST['checkchatid'])){
  $name = mysqli_escape_string($conn,$_POST['checkchatid']);
  $user_id = mysqli_real_escape_string($conn, $_SESSION['userid']);
  
  //check if chatroom already exists  
  $query = "SELECT chat.chat_id, chat.chat_user AS chat_user1, chat2.chat_user AS chat_user2
            FROM chat_users as chat, chat_users as chat2
            WHERE chat.chat_id = chat2.chat_id
            AND chat.chat_user != chat2.chat_user
            AND chat.chat_user = '$user_id'
            AND chat2.chat_user = '$name'
            GROUP BY chat_id";

  $result=mysqli_query($conn, $query);
  
  //if it exists
  if(mysqli_num_rows($result)>0){
    $table = mysqli_fetch_all($result, MYSQLI_ASSOC);
  }
  //if it does not exist
  else{
    //create a new chat id
    $query1 = "INSERT INTO chat_id(chat_id) values (null)";
    mysqli_query($conn, $query1);
    $last_id = $conn->insert_id;
    //insert users of created chat id
    $query1 = "INSERT INTO chat_users(chat_id,chat_user) values ($last_id,$name),($last_id,$user_id)";
    if(mysqli_query($conn, $query1)){
      echo "inserted target and user";
    }
   
    //return chat id
    $result=mysqli_query($conn, $query);
    $table = mysqli_fetch_all($result, MYSQLI_ASSOC);
  }
  echo json_encode($table);
}