<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>ทดสอบส่งข้อมูล</title>
</head>

<style>
 input[type=text], select {
  width: 50%;
  padding: 12px 10px  ;
  margin: 10px 0;
  display: inline-block;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
 

}

input[type=submit] {
  width: 50%;
  background-color: #4CAF50;
  color: white;
  color: white;
  padding: 14px 0;
  margin: 5px 0;
  border: none;
  border-radius: 4px;

}

input[type=submit]:hover {
  background-color: #45a049;
}


</style>

<body>
    <h1>ทดสอบส่งข้อมูล</h1>
    
    <form action="/action_page.php">
    <div class="from-group">
        <label for= "name">
            Name:
        </label>
        <input type="text" id="name" name="name" value="" 
         placeholder="Name.." class="from-control"> <br><br>
    </div>

    <div class="from-group">
        <label for= "surname">
            Surname:
        </label>
        <input type="text" id="surname" name="surname" value=""
        placeholder="Surname.." class="from-group"><br><br>
    </div>

    <div class="from-group">
        <label for= "email">
            Email:
        </label>
        <input type="text" id="email" name="email" value=""
        placeholder="Email.." class="from-group"><br><br>
    </div>

    <div class="submit">
    <input type="submit" value="Submit">
    </div>




</body>
</html> 