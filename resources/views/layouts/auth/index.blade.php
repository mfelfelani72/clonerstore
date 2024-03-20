<!DOCTYPE html>
<html lang="en" class="h-100">

<head>
    @yield('tag-head')

</head>

<body class="vh-100">
    <div class="authincation h-100">
        <div class="container h-100">
            <div class="row justify-content-center h-100 align-items-center">
                <div class="col-md-6">
                   @yield('content')
                </div>
            </div>
        </div>
    </div>

    @yield('tag-script')
   
</body>

</html>
