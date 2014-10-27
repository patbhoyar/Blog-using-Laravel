<!doctype html>
<html>
<head>
	{{ HTML::style('css/styles.css') }}
	<title>{{ $pageTitle }}</title>
</head>
<body>

    <div id="mainContainer">
        <div id="menuContainer">
            <ul id="menu">
                <li class="menuItem">{{  HTML::link('/articles', "Home") }}</li>
                <li class="menuItem">{{  HTML::link('/article/create', "Add Article") }}</li>
                <li class="menuItem">{{  HTML::link('/author/create', "Add Author") }}</li>
            </ul>
        </div>

        <div id="header">{{ $pageTitle }}</div>

        @yield('content')

    </div>

</body>
</html>
