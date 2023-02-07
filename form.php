<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <style><?php include 'C:\xampp\htdocs\Kathford Learning\form.css'; ?></style>
    
    <title>Form Validator</title>
  </head>
  <body>
    
    <div class="container">
      
      <form id="form" class="form" action="insert.php" method="post">
        <header><div class="logo">
            <a href="https://kathford.edu.np">
                <img src="https://kathford.edu.np/wp-content/uploads/2019/05/kath-log.svg" alt="kath-log">
            </a>
        </div></header>
        <div class="form-control">
          <label for="username">Username</label>
          <input type="text" name="username" id="Enter username" />
          <small>Error message</small>
        </div>
        <div class="form-control">
          <label for="email">Email</label>
          <input type="text" name="email" id="Enter email" />
          <small>Error message</small>
        </div>
        <div class="form-control">
          <label for="password">Password</label>
          <input type="password" name="password" id="Enter password" />
          <small>Error message</small>
        </div>
        <div class="form-control">
          <label for="password2">Confirm Password</label>
          <input
            type="password"  name="password2" id="Enter password again"
          />
          <small>Error message</small>
        </div>
        <div class="radio-control">
            <label for="gender">gender</label>
            <input type="radio" id="male" name="gender" value="male">
            <label for="male"> Male</label>
            <input type="radio" id="female" name="gender" value="Female">
            <label for="Female"> female</label>
            <input type="radio" id="gender" name="gender" value="others">
            <label for="others">others</label>
        </div>
        <input type="submit" value="submit">
        
</input>
      </form>
    </div>

    
  </body>
