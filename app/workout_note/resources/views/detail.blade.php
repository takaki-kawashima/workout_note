
<body>
<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>



<!doctype html>


      
                    <div class="card">
                        <div class="card-header">
                            <div class='text-center'>詳細</div>
                        </div>
                        <div class="card-body">
                           
                                <table class='table'>
                                    
                                @foreach($menus  as $menu)
                                <thead>
                                        <tr>
                                            <th scope='col'>日付</th>
                                            <th scope='col'>種目</th>
                                            <th scope='col'>weight</th>
                                            <th scope='col'>rep</th>
                                            <th scope='col'>set</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                      
                                        <tr>
                                                  
                                            <th scope='col'>{{ $menu->date }}</th>
                                            <th scope='col'>{{ $menu->menu }}</th>
                                            <th scope='col'>{{ $menu->weight }}</th>
                                            <th scope='col'>{{ $menu->rep }}</th>
                                            <th scope='col'>{{ $menu->set }}</th>
                                                
                                        </tr>
                                       
                                    </tbody>
                                @endforeach

                                </table>


                               

                         <div class='d-flex justify-content-center mt-3' >
                        <a href="{{ route('delete' , $menu->id) }}" onclick="return confirm('削除してよろしいですか？')">
                        <button class='btn btn-secondary'>削除</button>
                        </a>

                        <a href="{{ route('editreco' , $menu->id) }}">
                            <button class='btn btn-secondary'>編集</button>
                        </a>
                        </div>
                    </div>

                    