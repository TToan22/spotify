<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Đăng nhập</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="css/login.css">
</head>
<body>
  <header>
    <img src = "https://storage.googleapis.com/pr-newsroom-wp/1/2018/11/Spotify_Logo_RGB_Black.png"/>
  </header>
    <hr>
    
    <div class = "container">
      <h2 class = "tit1">Để tiếp tục, hãy đăng nhập vào Spotify</h2>
      <button  class = "btnA" id = "facebook" >TIẾP TỤC VỚI FACEBOOK</button>
      <button class = "btnA" id = "apple">TIẾP TỤC VỚI APPLE</button>
      <button class = "btnA" id = "google">TIẾP TỤC BẰNG GOOGLE</button>
      <button class = "btnA" id = "telephone">TIẾP TỤC VỚI SỐ ĐIỆN THOẠI</button>
      
      <br>
    <hr/>
    <br>
    <form>
      <div class="form-group">
        <label for="exampleInputEmail1">Địa chỉ email hoặc tên người dùng</label>
        <input type="email" class="form-control" id="exampleInputEmail1" name="txtEmail"  placeholder="Địa chỉ email hoặc tên người dùng">
      </div>
      <div class="form-group">
        <label for="exampleInputPassword1">Mật khẩu</label>
        <input type="password" class="form-control" id="exampleInputPassword1" name="txtPass" placeholder="Mật khẩu">
      </div>
      <?php
                    if(isset($_GET['error'])){
                        echo "<h5 style='color:red'> {$_GET['error']} </h5>";
                    }

                ?>
      <h4 class = "Quenmatkhau">Quên mật khẩu của bạn?</h4>
      <div class="form-group form-check">
        <input type="checkbox" class="form-check-input" id="exampleCheck1">
        <label class="form-check-label" for="exampleCheck1">Hãy nhớ tôi</label>
      </div>
      <button type="submit" class="btn btn-primary" name="btnSignIn" id="submit">Đăng nhập</button>
    </form>

    </div>
    
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
crossorigin="anonymous"></script>
</html>