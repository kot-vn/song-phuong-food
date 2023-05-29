<style type="text/css">
   *{
     margin: 0;
     padding: 0;
     box-sizing: border-box;
   }
   html,body{
     display: grid;
     height: 100%;
     width: 100%;
     place-items: center;
      background: linear-gradient(-135deg, #c850c0, #4158d0); 
   }
   ::selection{
     background: #4158d0;
     color: #fff;
   }
   .wrapper{
     width: 380px;
     background: #fff;
     border-radius: 15px;
     box-shadow: 0px 15px 20px rgba(0,0,0,0.1);
   }
   .wrapper .title{
     font-size: 35px;
     font-weight: 600;
     text-align: center;
     line-height: 100px;
     color: #fff;
     user-select: none;
     border-radius: 15px 15px 0 0;
     background: linear-gradient(-135deg, #c850c0, #4158d0);
   }
   form{
      margin-bottom: 30px;
   }
   .wrapper form{
     padding: 10px 30px 50px 30px;
   }
   .wrapper form .field{
     height: 50px;
     width: 100%;
     margin-top: 20px;
     position: relative;
   }
   .wrapper form .field input{
     height: 100%;
     width: 100%;
     outline: none;
     font-size: 17px;
     padding-left: 20px;
     border: 1px solid lightgrey;
     border-radius: 25px;
     transition: all 0.3s ease;
   }
   .wrapper form .field input:focus,
   form .field input:valid{
     border-color: #4158d0;
   }
   .wrapper form .field label{
     position: absolute;
     top: 50%;
     left: 20px;
     color: #999999;
     font-weight: 400;
     font-size: 17px;
     pointer-events: none;
     transform: translateY(-50%);
     transition: all 0.3s ease;
   }
   form .field input:focus ~ label,
   form .field input:valid ~ label{
     top: 0%;
     font-size: 16px;
     color: #4158d0;
     background: #fff;
     transform: translateY(-50%);
   }
   form .content{
     display: flex;
     width: 100%;
     height: 50px;
     font-size: 16px;
     align-items: center;
     justify-content: space-around;
   }
   form .content .checkbox{
     display: flex;
     align-items: center;
     justify-content: center;
   }
   form .content input{
     width: 15px;
     height: 15px;
     background: red;
   }
   form .content label{
     color: #262626;
     user-select: none;
     padding-left: 5px;
   }
   form .content .pass-link{
     color: "";
   }
   form .field input[type="submit"]{
     color: #fff;
     border: none;
     padding-left: 0;
     margin-top: -10px;
     font-size: 20px;
     font-weight: 500;
     cursor: pointer;
     background: linear-gradient(-135deg, #c850c0, #4158d0);
     transition: all 0.3s ease;
   }
   .backbtn{
      color: #fff;
     border: none;
     padding-left: 0 !important;
     margin-top: 10px;
     font-size: 20px !important;
     font-weight: 500;
     cursor: pointer;
     background: linear-gradient(-135deg, #c850c0, #4158d0);
     transition: all 0.3s ease;
   }
   .backbtn:active{
     transform: scale(0.95); 
   }
   form .field input[type="submit"]:active{
     transform: scale(0.95);
   }
   form .signup-link{
     color: #262626;
     margin-top: 20px;
     text-align: center;
   }
   form .pass-link a,
   form .signup-link a{
     color: #4158d0;
     text-decoration: none;
   }
   form .pass-link a:hover,
   form .signup-link a:hover{
     text-decoration: underline;
   }
   .s1{
      color: red;
      font-weight: bold;
      text-align: center;
      margin-bottom: 10px;
   }
</style>
<div class="wrapper">
   <div class="title">
      Đăng nhập
   </div>
   <?php
      if(isset($_POST['username'])){
         $username=$_POST['username'];
         $password=md5($_POST['password']);
         $query="select*from account where username='$username' and password='$password'";
         $result=$connect->query($query);
         if(mysqli_num_rows($result)==0){
            $alert="Sai thông tin đăng nhập!";
         } else {
            $result = mysqli_fetch_array($result);
            $_SESSION['admin']=$username;
            header("location: .");
         }
      }
   ?>
   <form method="POST" autocomplete="off">
      <div class="field">
         <input type="text" name="username" required>
         <label>Tên đăng nhập</label>
      </div>
      <div class="field" style="margin-bottom: 20px;">
         <input type="password" name="password" autocomplete="new-password" required>
         <label>Mật khẩu</label>
      </div>
      <section class="s1">
         <?=isset($alert)?$alert:""?>
      </section>
      <div class="field">
         <input type="submit" value="Đăng nhập">
         <a href="../index.php">
            <input type="button" value="Trở lại trang chủ" class="backbtn">
         </a>
      </div>
   </form>
</div>