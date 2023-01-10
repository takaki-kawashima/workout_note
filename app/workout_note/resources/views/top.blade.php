<!doctype html>

<body>
  <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
  <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
  <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>

  <header>

    <div class=tophead>
      @if((Auth::user()->user_flg) == ($flgs))
      <a href="{{ route('mypage') }}">
        <button type='button' class=top>マイページ</button>
      </a>
      <a href="{{ route('userlist') }}">
        @endif
        @if((Auth::user()->user_flg) == ($flg))
        <a href="{{ route('userlist') }}">
          <button type='button' class=top>ユーザリスト</button>
          @endif
        </a>
        <h3 class=logo>workout log</h3>
        <a href="/logout">
          <button type='button' class=top>ログアウト</button>
        </a>
    </div>
    @if((Auth::user()->user_flg) == ($flg))
    <a href="{{ route('commentall') }}">
      <button type='button' class=top>コメントリスト</button>
      @endif
    </a>
  </header>
  <div class="container">
    <div class="row">
      <div class="col-md-8">
        <div class=log>
          <div class="card-body">
            <div class="card-body">
              <table class='table'>
                @foreach($menus as $menu)
                <tr>
                  <th scope='col'>
                  </th>
                  <th scope='col'>{{ $menu->date }}</th>
                  <th scope='col'>{{ $menu->name }}</th>
                  <th scope='col'>{{ $menu->purpose}}</th>
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
</body>

<style>
  header {
    padding bottom: 30px;
  }

  .tophead {
    display: flex;
    align-items: center;
    padding bottom: 30px;
    margin top: 50px;
  }

  .logo {
    margin-left: auto;
    margin-right: auto;
    font-family: 'Amatic SC', cursive;
    font-size: 50px;
  }

  .top {
    width: 250px;
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
  }

  .log {
    margin-left: 100px;
    width: 1000px;
    padding-top: 30px;

  }

  body {
    padding-top: 20px;
    margin-left: 2.5%;
    max-width: 95%
  }

  body {
    /* background-image:url(https://img.freepik.com/free-photo/cast-iron-dumbbell-weights_1048-11523.jpg?w=2000&t=st=1671850564~exp=1671851164~hmac=db768c2ecb490d92ba64deca64934a9d0ec3d55ecedd58eccb11cb67b925f03a); */
    background-color: #D7EEFF;
  }
</style>