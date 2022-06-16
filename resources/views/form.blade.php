<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <title>Form API</title>
</head>

<body>
    <form class="container" method="post" action="{{route('ptb1_post')}}">
        @csrf
        <h2>Giải phương trình bậc nhất: ax +b =0 </h2>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">a</label>
            <input name="a" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Nhập X" value="{{isset($a)?$a:''}}">
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">b</label>
            <input name="b" type="text " class="form-control" id="exampleInputPassword1" placeholder="Nhập Y" value="{{isset($b)?$b:''}}">
        </div>

        <button type="submit" class="btn btn-primary">Tính </button>
    </form>
    <h4>{{isset($kq)?$kq:''}}</h4>
</body>

</html>