<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Book List</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="/css/style.css">
    <link rel="stylesheet" href="/css/grid.css">
</head>
<body>

<section id="error-section">
    <div class="row">
        <div class="col text-center">
            @if(session()->has('success'))
            <div class="alert alert-success">
                {{session()->get('success')}}
            </div>
            @elseif(session()->has('error'))
            <div class="alert alert-danger">
                {{session()->get('error')}}
            </div>
            @endif
        </div>
    </div>
</section>

<section id="book-section">
    <div class="container mt-4">
        <div class="row">
            <div class="col-md-12">
                <form method="POST" action="/books" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label for="name">Book Name</label>
                        <input type="text" name="name" required class="form-control" id="name" placeholder="Enter your book name">
                        <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                    </div>
                    <div class="form-group">
                        <label for="price">Price</label>
                        <input type="number" name="price" required class="form-control" id="price" placeholder="Enter your price">
                    </div>
                    <div class="form-group">
                        <label for="quantity">Quantity</label>
                        <input type="number" name="quantity" required class="form-control" id="quantity" placeholder="Enter quantity">
                    </div>
                    <div class="form-group">
                        <label for="image">Image</label>
                        <input class="form-control" name="images[]" type="file" id="image" multiple>
                    </div>
                    <div class="mb-3">
                    <button type="submit" class="btn btn-primary">Add Product</button>
                </form>
            </div>
        </div>
    </div>
</section>

<!-- image view section start -->

<section id="imageView-section">
    <div class="container">
        <div class="row">
            @foreach($returnBook as $book)
                <div class="col-lg-2 col-md-3 col-sm-4 col-xs-6">
                    <div class="card text-center mt-2">
                        <a href="/account"><img class="card-img-top" src="{{asset($book['image'])}}" alt="Card image cap"></a>
                        <div class="card-body">
                            <!-- <h5 class="card-title mb-0">{{$book['name']}}</h5> -->
                            <a href="/account">{{$book['name']}}</a>
                            <p>price:${{$book['price']}}/-</p>
                            <!-- <h6 class="card-title">Price:- {{$book['price']}}/-</h6> -->
                            <!-- <a href="#" class="btn btn-warning btn-sm">Add Cart</a>
                            <a href="#" class="btn btn-info btn-sm">Buy Now</a> -->
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>

<!-- image view section end -->





<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>