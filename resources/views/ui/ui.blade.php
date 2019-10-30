<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>首頁</title>

    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

    <!-- Awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css"
        integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">

    <style>
        .Top {
            /* width: auto; */
            /* height: 200px; */
            height: 50px;
            /* position: relative; */

            /* background-image: url("/img/header.jpg"); */
            /* background-size: cover; */
        }

        .Left {
            /* width: 25%; */
            /* width: 200px; */
            /* height: auto; */
            /* position: relative; */
            /* background-color: yellow; */
            /* display: inline-block; */
        }

        .Right {
            /* width: 100%; */
            /* width: 800px; */
            /* height: auto; */
            /* position: absolute; */
            /* background-color: red; */
            /* background-color: #F0F8FF; */
            /* display: inline-block; */
        }

        .content {}

    </style>
</head>

<body>
    <!--------------------------------------------------------------------------------------Top-------------------------------------------------------------------------------------->
    <div class="Top bg-dark">
        <nav class="navbar">
            <div class="container-fluid">
                <div class="navbar-header">
                    <a href="/ui" class="text-warning"><i class="fas fa-landmark fa-2x text-warning"></i>首頁</a>
                </div>
                <ul class="nav navbar-nav">
                </ul>
                <ul class="nav navbar-nav navbar-right">
                    <a href="/logout" class="text-warning"><i class="fas fa-sign-out-alt fa-2x text-warning"></i>登出</a>
                </ul>
            </div>
        </nav>
    </div>

    <div class="container-fluid">
        <div class="row">
            <!--------------------------------------------------------------------------------------Left-------------------------------------------------------------------------------------->
            <div class="col-3 Left text-nowrap p-0">
                <div class="accordion" id="accordionExample">
                    <div class="card">
                        <div class="card-header" id="headingOne">
                            <h2 class="mb-0">
                                <button class="btn btn-link" type="button" data-toggle="collapse"
                                    data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                    會員管理
                                </button>
                            </h2>
                        </div>

                        <div id="collapseOne" class="collapse" aria-labelledby="headingOne"
                            data-parent="#accordionExample">
                            <div class="card-body">
                                <a class="dropdown-item" href="/memberAdmin">會員列表</a>
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header" id="headingTwo">
                            <h2 class="mb-0">
                                <button class="btn btn-link" type="button" data-toggle="collapse"
                                    data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
                                    訂單管理
                                </button>
                            </h2>
                        </div>

                        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo"
                            data-parent="#accordionExample">
                            <div class="card-body">
                                <a class="dropdown-item" href="/orderGroupAdmin">訂單列表</a>
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header" id="headingThree">
                            <h2 class="mb-0">
                                <button class="btn btn-link collapsed" type="button" data-toggle="collapse"
                                    data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                    賽事管理
                                </button>
                            </h2>
                        </div>
                        <div id="collapseThree" class="collapse" aria-labelledby="headingThree"
                            data-parent="#accordionExample">
                            <div class="card-body">
                                <a class="dropdown-item" href="/eventAdmin">賽事列表</a>
                            </div>
                        </div>
                    </div>

                    <div class="card">
                        <div class="card-header" id="headingFour">
                            <h2 class="mb-0">
                                <button class="btn btn-link collapsed" type="button" data-toggle="collapse"
                                    data-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                    帳號管理
                                </button>
                            </h2>
                        </div>
                        <div id="collapseFour" class="collapse" aria-labelledby="headingFour"
                            data-parent="#accordionExample">
                            <div class="card-body">
                                <a class="dropdown-item" href="/accountAdmin"> 帳號列表</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!--------------------------------------------------------------------------------------right-------------------------------------------------------------------------------------->
            <div class="col-9 Right">
                <div class="pt-3">
                    <div class="alert alert-info text-center">
                        <h5>歡迎&nbsp;&nbsp; {{$userName}} &nbsp;&nbsp;登入管理系統</h5>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
