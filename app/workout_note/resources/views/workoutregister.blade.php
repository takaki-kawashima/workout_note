
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
      <button type='button' class=''>マイページ</button>
      </a>

<h>登録画面</h>

<div class="row">
<div class="col">
  <h3>体重</h3>
  </div>
  <div class="col">

    <input type="text" class="form-control" placeholder="" aria-label="">
  </div>
  
</div>


  <a href="{{ route('add') }}">
            <butoon type='button' class='btn btn-secondary'>種目の追加</button>
            </a>



  <div class="row">
  <div class="col">
    <h3>種目</h3>
  </div>
  <div class="col">
  <h3>Weight</h3>
  </div>
  <div class="col">
  <h3>Rep</h3>
  </div>
  <div class="col">
  <h3>Set</h3>
  </div>
</div>



  <div class="row">
  <div class="col">
    <input type="text" class="form-control" placeholder="" aria-label="" name="menu">
  </div>
  <div class="col">
    <input type="text" class="form-control" placeholder="" aria-label="" name="weight">
  </div>
  <div class="col">
    <select type="text" class="form-control" placeholder="" aria-label="" name="rep">
    <option value=''>1</option>
    <option value=''>2</option>
    <option value=''>3</option>
    <option value=''>4</option>
    <option value=''>5</option>
    <option value=''>6</option>
    <option value=''>7</option>
    <option value=''>8</option>
    <option value=''>9</option>
    <option value=''>10</option>
    <option value=''>11</option>
    <option value=''>12</option>
    </select>
  </div>
  <div class="col">
    <select type="text"  class="form-control" placeholder="" aria-label="" name="set">
   
<option value=''>1</option>
<option value=''>2</option>
<option value=''>3</option>
</select>
    
  </div>
</div>

<a href="{{ route('home') }}">
            <butoon type='button' class='btn btn-secondary'>登録</button>
            </a>


<style>

.row {width: 40%;
padding top: 30px;
margin: auto;}
h3{margin left: 50px;}
.butoon{margin:auto;}


</style>
  