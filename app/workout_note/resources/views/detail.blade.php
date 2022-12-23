
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
                        <a href="{{ route('record.index') }}">
      <button type='button' class=top>TOP</button>
      </a>
                       
                        <div class="card-body">
                        
                                <table class='table'>
                                    
                              
                                <thead>
                            
                                        <tr>
                                            <th scope='col'>日付</th>
                                            <th scope='col'>種目</th>
                                            <th scope='col'>weight</th>
                                            <th scope='col'>rep</th>
                                            <th scope='col'>set</th>
                                            <th scope='col'></th>
                                            <th scope='col'></th>
                                        </tr>
                                    </thead>
                                    @foreach($menus  as $menu)
                                    <tbody>
                                      
                                        <tr>
                                                  
                                            <th scope='col'>{{ $menu->date }}</th>
                                            <th scope='col'>{{ $menu->menu_id }}</th>
                                            <th scope='col'>{{ $menu->weight }}</th>
                                            <th scope='col'>{{ $menu->rep }}</th>
                                            <th scope='col'>{{ $menu->set }}</th>
                                            <th> 
                         <form action="{{ route('record.destroy' ,['record' => $menu->id ])}}" method="post">
                            @csrf
                            @method('DELETE')
                        <a href="{{ route('record.destroy' , $menu->record_id) }}" onclick="return confirm('削除してよろしいですか？')">
                        @if((Auth::user()->id) == ($menu->user_id))
                        <button class='btn btn-primary w-150 mt-3'>削除</button>
                        @endif
                        </a>
                        </form>
</th>
<th>
<a href="{{ route('record.edit' , $menu->id) }}">
                        @if((Auth::user()->id) == ($menu->user_id))
                            <button class='btn btn-primary w-150 mt-3'>編集</button>
                        @endif
                        </a>
</th>
 
                                        </tr>
                                        
                                       
                                    </tbody>
                                    @endforeach

                                </table>

                              
                               
                     
                        
                        </div>
                      
                    </div>

</body>
                

<div class="col-md-8">
      <h1>コメント</h1>
      <form action="{{ route('commentadd' ,['id' => $menu->id ])}}" method="post">
      @csrf
      <div class="form-group">
      
      <textarea class='form-control' name='comment'></textarea>
		
	

	<div class="form-group">
		<button type="submit" class="btn btn-primary">投稿する</button>
	</div>
</form>




</div>



<div class="container">

        <table class="table table-striped">
          <thead class="thead-dark">
            <tr><th>ユーザ名</th><th>投稿日</th></th><th>内容</th><th colspan="1"></th></tr>
          </thead>
          <tbody>
          @foreach($comments  as $comment)
              
          <td> {{ $comment->name }} </td>
          <td> {{ $comment->created_at }} </td>

          <td> {{ $comment->comment }} </td><br>
          
          <td><div class='d-flex justify-content-center ' >
                        <a href="{{ route('commentdelete' , $comment->id) }}" onclick="return confirm('削除してよろしいですか？')">
                        @if((Auth::user()->id) == ($comment->user_id))
                        <button class='btn btn-primary w-150 mt-3'>削除</button>
                        @endif
                        </a></td>
    
              
                
                
       
             
          </tbody>
          @endforeach
        </table>
     
  </div>

</div>








                    