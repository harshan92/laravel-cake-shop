@extends('layouts.main')

@section('content')
<section class="cart container mt-2 my-3 py-5" style="background: white;">
    <div class="container  mt-2" >
        <h4>Your Cart</h4>
    </div>
    <table class="pt-5 w-100" >
        <tr style="background: #FB8263; color:white;">
            <th>Product</th>
            <th style="width: 150px">Quantity</th>
            <th style="width: 150px" class="text-right">Subtotal</th>
        </tr>
        <tr>
            <td>
                <div class="product-info">
                    <img src="" alt="" srcset="">
                    <div>
                        <p>Product</p>
                        <small><span>$</span>199</small>
                        <br>
                        <form>
                            <input type="hidden" name="id" value="1">
                            <input type="submit" value="remove" class="remove-btn" name="remove-btn">
                        </form>
                    </div>
                </div>
            </td>
            <td>
                <form>
                    <div class="row">
                        <div class="col p-0 m-0">
                            <input type="number" name="quantity" value="1" class="form-control form-control-sm ">
                        </div>
                        <div class="col  p-0 m-0">
                            <input type="submit" value="edit" class="edit-btn" name="edit_product_quantity_btn">
                        </div>
                    </div>
                    
                   
                </form>
            </td>
            <td class="text-right">
                <span class="product-price">$199</span>
            </td>
        </tr>
        <tr>
            <td></td>
            <th  class="text-bold" style="border-top:5px solid green">Total</th>
            <th class="text-right" style="border-top:5px solid green">$ 100</th>
        </tr>
    </table>
</section>
@endsection