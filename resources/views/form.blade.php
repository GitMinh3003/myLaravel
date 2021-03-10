<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
    <title>Phone</title>
    <style>
        .fs-hdmn {
  position: absolute;
  text-align: right;
  top: 0px;
  right: 0px;
}

ul {
  list-style: none;
}

.fs-hdmn >li{
  height: 55px;
  padding: 6px 2px 0px 2px;
  margin-left: 20px;
  text-align: center;
  display: inline-block;
  position: relative;
}

.fs-hdmn>li>a>i {
  color: white;
  font-size: 20px;
  display: block;
}

.fs-hdmn>li span {
  display: block;
  font-size: 12px;
  color: white;
}

.fs-hdmn>li a {
  text-decoration: none;
}

    </style>
<body>
    <div class="bg-danger">
        <div class="container">
            <div class="row">
                <div class="col-sm-2" >
                    <a class="fs-logo" href="#">
                      <img src="{{ asset('logo.png') }}" width="160px" height="50px">
                    </a>
                </div>
                  <div class="col-sm-6">
                      <form action="">
                          <div class="p-2 shadow-sm">
                            <div class="input-group">
                              <input type="search" placeholder="Nhập từ bạn cần tìm?" aria-describedby="button-addon1" class="form-control border-1 bg-light">
                              <div class="input-group-append">
                                <button id="button-addon1" type="submit" class="btn btn-secondary"><i class="fa fa-search"></i></button>
                              </div>
                            </div>
                          </div>
                      </form>
                  </div>
                <div class="col-sm-4 mt-1">
                  <ul class="fs-hdmn">
                      <li>
                        <a href="#"> <i class="fas fa-file-alt"></i> <span>Thông tin hay</span> </a>
                      </li>
                      <li>
                        <a href="#"> <i style="color:white; font-size:20px;" class="fas fa-lightbulb"></i><span>Thu hộ điện, nước</span> </a>
                      </li>
                      <li>
                        <a href="#"> <i class="fas fa-shopping-cart"></i> <span>Giỏ hàng</span> </a>
                      </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
