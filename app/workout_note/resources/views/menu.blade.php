<!doctype html>

<body>


<body>
    <h1 class="my-3 ml-3">サンプルメニュー</h1>
 
    <a href="{{ route('mypage') }}">
    <button type='button' class=top>マイページ</button>
            </a>

    <div class="col-5 ml-3">
        <table class="table">
        <tr>
  <th>1day</th><td>ベンチプレス</td>
</tr>

<tr>
  <th></th><td>スクワット</td>
</tr>

<tr>
  <th></th><td>ラットプルダウン</td>
</tr>
<tr>
  <th></th><td>トライセプスエクステンション</td>
</tr>
<tr>
  <th></th><td>腹筋</td>
</tr>

<tr>
  <th></th><td></td>
</tr>

<tr>
  <th>2day</th><td>デッドリフト</td>
</tr>

<tr>
  <th></th><td>ショルダープレス</td>
</tr>

<tr>
  <th></th><td>ダンベルカール</td>
</tr>
<tr>
  <th></th><td>ブルガリアンスクワット</td>
</tr>
<tr>
  <th></th><td>サイドレイズ</td>
</tr>

<tr>
  <th></th><td></td>
</tr>

<tr>
  <th>3day</th><td>スクワット</td>
</tr>

<tr>
  <th></th><td>ベンチプレス</td>
</tr>

<tr>
  <th></th><td>ダンベルロウ</td>
</tr>
<tr>
  <th></th><td>フェイスプル</td>
</tr>
<tr>
  <th></th><td>腹筋</td>
</tr>

<tr>
           
        </table>
    </div>
 <div class="menu">
    重さや回数の目安<br>

@if((Auth::user()->purpose) == ($powers))
                    
目的：パワーアップ<br>
<div class="border">
自信が１〜４回できる重さ、
５回目は上げることができない重さで行いましょう。
神経系に刺激を与え筋出力を上げていくことが目的になるので、
セット間のレストはしっかりととりトレーニング強度が落ちないように気をつけましょう。
</div>
@endif








@if((Auth::user()->purpose) == ($bulks))
目的：バルクアップ<br>
<div class="border">
自信が８〜１２回できる重さで行います。<br>
筋肉を肥大させることが目的になるので、あまり余裕がありすぎたり、<br>
逆に追い込みすぎてrep数が足りないということにならないように気をつけましょう。<br>
目安としては3セットをインターバル3分程度で行います。<br>
1セット目よりも2セット目、2セット目よりも3セット目とだんだんキツくなってきますが、<br>
インターバルを少し調整するなどしトレーニング強度が下がってしまわないように意識しましょう。
</div>
@endif

@if((Auth::user()->purpose) == ($shapes))
目的：シェイプアップ<br>
<div class="border">
15回以上できる重さで行っていきます。
遅筋を鍛えることで筋肉が速筋に比べ肥大しにくく、
また有酸素運動の効果が高くなるのでシェイプアップの効果が期待できます。
</div>
@endif

</div>




    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>
<!-- 
<h1 class="my-3 ml-3">テーブル</h1>
 
 <div class="col-5 ml-3">
 <table class="table">


  <th></th><td></td>
</tr>
</table> -->
<style>
  .table{margin-left: 500px;}

  .border{
    display: inline-block;
	border: solid 1px #454545;
 
}
.menu{
  margin-left: 300px;
}


</style>


