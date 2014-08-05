@section('header')
<!doctype html>
<html lang="ja">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{{isset($title) ? $title : 'Athena'}}}</title>
    {{HTML::style('packages/bootstrap/css/bootstrap.min.css', array('media'=>'screen'))}}
    {{HTML::style('css/style.css')}}
    {{HTML::style('http://fonts.googleapis.com/css?family=Allerta')}}

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    @yield('addCss')
</head>
@stop
