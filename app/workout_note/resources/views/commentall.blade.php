<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>



<h1>コメントリスト</h1>
<table class="table table-striped">
    <thead>
        <form method="get" action="" class="form-inline">
            <div class="form-group">
                <a href="{{ route('userlist') }}">
                    <button type='button' class=top>ユーザリスト</button>
                </a>
                <input type="text" name="keyword" class="form-control" value="" placeholder="コメント">
            </div>
            <div class="form-group">
                <input type="submit" value="検索" class="btn btn-info" style="margin-left: 15px; color:white;">
            </div>
        </form>

        <tr>
            <th>コメント</th>
            <th></th>
            <th></th>
        </tr>
    </thead>
    <tbody>
        @foreach ($comments as $comment)
        <tr>




            <td class="border px-4 ">{{ $comment->comment }}</td>
            <td>
                <div class='d-flex justify-content-center '>
                    <a href="{{ route('commentdelete' , $comment->id) }}" onclick="return confirm('削除してよろしいですか？')">
                        <button class='btn btn-primary w-150 mt-3'>削除</button>
                    </a>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>

<style>
    .table {
        width: 80%;
        margin-left: 130px;
    }
</style>