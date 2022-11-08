@extends('site.layouts.main')
@section('content')
    

    <div id="container">
        <table>
            <!--<tr style="text-align:center;">
    <td>Image</td>
    <td>Name</td>
    <td>Price</td>
    <td>Amount</td>
    <td>Subtotal</td>
    <td> </td>
  </tr>-->
            <tr class="p">
                <td class="image"><img src={{asset("img/burger/1.png")}} /></td>
                <td class="name">Beefy Burgers</td>
                <td class="price">$5</td>
                <td class="amount"><input type="number" value="1" min="0" /></td>
                <td class="pricesubtotal"></td>
                <td class="remove">
                    <div>&times</div>
                </td>
            </tr>

            <tr class="p">
                <td class="image"><img src={{asset("img/burger/1.png")}} /></td>
                <td class="name">Beefy Burgers</td>
                <td class="price">$5</td>
                <td class="amount"><input type="number" value="1" min="0" /></td>
                <td class="pricesubtotal"></td>
                <td class="remove">
                    <div>&times</div>
                </td>
            </tr>

            <tr class="p">
                <td class="image"><img src={{asset("img/burger/1.png")}} /></td>
                <td class="name">Beefy Burgers</td>
                <td class="price">$5</td>
                <td class="amount"><input type="number" value="1" min="0" /></td>
                <td class="pricesubtotal"></td>
                <td class="remove">
                    <div>&times</div>
                </td>
            </tr>

            <tr class="p">
                <td class="image"><img src={{asset("img/burger/1.png")}} /></td>
                <td class="name">Beefy Burgers</td>
                <td class="price">$5</td>
                <td class="amount"><input type="number" value="1" min="0" /></td>
                <td class="pricesubtotal"></td>
                <td class="remove">
                    <div>&times</div>
                </td>
            </tr>

            <tr class="p">
                <td class="image"><img src={{asset("img/burger/1.png")}} /></td>
                <td class="name">Beefy Burgers</td>
                <td class="price">$5</td>
                <td class="amount"><input type="number" value="1" min="0" /></td>
                <td class="pricesubtotal"></td>
                <td class="remove">
                    <div>&times</div>
                </td>
            </tr>

            <tr class="p">
                <td class="image"><img src={{asset("img/burger/1.png")}} /></td>
                <td class="name">Beefy Burgers</td>
                <td class="price">$5</td>
                <td class="amount"><input type="number" value="1" min="0" /></td>
                <td class="pricesubtotal"></td>
                <td class="remove">
                    <div>&times</div>
                </td>
            </tr>

            <tr class="p">
                <td class="image"><img src={{asset("img/burger/1.png")}} /></td>
                <td class="name">Beefy Burgers</td>
                <td class="price">$5</td>
                <td class="amount"><input type="number" value="1" min="0" /></td>
                <td class="pricesubtotal"></td>
                <td class="remove">
                    <div>&times</div>
                </td>
            </tr>

            <tr class="p">
                <td class="image"><img src={{asset("img/burger/1.png")}} /></td>
                <td class="name">Beefy Burgers</td>
                <td class="price">$5</td>
                <td class="amount"><input type="number" value="1" min="0" /></td>
                <td class="pricesubtotal"></td>
                <td class="remove">
                    <div>&times</div>
                </td>
            </tr>

            <tr>
                <td> </td>
                <td> </td>
                <td> </td>
                <td>Subtotal:</td>
                <td class="totalpricesubtotal"></td>
                <td> </td>
            </tr>
            <!-- <tr>
                <td style="border-top:1px solid white" colspan="6"><br /> With 5% sales tax <span class="taxval"></span> and <span class="shipping">10</span>$ shipping:<br />
                    <span class="big">Total: $<span class="realtotal">0</span></span>
                </td>
            </tr> -->
        </table>
        <a href={{route('form')}} id="checkout">Checkout<span> &rarr;</span></a>

    </div>

    @endsection