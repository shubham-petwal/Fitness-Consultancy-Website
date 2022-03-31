


@extends('layouts.master')

@section('content')
<div class="bodd"><br><br>
             <h1 class="her"> Taste once and you will want more of it....</h1>
    <div class="flexxx">
               <div class="im"><br><img src="{{ asset('image\jar.jpg')}}" height="150px" width="100%"><br><br>
               <b>Ralson 2X Nylon Acer Aviator MTB Cycle Good Grip Tyre (26 X 1.95 inches, Black)</b><br>Price:<font color="indianred"><b>₹16.00</b></font><br><br><b><font size="5px"><input name="item" value="16.00" type="checkbox" onclick="price()" id="ip" /> Add to cart</font></b><br></div>
               <div class="im"><br><img src="{{ asset('image\light.jpg')}}"  height="150px" width="100%"><br><br><b>Lighter House 1 Pair Bicycle Parts Left Right MTB Lever Aluminum Alloy Brake Handles</b><br>Price:<font color="indianred"><b>
                ₹4.20</b></font><br><br><b><font size="5px"><input name="item" value="4.20" type="checkbox" onclick="price()" id="ip" /> Add to cart</font></b><br></div>
                <div class="im"><br><img src="jar.jpg" height="150px" width="100%"><br><br><b>FASTPED Unisex Cool Bell Mini Adjustable Bicycle Bike Accessories with no cracky sound</b><br>Price:<font color="indianred"><b>₹10.00</b></font><br><br><b><font size="5px"><input name="item" value="10.00" type="checkbox" onclick="price()" id="ip" /> Add to cart</font></b><br></div>
                <div class="im"><br><img src="jar.jpg" height="150px" width="100%"><br><br><b>Ralson 26 X 1.95 inch Nylon Storm Parrot Green MTB Cycle Tyre Good Grip , Made in india</b><br>Price:<font color="indianred"><b>₹ 12.50</b></font><br><br><b><font size="5px"><input name="item" value="12.50" type="checkbox" onclick="price()" id="ip" /> Add to cart</font></b><br></div>
                <div class="im"><br><br><img src="5.jpg" height="150px" width="100%"><br><br><b>UDee Bicycle Top Tube Frame Cycling Pannier Bike Bag & Mobile Phone Screen Touch Holder for Upto 5.5 Inch</b><br>Price:<font color="indianred"><b>₹7.00</b></font><br><br><b><font size="5px"><input name="item" value="7.00" type="checkbox" onclick="price()" id="ip" /> Add to cart</font></b><br></div>
                <div class="im"><br><br><img src="6.jpg" height="150px" width="100%"><br><br><b>Proberos® Bike Pouch Phone Holder, Bike Handlebar Bags, Frame Bag Cycling Top Tube Waterproof Bag</b><br>Price:<font color="indianred"><b>₹11.09</b></font><br><br><b><font size="5px"><input name="item" value="11.09" type="checkbox" onclick="price()" id="ip" /> Add to cart</font></b><br></div>
                
                <div class="im"><br><br><img src="7.jpg" height="150px" width="100%"><br><br><b>Schrodinger15 60008 Adult Bicycle Cycle Helmet MATT Blue-Black Diameter 58-63cm Medium Adjustable</b><br>Price:<font color="indianred"><b>₹27.60</b></font><br><br><b><font size="5px"><input name="item" value="27.60" type="checkbox" onclick="price()" id="ip" /> Add to cart</font></b><br></div>
                
                <div class="im"><br><br><img src="8.png" height="150px" width="100%"><br><br><b>Schrodinger15 40047 Generic Original Nylon RED Stripe Tyre Tire 700 x 25c Road Bicycle Cycle 100psi -Generic</b><br>Price:<font color="indianred"><b>₹25.99</b></font><br><br><b><font size="5px"><input name="item" value="25.99" type="checkbox" onclick="price()" id="ip" /> Add to cart</font></b><br></div>
                
                <div class="im"><br><br><img src="9.jpg" height="150px" width="100%"><br><br><b>Schrodinger15 60005 Adult Bicycle Cycle Helmet MATT Yellow-Black Diameter 58-63cm Medium Adjustable</b><br>Price:<font color="indianred"><b>₹8.26</b></font><br><br><b><font size="5px"><input name="item" value="8.26" type="checkbox" onclick="price()" id="ip" /> Add to cart</font></b><br></div>
                
                <div class="im"><br><br><img src="10.jpg" height="150px" width="100%"><br><br><b>Uniavo USB Rechargeable Waterproof Cycle Light, High 350  Headlight and Tail Light Set, LED Front and Rear Lights Combo</b><br>Price:<font color="indianred"><b>₹17.94</b></font><br><br><b><font size="5px"><input name="item" value="17.94" type="checkbox" onclick="price()" id="ip" /> Add to cart</font></b><br></div>
                
                <div class="im"><br><br><img src="11.jpg" height="150px" width="100%"><br><br><b>Schrodinger15 40003 Wanda/Btwin Bicycle Cycle Tube 700 x 35/43C 48L Presta Valve (FV)</b><br>Price:<font color="indianred"><b>₹9.99</b></font><br><br><br><b><font size="5px"><input name="item" value="9.99" type="checkbox" onclick="price()" id="ip" /> Add to cart</font></b><br></div>
                
                <div class="im"><br><br><img src="12.jpg" height="150px" width="100%"><br><br><b>FASTPED® Cool Bell with 3 LED Light Bicycle Bike Accessories Adjustable Safety Warning Loud Horn</b><br>Price:<font color="indianred"><b>₹3.44</b></font><br><br><b><font size="5px"><input name="item" value="3.44" type="checkbox" onclick="price()" id="ip" /> Add to cart</font></b><br></div>


                @foreach($products as $item)
                <div class="im"><br><br><img src="{{asset('uploads/product_images/'.$item->image)}}" height="150px" width="100%"><br><br><b>{{$item->disc}}</b><br>Product Name:<font color="indianred"><b>{{$item->pname}}</b></font><br>Price:<font color="indianred"><b>₹{{$item->price}}</b></font><br><br><b><font size="5px"><input name="item" value="{{$item->price}}" type="checkbox" onclick="price()" id="ip" /> Add to cart</font></b><br></div>
                @endforeach



 


 </div><br><br><center>
            <b id="cur1">
                <h1><font color="black">Total cost:</font>&nbsp; &nbsp; <input value="₹0.00" readonly="readonly" type="text" name="total" class="inpp" /></h1>
           </b><br>
                <a href="#"><img src="{{ asset('image\checkout.png')}}" id="imm" align="right"></a>
           </center>
           <br><br><br><br><br>
    </div>
    <script src="js/product.js">
    
    </script>
    @stop
