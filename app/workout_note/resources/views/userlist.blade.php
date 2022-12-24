<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>


<div class=head>
    <a href="{{ route('top') }}">
        <button type='button' class=top>TOP</button>
    </a>

    <h1>ユーザリスト</h1>

    <a href="{{ route('commentall') }}">
        <button type='button' class='top'>コメント一覧</button>
    </a>

</div>
<table class="table table-striped">
    <thead>
        <tr>
            <th>名前</th>
            <th>フリガナ</th>
            <th>メールアドレス</th>
            <th>目的</th>
            <th></th>
            <th></th>
        </tr>
    </thead>
    <tbody>
        @foreach ($users as $user)
        <tr>

            <td class="border px-4 py-2"> {{ $user->name }}</td>




            <td class="border px-4 ">{{ $user->rubi }}</td>
            <td class="border px-4  ">{{ $user->email }}</td>
            <td class="border px-4 ">{{ $user->purpose }}</td>
            <td>
                <div class='d-flex justify-content-center '>
                    <a href="{{ route('commentlist',$user->id) }}">
                        <button class='btn btn-primary w-150 mt-3'>詳細</button>
                    </a>
            </td>
            <td>
                <div class='d-flex justify-content-center '>
                    <a href="{{ route('userdelete' , $user->id) }}" onclick="return confirm('削除してよろしいですか？')">
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

    .head {
        display: flex;
        align-items: center;
        padding bottom: 30px;
        margin top: 50px;
    }
</style>