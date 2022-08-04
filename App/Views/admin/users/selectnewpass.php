
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="/template/admin/fonts/icomoon/style.css">

    <link rel="stylesheet" href="/template/admin/css/owl.carousel.min.css">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="/template/admin/css/bootstrap.min.css">
    
    <!-- Style -->
    <link rel="stylesheet" href="/template/admin/css/style.css">

    <title>ALta Selectnewpass</title>
  </head>
  <body>
  
  <div class="d-lg-flex half">
    <div class="bg order-1 order-md-2" style="background-image: url('/template/admin/images/ForgotPassword.png');"></div>
    <div class="contents order-2 order-md-1">

      <div class="container">
        <div class="row align-items-center justify-content-center">
          <div class="col-md-7">

          <img class="loginpage__container--left-logo" src="/template/admin/images/LogoAlta.png" alt="" style=" width: 200px;
    margin-bottom: 50px;">
             <p style="color: black; font-weight: 50px;">Đặt lại mật khẩu mới</p>

            <form action="/admin/users/selectnewpass/index" method="post">

              <div class="form-group first">
                <label for="username">Mật khẩu</label>
                <input type="password" class="form-control" name="password" placeholder="Nhập mật khẩu mới">
                          
              <div class="form-group last mb-3">
              <label for="username">Nhập lại mật khẩu</label>

              <input type="password" class="form-control" name="password" placeholder="Nhập lại mật khẩu mới">
              </div>
              
              <button type="submit" class="btn btn-block btn-primary" style="background-color: #FF9138; ">Xác nhận</button>

            </form>
          </div>
        </div>
      </div>
    </div>

    
  </div>
    

    <script src="/template/admin/js/jquery-3.3.1.min.js"></script>
    <script src="/template/admin/js/popper.min.js"></script>
    <script src="/template/admin/js/bootstrap.min.js"></script>
    <script src="/template/admin/js/main.js"></script>
  </body>
</html>