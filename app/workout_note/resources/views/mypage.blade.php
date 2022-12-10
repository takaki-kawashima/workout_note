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

    <div class=tophead>
    
      
      <h3 class=my>マイページ</h3>
      <a href="{{ route('home') }}">
      <button type='button' class=top>TOP</button>
      </a>
      </div>
    



 
        <!-- 2行目 -->
        <div class="head">
          
            <a href="{{ route('menu') }}">
            <butoon type='button' class='btn btn-secondary'>おすすめメニュー</button>
            </a>
            <a href="{{ route('workout') }}">
            <butoon type='button' class='btn btn-secondary'>トレーニングの登録</button>
            </a>
            <a href="{{ route('prof') }}">
            <butoon type='button' class='btn btn-secondary'>プロフィール</button>
            </a>
           
         
            
        </div>

 

        </header>










<div class="container">
  <div class="row">
   
    <div class="col-md-8">
      <h1>トレーニング履歴</h1>
      <div class=log>
      <p>Sample TextSample TextSample TextSample TextSample TextSample TextSample TextSample TextSample TextSample TextSample TextSample TextSample TextSample TextSample TextSample TextSample TextSample TextSample TextSample TextSample TextSample TextSample TextSample TextSample TextSample TextSample Text</p>
      </div>
    </div>
  </div>
</div>
 

<div class="container">
  <div class="row">
   
    <div class="col-md-8">
      <h1>体重推移</h1>
      <p>Sample TextSample TextSample TextSample TextSample TextSample TextSample TextSample TextSample TextSample TextSample TextSample TextSample TextSample TextSample TextSample TextSample TextSample TextSample TextSample TextSample TextSample TextSample TextSample TextSample TextSample TextSample Text</p>
    </div>
  </div>
</div>

<style>
.tophead{display: flex;
  align-items: center;
}
.logo{margin-left: auto;
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
  border        : 2px solid #000066;    /* 枠の指定 */
  margin-left: 1200px;}

.head{display: flex;
    justify-content: space-between;
margin-top: 30px;}
.log{
  overflow:auto;
  width: 600px;height: 300px;
}


</style>
</body>