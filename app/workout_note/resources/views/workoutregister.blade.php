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
  <div class=head>
    <a href="{{ route('mypage') }}">
      <button type='button' class='top'>マイページ</button>
    </a>
    <h1 class=hyoudai>登録画面</h1>
  </div>
  <div class='panel-body'>
    @if($errors->any())
    <div class='alert alert-danger'>
      <ul>
        @foreach($errors->all() as $message)
        <li>{{ $message }}</li>
        @endforeach
      </ul>
    </div>
    @endif
  </div>
  <a href="{{ route('add') }}">
    <div class='row justify-content-center'>
      <button type='button' class='btn btn-primary w-25 mt-3'>種目の追加</button>
    </div>
  </a>

  <form action="{{ route('record.store')}}" method="post">
    @csrf
    <div class="row">
      <div class="col">
        <h3>タイトル</h3>
      </div>
      <div class="col">
        <input type="text" class="form-control" placeholder="" aria-label="" name="title" value="{{ old('title') }}">
      </div>

      <div class="col">
        <h3>体重</h3>
      </div>
      <div class="col">
        <input type="text" class="form-control" placeholder="" aria-label="" name="body_weight" value="{{ old('body_weight') }}">
      </div>
    </div>
    <div class="koumoku">
      <div class="row">
        <div class="col menu">
          <h4>種目</h4>
        </div>
        <div class="col weight">
          <h4>Weight</h4>
        </div>
        <div class="col rep">
          <h4>Rep</h4>
        </div>
        <div class="col set">
          <h4>Set</h4>
        </div>
      </div>
    </div>
    <div class="items">
      <div class="item_list">
        <div class="row item">
          <div class="col">
            <select type="text" class="form-control input" placeholder="" aria-label="" name="records[0][menu_id]">
              <option value=''>種目</option>
              @foreach($menus as $menu)
              <option value="{{ $menu->menu}}">{{ $menu->menu }} </option>
              @endforeach
            </select>
          </div>
          <div class="col">
            <input type="text" class="form-control input" placeholder="" aria-label="" name="records[0][weight]" value="{{ old('records[0][weight]') }}" />
          </div>
          <div class="col">
            <input type="text" class="form-control input" placeholder="" aria-label="" name="records[0][rep]" value="{{ old('records[0][rep]') }}" />
          </div>
          <div class="col">
            <input type="text" class="form-control input" placeholder="" aria-label="" name="records[0][set]" value="{{ old('records[0][set]') }}" />
          </div>
          <div class="zougen">
            <div class="col">
              <input type="button" value="＋" class="add btn btn-secondary mr-2" />
            </div>
            <div class="col">
              <input type="button" value="－" class="del btn btn-secondary ml-2" />
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class='row justify-content-center'>
      <button type='submit' class='btn btn-primary w-25 mt-3'>追加</button>
    </div>
  </form>

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script type="text/javascript">
    $(function() {
      function numbering($list) {
        $list.find('.item').each(function(index) {
          $(this).find('.input').each(function() {
            var replaceText = $(this).attr('name').replace(/\[\d+\]/, '[' + index + ']');
            $(this).attr('name', replaceText)
          })
        })
      }

      var $items = $('.items');

      $items.on('click', '.add', function() {
        console.log(1);
        var $list = $('.item_list');
        var $cloneItem = $list.find('.item:last').clone();
        $list.append($cloneItem);
        numbering($list);
      });

      $items.on('click', '.del', function() {
        var $list = $(this).closest('.item_list');
        $(this).closest('.item').remove();
        numbering($list);
      });
    });
  </script>
</body>

</html>

<style>
  .row {
    width: 50%;
    margin-left: 360px;
  }

  .item {
    width: 70%;
    padding-top: 30px;
    margin: auto;
  }

  .head {
    display: flex;
  }

  .hyoudai {
    text-align: center;
    display: inline-block;
    font-size: 30px;
    margin-left: 465px;
  }

  button {
    text-align: center;
    margin-bottom: 20px;
  }

  body {
    padding-top: 20px;
    margin-left: 2.5%;
    max-width: 95%
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
  }

  .zougen {
    display: flex;
    width: 40px;

  }

  .koumoku {
    padding-top: 25px;

  }

  .h4 {
    margin-left: 50px;
  }
</style>