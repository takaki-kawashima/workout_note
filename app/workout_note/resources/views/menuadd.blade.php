
<body>
<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>



<!doctype html>

<a href="{{ route('mypage') }}">
    <button type='button' class=top>マイページ</button>
            </a>



      <main class="py-4">
       
            <div class="card">
                <div class="card-header">


                            <div class="card-body">
                    <div class="card-body">
              <form action="{{ route('add')}}" method="post">
                            @csrf
                           
                        
                           
                               
                            <label for='name' class='mt-2'>トレーニング種目の追加</label>
                                <textarea class='form-control' name='menu'></textarea>
                            <div class='row justify-content-center'>
                                <button type='submit' class='btn btn-primary w-25 mt-3'>追加</button>
                            </div> 
                        </form>
                    </div>
                </div>

                </div>
            </div>
        </div>
    </main>




<style>
textarea.form-control{
    width: 400px;
    text-align: center;
    margin: auto;}
.mt-2{
    text-align: center;
    margin-left: 500px;
    font-size:15px
}
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