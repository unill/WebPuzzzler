<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Admin Login</title>
    <link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
     <link href="<?php echo e(asset('css/admin/styles.css')); ?>" rel="stylesheet">
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
</head>
<body>

<div class="container" id="loginContainer">
    <div class="row">
        <div class="col-md-4 col-md-offset-4">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title">Please sign in</h3>
                </div>
                <div class="panel-body">
                    <form accept-charset="UTF-8" role="form" method ="post" action ="<?php echo e(url('admin')); ?>"> <?php echo e(csrf_field()); ?>

                        <fieldset>
                            <div class="form-group">
                                <input class="form-control" placeholder="E-mail" name="email" type="text">
                            </div>
                            <div class="form-group">
                                <input class="form-control" placeholder="Password" name="password" type="password" value="">
                            </div>

                <input class="btn btn-lg btn-success btn-block" type="submit" value="Login">
                </fieldset>
                </form>
            </div>
        </div>
    </div>
</div>
</div>

</body>
</html>