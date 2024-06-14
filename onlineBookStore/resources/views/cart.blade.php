<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product Cart Details</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
</head>
<body>

<div class="messages">
    @if(asset(session()->has('success')))
    <p>{{ session()->get('success') }}</p>
    @endif
</div>

<div class="container">
    <div class="row">
        <div class="">
            <table class="table table-bordered text-center">
                @csrf
                <thead>
                    <tr>
                        <th>Id</th>
                        <th>Image</th>
                        <th>Name</th>
                        <th>Price</th>
                        <th>Stock </th>
                        <th>Total</th>
                        <th>Action</th>
                    </tr>
                </thead>
                @if(session('cart')) 
                    @foreach(session('cart') as $id => $details)
                    <tr>
                        <td>{{ $details['id'] }}</td>
                        <td><img src="{{asset($details['image'])}}" alt="Picture not found" height="50px" width="50px"></td>
                        <td>{{ $price = $details['name'] }}.</td>
                        <td>{{ $details['price'] }}/-</td>
                        <td>{{ $qty = $details['qty'] }}</td>
                        <td>{{ $details['price'] * $details['qty'] }}</td>
                        <td>
                            <button class="btn btn-warning remove-from-cart"><i class="material-icons" style="color:red">delete</i></button>
                        </td>
                    </tr> 
                    @endforeach
                @endif 
            </table>           
        </div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>


</body>
</html>