<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'workoutnote') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    workoutnote
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>
            </div>
        </nav>
        <main class="py-4">
            <div class="row justify-content-around">
                <div class="col-md-4">
                
               
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


                    @foreach($ids  as $id)

                    <div class="row">
                        <div class="col">
                            <input  type="text" value="{{ $id->menu }}"  class="form-control" placeholder="" aria-label="" name="menu_id">
                        </div>
                        <div class="col">
                            <input type="text" value="{{ $id->weight }}" class="form-control" placeholder="" aria-label="" name="weight">
                        </div>
                        <div class="col">
                            <input type="text" value="{{ $id->rep }}" class="form-control" placeholder="" aria-label="" name="rep">
                        </div>
                        <div class="col">
                            <input type="text" value="{{ $id->set }}" class="form-control" placeholder="" aria-label="" name="set">
                        </div>
                    </div>     
                    @endforeach
                           
                      
                <div class='row justify-content-center'>
                     <butoon type='submit' class='btn btn-primary w-25 mt-3'>上書き</button>                     
                </div>
                

                </form>                                 
                                       


</body>
</html>

<style>
    
    .row {
    display: flex;
    flex-wrap: wrap;
    /* margin-right: -15px; */
    margin-left: -155px;
    width: 130%;
}
</style>