
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

<h class=hyoudai>登録画面</h>

<form action="{{ route('record.store')}}" method="post">
                            @csrf

                            <div class="row">
<div class="col">
  <h3>タイトル</h3>
  </div>
  <div class="col">

    <input type="text" class="form-control" placeholder="" aria-label="" name="title">
  </div>                        


<div class="row">
<div class="col">
  <h3>体重</h3>
  </div>
  <div class="col">

    <input type="text" class="form-control" placeholder="" aria-label="" name="body_weight">
  </div>
  
</div>
<a href="{{ route('add') }}">
<div class='row justify-content-center'>

            <butoon type='button' class='btn btn-primary w-25 mt-3'>種目の追加</button>
          
</div>
</a>

<label>{{ __('材料') }}
      <a onclick=add() class="btn btn-sm btn-light">+追加</a>
      <div id="input_plural">

<div class ='panel-body'>
  @if($errors->any())
  <div class='alert alert-danger'>
    <ul>
      @foreach($errors->all() as $message)
      <li>{{ $message }}</li>
      @endforeach
    </ul>
  </div>
  @endif
</div>

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

<div id="input_pluralBox">
    <div id="input_plural">

  <div class="row">
  <div class="col" id="syumoku">
    <select type="text" class="form-control" placeholder="" aria-label="" name="menu_id[]"  >
    <option value=''>種目</option>
                                @foreach($menus as $menu)
                                <option value="{{ $menu->menu}}">{{ $menu->menu }}  </option>
                                @endforeach
    </select>
  </div>
 
                                
                            

  <div class="col">
    <input type="text" class="form-control" placeholder="" aria-label="" name="weight[]" value="{{ old('weight') }}"/>
  </div>
  <div class="col">
    <input type="text" class="form-control" placeholder="" aria-label="" name="rep[]" value="{{ old('rep') }}"/>
  </div>
  <div class="col">
    <input type="text" class="form-control" placeholder="" aria-label="" name="set[]" value="{{ old('set') }}"/>
  </div>
  <input type="button" value="＋" class="add pluralBtn">
        <input type="button" value="－" class="del pluralBtn">
</div>

</div>
</div>   

          </div>
      </div>
</label>



<div class='row justify-content-center'>
    <button type='submit' class='btn btn-primary w-25 mt-3'>追加</button>
</div> 



<style>

.row {width: 40%;
padding top: 30px;
margin: auto;}
.hyoudai{
  text-align: center;
  margin-left:630px;
font size:30px;}

button{text-align: center;
  margin left:300px;}
body{padding top:50px}





</style>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script type="text/javascript">
$(document).on("click", ".add", function() {
    $(this).parent().clone(true).insertAfter($(this).parent());
});
$(document).on("click", ".del", function() {
    var target = $(this).parent();
    if (target.parent().children().length > 1) {
        target.remove();
    }
});
</script>



 


       

<script>
  let inputPlural = document.getElementById('input_plural');
var count = 4;

function add() {
    let div = document.createElement('DIV');
    div.classList.add('d-flex');



    
    var input = document.getElementById('syumoku');
    input.classList.add('form-control');
    input.setAttribute('menu_id', 'ing-name-'+count);
    div.append(input);



    var input = document.createElement('INPUT');
    input.classList.add('form-control');
    input.setAttribute('weight', 'ing-name-'+count);
    div.appendChild(input);
    
    var input = document.createElement('INPUT');
    input.classList.add('form-control');
    input.setAttribute('rep', 'ing-name-'+count);
    div.appendChild(input);

    var input = document.createElement('INPUT');
    input.classList.add('form-control');
    input.setAttribute('set', 'ing-size-'+count);
    div.appendChild(input);

    var input = document.createElement('INPUT');
    input.setAttribute('type', 'button');
    input.setAttribute('value', '削除');
    input.setAttribute('onclick', 'del(this)');
    div.appendChild(input);

    inputPlural.appendChild(div);
    count++;
}

function del(o) {
    o.parentNode.remove();
}
</script>
  