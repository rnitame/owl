<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Login</title>
    {{HTML::style('packages/bootstrap/css/bootstrap.min.css', array('media'=>'screen'))}}
    {{HTML::style('css/style.css')}}
    {{HTML::style('http://fonts.googleapis.com/css?family=Allerta')}}
</head>
<body>

<div id="wrapper">
    <div id="header">
            <nav class="navbar navbar-default navbar-static-top">
                <div class="container">
                    <div class="navbar-header">
                        <a href="/" class="navbar-brand">Athena</a>
                    </div>
                </div>
            </nav>
    </div>

    <div id="contents">
        <div id="pagehead">
            <div class="container">
                <p class="page-title">ログイン</p>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div id="main" class="col-sm-9">
                    {{Form::open(array('url'=>'login'))}}
                    @if(Session::has('status'))
                    {{Session::get('status')}}<br />
                    @endif
                    {{Form::text('username','',array('placeholder'=>'ユーザ名'))}}<br />
                    {{Form::password('password',array('placeholder'=>'パスワード'))}}<br />
                    @if($errors->has('warning'))
                    {{$errors->first('warning')}}<br />
                    @endif
                    {{Form::checkbox('remember',1,true)}}ログイン状態を保持する<br />
                    {{Form::submit('ログイン')}}
                    {{Form::close()}}
                    <p><a href="/signup">登録はこちら</a></p>
                </div>

                <div id="sidebar" class="col-sm-3">
                    <ul>
                    </ul>
                </div>
            </div>
        </div>
    </div>

</div>
</body>
</html>
