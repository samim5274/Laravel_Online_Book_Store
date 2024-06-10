<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Book list</title>    
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
    
<!-- image view section start -->

<section id="imageView-section">
    <div class="container">
        <div class="row">
            @foreach($bookslist as $book)
            <div class="col-lg-2 col-md-3 col-sm-4 col-xs-6">
                <div class="card text-center mt-2">
                    <a href="{{ url('/books-details/'.$book->id) }}"><img class="card-img-top" src="{{asset(explode('|', $book->image)[0])}}" style="height:250px" alt="Card image cap"></a>
                    <div class="card-body">
                        <h5 class="card-title mb-0">{{ $book['name'] }}</h5>
                        <p href="#">Total Qty: {{ $book['qty'] }}</p>
                        <h6 class="card-title">Price:- {{ $book['price'] }}/-</h6>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>
<div class="py-4">{{ $bookslist->links('pagination::bootstrap-4') }}</div>
<!-- image view section end -->

</body>
</html>