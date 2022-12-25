<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- CSRF Token -->
  <meta name="csrf-token" content="{{ csrf_token() }}">

  <!-- Scripts -->
  <script src="{{ asset('js/app.js') }}" defer></script>

  <!-- Fonts -->
  <link rel="dns-prefetch" href="//fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

  <!-- Styles -->
  <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>

<body>
  <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
  <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
  <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>



  <!doctype html>

  <body>


    <header>

      <p class="my">マイページ</p>
      <a href="{{ route('top') }}">
        <button type='button' class=top>TOP</button>
      </a>

      <div class=tophead>




      </div>





      <!-- 2行目 -->
      <div class="head">

        <a href="{{ route('menu') }}">
          <butoon type='button' class="btn btn--orange">おすすめメニュー</button>
        </a>
        <a href="{{ route('record.create') }}">
          <butoon type='button' class="btn btn--orange">トレーニングの登録</button>
        </a>
        <a href="{{ route('prof') }}">
          <butoon type='button' class="btn btn--orange">プロフィール</button>
        </a>



      </div>



    </header>










    <div class="container">
      <div class="row">
        <h1>トレーニング履歴</h1>
        <div class="col-md-8 log">

          <div class=log>
            <div class="card-body">
              <div class="card-body">
                <table class='table'>

                  @foreach($menus as $menu)

                  <tr>



                    <th scope='col'>{{ $menu->date }}</th>
                    <th scope='col'>{{ $menu->title }}</th>


                    <th scope='col'>
                      <a href="{{ route('record.show', $menu->id) }}">詳細</a>
                    </th>




                  </tr>
                  @endforeach

                </table>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>


    <div class="container">
      <div class="row">



        <div class="container">
          <table class="table">
            <thead>
              <tr>
                <div class="taijyu">
                  <h1>体重推移</h1>
                </div>
              </tr>
            </thead>
            <tbody>
              <tr scope='col'>
                @foreach($log_list as $log)

                <td>{{ $log->date }}</td>
                @endforeach
              </tr>
              <tr scope='col'>

                @foreach($log_list as $key => $log)
                @if ($key == 0)
                <td>{{ $log->body_weight }}</td>
                @else
                @if($log_list[$key - 1]->body_weight > $log->body_weight)
                <td class="dec">{{ $log->body_weight }}</td>
                @else
                <td class="inc">{{ $log->body_weight }}</td>
                @endif
                @endif
                @endforeach
              </tr>
            </tbody>
          </table>
        </div>








      </div>
    </div>
    </div>
  </body>

  <style>
    .inc {
      color: red;
    }

    .dec {
      color: blue;
    }

    body {
      /* background-image:url(https://img.freepik.com/free-photo/cast-iron-dumbbell-weights_1048-11523.jpg?w=2000&t=st=1671850564~exp=1671851164~hmac=db768c2ecb490d92ba64deca64934a9d0ec3d55ecedd58eccb11cb67b925f03a); */
      background-color: #D7EEFF;
    }

    .heads {
      display: flex;
      align-items: center;
    }

    .logo {
      margin-left: auto;
      font-size: 30px;
    }

    .top {
      display: inline-block;
      border-radius: 50%;
      /* 角丸       */
      font-size: 15pt;
      /* 文字サイズ */
      text-align: center;
      /* 文字位置   */
      cursor: pointer;
      /* カーソル   */
      padding: 23px 37px;
      /* 余白       */
      background: #000066;
      /* 背景色     */
      color: #ffffff;
      /* 文字色     */
      line-height: 1em;
      /* 1行の高さ  */
      transition: .3s;
      /* なめらか変化 */
      box-shadow: 6px 6px 3px #666666;
      /* 影の設定 */
      border: 2px solid #000066;
      /* 枠の指定 */
      margin-left: 1200px;
    }

    .head {
      max-width: 90%;
      margin-left: 5%;
      display: flex;
      justify-content: space-between;
      margin-top: 30px;
      margin-bottom: 20px;
    }

    .log {
      overflow: auto;
      width: 70%;
      height: 300px;
    }

    .my {
      font-size: 30px;
      width: 500px !important;
    }

    .h3 {
      width: 100px;
    }

    .log {

      width: 100%;

    }

    .btn--orange,
    a.btn--orange {
      color: #fff;
      background-color: #eb6100;
    }

    .btn--orange:hover,
    a.btn--orange:hover {
      color: #fff;
      background: #f56500;
    }

    body {
      padding-top: 20px;
      margin-left: 2.5%;
      max-width: 95%
    }

    .table {
      text-align: center;
    }

    .taijyu {
      text-align: center;
    }

    .th {
      width: 60px;
    }
  </style>