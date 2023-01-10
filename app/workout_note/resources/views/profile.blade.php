 <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
 <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
 <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
 <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
 <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
 <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
 <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>

 <!doctype html>
 <header>
     <div class=tophead>
         <a href="{{ route('mypage') }}">
             <button type='button' class='top'>マイページ</button>
         </a>
     </div>
 </header>
 <div class="container">
     <div class="row justify-content-center">
         <div class="col-md-8">
             <div class="card">
                 <div class="card-header">{{ __('プロフィール') }}</div>
                 <div class="card-body">

                     <body>
                         @foreach($prof as $profile)
                         <img src="{{ asset('storage/img/' . $profile->path) }}" width="150" height="150">
                         @endforeach
                         <form action="{{ route('item.store') }}" method="POST" enctype="multipart/form-data">
                             @csrf
                             <input type="file" name="img_path">
                             <input type="submit" value="アップロード">
                         </form>
                         <table class="table table-striped">
                             @foreach($prof as $profile)
                             <tr>
                                 <th>
                                     <h3>名前</h3>
                                 </th>
                             </tr>
                             <tr>
                                 <th>
                                     {{ $profile->name }}
                                 </th>
                             </tr>
                             <tr>
                                 <th>
                                     <br>
                                     <h3>フリガナ</h3>
                                 </th>
                             </tr>
                             <tr>
                                 <th>
                                     {{ $profile->rubi }}
                                 </th>
                             </tr>
                             <tr>
                                 <th>
                                     <br>
                                     <h3>アドレス</h3>
                                 </th>
                             </tr>
                             <tr>
                                 <th>
                                     {{ $profile->email }}
                                 </th>
                             </tr>
                             <tr>
                                 <th>
                                     <br>
                                     <h3>目的</h3>
                                 </th>
                             </tr>
                             <tr>
                                 <th>
                                     {{ $profile->purpose }}
                                 </th>
                             </tr>
                             @endforeach
                         </table>
                         <br>
                         <a href="{{ route('editprofile') }}">
                             <button type='button' class=''>編集</button>
                         </a>
                 </div>
             </div>
         </div>
     </div>
 </div>
 
 <style>
     img {
         border-radius: 15%;
margin-left: 350px;

  content: '';
  top: 0;
  bottom: 0;
  left: 0;
  right: 0;
  box-shadow: inset 0 0 15px 15px gray;
     }

     .top {
         width: 220px;
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
     body {
      /* background-image:url(https://img.freepik.com/free-photo/cast-iron-dumbbell-weights_1048-11523.jpg?w=2000&t=st=1671850564~exp=1671851164~hmac=db768c2ecb490d92ba64deca64934a9d0ec3d55ecedd58eccb11cb67b925f03a); */
      background-color: #D7EEFF;
    }
 </style>