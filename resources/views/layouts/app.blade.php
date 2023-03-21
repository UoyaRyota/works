<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- Scripts -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
    <script src="https://ajaxzip3.github.io/ajaxzip3.js"></script>

</head>

<style>
    .search-form-009 {
    display: flex;
    align-items: center;
    overflow: hidden;
    border: 1px solid #dfe1e5;
    border-radius: 24px;
    margin: 20px;
    /* position: fixed; */
}

.search-form-009:hover {
    box-shadow: 0 1px 6px rgb(32 33 36 / 28%);
}

.search-form-009::before {
    width: 45px;
    height: 15px;
    background-image: url('data:image/svg+xml;charset=utf8,%3Csvg%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20viewBox%3D%220%200%2024%2024%22%3E%20%3Cpath%20d%3D%22M23.7%2020.8%2019%2016.1c-.2-.2-.5-.3-.8-.3h-.8c1.3-1.7%202-3.7%202-6C19.5%204.4%2015.1%200%209.7%200S0%204.4%200%209.7s4.4%209.7%209.7%209.7c2.3%200%204.3-.8%206-2v.8c0%20.3.1.6.3.8l4.7%204.7c.4.4%201.2.4%201.6%200l1.3-1.3c.5-.5.5-1.2.1-1.6zm-14-5.1c-3.3%200-6-2.7-6-6s2.7-6%206-6%206%202.7%206%206-2.6%206-6%206z%22%20fill%3D%22%239aa0a6%22%3E%3C%2Fpath%3E%20%3C%2Fsvg%3E');
    background-position: center;
    background-repeat: no-repeat;
    content: '';
}

header {
    height: 50px;
}

.search-form-009 input {
    width: 250px;
    height: 40px;
    padding: 5px 25px 5px 0;
    border: none;
    box-sizing: border-box;
    outline: none;
}

#sp-fixed-menu{
    position: sticky;
    width: 100%;
    bottom: 0px;
    font-size: 0;
    opacity: 1;
    z-index: 999 !important;
    background: #fff;
}

#sp-fixed-menu ul{
    border-top: 1px solid #DBDBDB;
    display: flex;
    list-style: none;
    padding:0;
    margin:0;
    width:100%;
}

#sp-fixed-menu li{
    justify-content: center;
    align-items: center;
    width: 50%;
    padding:0;
    margin:0;
    font-size: 14px;
    border-right: 1px solid #fff;
}

#sp-fixed-menu li a{
    color: black;
    text-align: center;
    display:block;
    width: 100%;
    padding:20px;
}

footer{
    height: 100px;
    opacity: 1;
}

.footer-icon-color{
    color: #699BF7;
}

#sp-fixed-menu li.test a  {
    padding-top: 10px !important;
}

.btn-primary {
    color: #fff;
    background-color: #699BF7;
    border-color: #699BF7;
    font-weight: bold;
}

.submit-type {
    height: 53px;
}

.Table {
  width: 100%;
  border-collapse: collapse;
  border-radius: 5%;
  background: #fff;
  font-size: 16px;
  box-shadow: 0 2.5rem 2rem -2rem hsl(200 50% 20% / 40%);
  border-top-left-radius: 10px;
    border-top-right-radius: 10px;
  }
  @media screen and (max-width: 768px) {
  .Table {
  font-size: 12px;
  }
}

.Table-Head{

}


.Table-Head-Row {
    border-bottom: 1px solid #aeaeae;
    background-color: #4E4E53;
    color: #fff;

}

.Table-Head-Row-Cell {
  padding-top: 0.75em;
  padding-bottom: 0.75em;
  padding-left: 0.5em;
  padding-right: 0.5em;
  font-weight: 200;
  font-size: 14px;
}

.Table-Head-Row-Cell.table-left{
    border-top-left-radius: 10px;
}

.Table-Head-Row-Cell.table-right{
    border-top-right-radius: 10px;
}

.Table-Head-Row-Cell.table-right-left{
    border-top-left-radius: 10px;
    border-top-right-radius: 10px;
    
}
  a.widelink { 
    display: block;
    text-decoration: none;
  }

  .Table-Body-Row :first-child {
    color: black;
  }

  .Table-Body-Row-Cell {
  padding-top: 0.75em;
  padding-bottom: 0.75em;
  padding-left: 0.5em;
  padding-right: 0.5em;
  font-size: 14px;
  color: #393d3d;
  }


</style>
<body>
    
    <div id="app">

                    @if ( request()->is('*clinicals*') || request()->is('*reservations*') )
                    <form method="POST" action="{{route('clinicals.search')}}" class="search-form-009">
                        {{csrf_field()}}
                        <label>
                            <input type="search" class="" name="search"  value="" placeholder="search" aria-label="検索...">
                            
                        </label>
                    </form>
                    @else
                    
                    @endif


        <main class="py-4">
            @yield('content')
        </main>
    </div>
    <div id="sp-fixed-menu" class="for-sp">
                    <ul>
                    <li><a href=""><i class="fa-solid fa-house fa-2x footer-icon-color"></i></a></li>
                    <li><a href="{{route('clinicals.index')}}"><i class="fa-solid fa-magnifying-glass fa-2x footer-icon-color"></i></a></li>
                    <li class="test" ><a href="{{route('clinicals.index')}}"><i class="fa-solid fa-circle-plus fa-3x footer-icon-color"></i></i></a></li>
                    <li><a href="{{route('reservations.index')}}"><i class="fa-regular fa-clipboard fa-2x footer-icon-color"></i></a></li>
                    <li><a href="{{route('reservations.index')}}"><i class="fa-solid fa-list fa-2x footer-icon-color"></i></a></li>
                    </ul>
                </div>

</body>
</html>
