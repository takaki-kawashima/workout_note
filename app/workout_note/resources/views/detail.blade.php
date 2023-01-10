<head>
    <meta name="csrf-token" content="{{ csrf_token() }}">
</head>

<body>
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous">
    </script>

    <!doctype html>
    <div class="card">

        <div class='text-center'>
            <h2>詳細</h2>
        </div>
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
            @foreach($menus as $menu)
            <tbody>
                <tr>
                    <th scope='col'>{{ $menu->date }}</th>
                    <th scope='col'>{{ $menu->menu_id }}</th>
                    <th scope='col'>{{ $menu->weight }}</th>
                    <th scope='col'>{{ $menu->rep }}</th>
                    <th scope='col'>{{ $menu->set }}</th>
                    <th>
                        <a href="{{ route('record.edit' , $menu->id) }}">
                            @if((Auth::user()->id) == ($menu->user_id))
                            <button class='btn btn-primary w-150 mt-3'>編集</button>
                            @endif
                        </a>
                    </th>
                    <th>
                        <a href="{{ route('delete' , $menu->id) }}" onclick="return confirm('削除してよろしいですか？')">
                            @if((Auth::user()->id) == ($menu->user_id))
                            <button class='btn btn-primary w-150 mt-3'>削除</button>
                            @endif
                        </a>
                    </th>
                </tr>
            </tbody>
            @endforeach
        </table>
    </div>
    <div class="col-md-8">
        <h1>コメント</h1>
        <form action="{{ route('commentadd') }}" method="post">
            @csrf
            <div class="form-group">
                <input type=hidden name='record_id' value="{{$menu->record_id}}" />
                <input type=text class='form-control comment_add' name='comment' value="" />
                <div class="form-group">
                    <input type="button" class="btn btn-primary comment_btn" value="投稿" />
                </div>
        </form>
    </div>
    <div class="container scrolls">
        <table class="table table-striped" id="comment_data">
            <thead class="thead-dark">
                <tr>
                    <th>ユーザ名</th>
                    <th>投稿日</th>
                    <th>内容</th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                @foreach($comments as $comment)
                <td> {{ $comment->name }} </td>
                <td> {{ $comment->created_at }} </td>
                <td> {{ $comment->comment }} </td>
                <td>
                    <div class='d-flex justify-content-center '>
                        <a href="{{ route('commentdelete' , $comment->id) }}" onclick="return confirm('削除してよろしいですか？')">
                            @if((Auth::user()->id) == ($comment->user_id))
                            <button class='btn btn-primary w-150 mt-3'>削除</button>
                            @endif
                        </a>
                </td>
            </tbody>
            @endforeach
        </table>
    </div>
</body>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script>
    $('.comment_btn').click(function() {
        // var name = $('input[name="name"]').val();
        var record_id = $('input[name="record_id"]').val();
        var comment = $('input[name="comment"]').val();
        $.ajax({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            url: "/comment/add/ajax",
            dataType: "json",
            type: 'POST',
            data: {
                // 'name':name,
                'comment': comment,
                'record_id': record_id
            },
        }).done(function(data) {
            $(".coment_add").val("");
            var html = `
                                <tbody>
                                    <td> ${data.user_name.name} </td>
                                    <td> ${data.comments.created_at} </td>
                                    <td> ${data.comments.comment} </td>
                                    <td></td>
                                </tbody>
                                `;

            $("#comment_data").append(html);
        }).fail(function(jqXHR, textStatus, errorThrown) {
            //通信が失敗したときの処理
            console.log('送信失敗', jqXHR, textStatus, errorThrown);
        });
    });
</script>



<style>
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

    .comment_list {
        overflow: auto;
        width: 300px;
        height: 100px;
        padding: 5px;
        border: 2px dotted #ffffff;
        color: #e8e8e8;
        background-color: #5bc6ed;
        line-height: 1.5em;
    }
</style>