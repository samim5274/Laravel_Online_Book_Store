<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Details</title>
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="/css/grid.css">
    <link rel="stylesheet" href="/css/bookDetail.css">
</head>
<body>

<div class="messages">
    @if(asset(session()->has('success')))
    <p>{{ session()->get('success') }}</p>
    @endif
</div>
    
<section id="product-detail">
    <div class="row">
        <div class="col span_1_of_2">
            <div class="picture w3-display-container">
            @if(isset($images[0]))
            <img class="img-main" src="{{asset($images[0])}}" alt="Nature">
            @endif
            <!-- <span onclick="this.parentElement.style.display='none'" 
            class="w3-display-topright w3-button w3-transparent w3-text-white">&times;</span> -->
            <div class="w3-display-bottomleft w3-container w3-padding w3-text-white">Shamim Hossain</div>
        </div>
        <!-- main photo section big picture -->
        <div id="Nature" class="picture w3-display-container" style="display:none">
            @if(isset($images[0]))
            <img class="img-main" src="{{asset($images[0])}}" alt="Nature">
            @endif
            <!-- <span onclick="this.parentElement.style.display='none'" 
            class="w3-display-topright w3-button w3-transparent w3-text-white">&times;</span> -->
            <div class="w3-display-bottomleft w3-container w3-padding w3-text-white">Shamim Hossain</div>
        </div>

        <div id="Snow" class="picture w3-display-container" style="display:none">
            @if(isset($images[1]))
            <img class="img-main" src="{{asset($images[1])}}" alt="Snow" >
            @endif
            <!-- <span onclick="this.parentElement.style.display='none'" 
            class="w3-display-topright w3-button w3-transparent w3-text-white">&times;</span> -->
            <div class="w3-display-bottomleft w3-container w3-padding w3-text-white">{{$bookDetails->name}}</div>
        </div>

        <div id="Mountains" class="picture w3-display-container" style="display:none">
            @if(isset($images[2]))
            <img class="img-main" src="{{asset($images[2])}}" alt="Mountains">
            @endif
            <!-- <span onclick="this.parentElement.style.display='none'" 
            class="w3-display-topright w3-button w3-transparent">&times;</span> -->
            <div class="w3-display-bottomleft w3-container w3-padding w3-text-white">{{$bookDetails->name}}</div>
        </div>

        <div id="Lights" class="picture w3-display-container" style="display:none">
            @if(isset($images[3]))
            <img class="img-main" src="{{asset($images[3])}}" alt="Lights">
            @endif
            <!-- <span onclick="this.parentElement.style.display='none'" 
            class="w3-display-topright w3-button w3-transparent w3-text-white">&times;</span> -->
            <div class="w3-display-bottomleft w3-container w3-padding w3-text-white">{{$bookDetails->name}}</div>
        </div>

            <div class="col span_1_of_4">
                <div class="w3-col s3 w3-container">
                    <a href="javascript:void(0)" class="w3-hover-opacity" onclick="openImg('Nature');">
                    @if(isset($images[0]))
                        <img class="img-sm" src="{{asset($images[0])}}" alt="Nature">
                        @endif
                    </a>
                </div>
            </div>
            <div class="col span_1_of_4">
                <div class="w3-col s3 w3-container">
                    <a href="javascript:void(0)" class="w3-hover-opacity" onclick="openImg('Snow');">
                    @if(isset($images[1]))
                    <img class="img-sm" src="{{asset($images[1])}}" alt="Snow" >
                    @endif
                    </a>
                </div>
            </div>
            <div class="col span_1_of_4">
                <div class="w3-col s3 w3-container">
                    <a href="javascript:void(0)" class="w3-hover-opacity" onclick="openImg('Mountains');">
                    @if(isset($images[2]))
                    <img class="img-sm" src="{{asset($images[2])}}" alt="Mountains" >
                    @endif
                    </a>
                </div>
            </div>
            <div class="col span_1_of_4">
                <div class="w3-col s3 w3-container">
                    <a href="javascript:void(0)" class="w3-hover-opacity" onclick="openImg('Lights');">
                    @if(isset($images[3]))
                    <img class="img-sm" src="{{asset($images[3])}}" alt="Lights" >
                    @endif
                    </a>
                </div>
            </div>

        </div>

        <div class="col span_1_of_2">
            <div class="col span_2_of_3">
                
                <div class="w3-container">
                    <h2>This is the full name of product. here are the big product name <b> {{$bookDetails->name}}.</b></h2><hr>
                    <h3>Price: {{$bookDetails->price}}/-</h3>
                    <p><del>${{$bookDetails->price}}/-</del>  45%</p>
                </div><hr>
                <div class="col span_1_of_2" style="width:200px;">
                    <label for="size">Select Size:</label>
                    <select name="size" id="size">
                        <option value="XXL">XXL</option>
                        <option value="XL">XL</option>
                        <option value="L">L</option>
                        <option value="M">M</option>
                        <option value="S">S</option>
                    </select>   
                </div>
                <div class="w3-container">
                    <div class="col span_1_of_2">
                        <button class="btnBuy">Buy Now</button>
                    </div>
                    <div class="col span_1_of_2">
                    <a href="{{ url('/books-cart/'.$bookDetails->id) }}"><button type="submit" class="btnCart">Add cart</button></a>
                    </div>
                    <div class="col span_1_of_2">
                        <a href="#"><button>Go Cart</button></a>
                    </div>
                </div>
            </div>
            <div class="col span_1_of_3 box">
                <h4><b>ID: {{$bookDetails->qty}}</b> Dhaka, Dhaka North, Banani Road No. 12 - 19</h4>
                <p>Free Delivery 6 May - 14 May</p>
                    <h6>Contact: {{$bookDetails->price}}9287262</h6>
                <p>Saller ID: {{$bookDetails->id}}9534</p>
                <hr>
                <p>Cash on Delivery Available</p>
            </div>            
        </div>

    </div>
</section>

<div>
    @if(asset(session()->has('success')))
    <p>{{ session()->get('success') }}</p>
    @endif
</div>

<script>
function openImg(imgName) {
  var i, x;
  x = document.getElementsByClassName("picture");
  for (i = 0; i < x.length; i++) {
    x[i].style.display = "none";
  }
  document.getElementById(imgName).style.display = "block";
}
</script>

</body>
</html>