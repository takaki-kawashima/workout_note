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
             <button type='button' class=''>マイページ</button>
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

 </div>
 <style>
     img {
  border-radius:50%;
}
 </style>