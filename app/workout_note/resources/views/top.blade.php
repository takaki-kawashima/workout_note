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
  
    <a href="{{ route('mypage') }}">
    <button type='button' class=top>マイページ</button>
            </a>
      
      <h3 class=logo>workout log</h3>

      <a href="/logout">
      <button type='button' class=top>ログアウト</button>
           
            </a>

            


      
      </div>
    
     



</header>

<div class="container">
  <div class="row">
   
    <div class="col-md-8">
      <h1>トレーニング履歴</h1>
      <div class=log>

                        <div class="card-body">
                            <div class="card-body">
                                <table class='table'>

      @foreach($menus  as $menu)
                                            <tr>
                                          
                                                   
                                            <th scope='col'>
                                                 
                                                    </th>
                                                <th scope='col'>{{ $menu->name }}</th>
                                                <th scope='col'>{{ $menu->date }}</th>                                              
                                                <th scope='col'>{{ $menu->id }}</th>
                                                
                                                <th scope='col'>
                                                <a href="{{ route('detail', $menu->id) }}">詳細</a>
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
header{padding bottom: 30px;
}
.tophead{display: flex;
  align-items: center;
  padding bottom: 30px;
}
.logo{margin-left: auto;
  margin-right: auto;
  font-size:30px;}
.top{  display       : inline-block;
  border-radius : 50%;          /* 角丸       */
  font-size     : 15pt;        /* 文字サイズ */
  text-align    : center;      /* 文字位置   */
  cursor        : pointer;     /* カーソル   */
  padding       : 23px 37px;   /* 余白       */
  background    : #000066;     /* 背景色     */
  color         : #ffffff;     /* 文字色     */
  line-height   : 1em;         /* 1行の高さ  */
  transition    : .3s;         /* なめらか変化 */
  box-shadow    : 6px 6px 3px #666666;  /* 影の設定 */
  border        : 2px solid #000066;    /* 枠の指定 */}
  



</style>
   
 





