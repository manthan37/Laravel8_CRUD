<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Edit user</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <div class="container col-md-6 mt-5">
    <form action="{{ route('user.update')}}" method="post">
            @csrf

            <div class="card ">
                <div class="card-header">
                    Edit User
                </div>

                <div class="card-body">
                    @if(Session::has('user_updated'))
                    <div class=" alert alert-success" role="alert">{{ Session::get('user_updated') }}</div>
                @endif
                    <div class="form-group">
                    <input type="hidden" name="id" value="{{ $user->id }}">
                        <label for="name">Name</label>
                        <input type="text" name="name" id="name" class="form-control" value="{{ $user->name }}">
                        <label for="email">Email</label>
                        <input type="text" name="email" id="email" class="form-control" value="{{ $user->email }}">
                        <label for="password">Password</label>
                        <input type="text" name="password" id="password" class="form-control" value="{{ $user->password }}">
                        <br>
                        <input type="submit" value="Update" class="btn btn-success">

                    </div>
                </div>
            </div>
        </form>
    </div>





    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>
