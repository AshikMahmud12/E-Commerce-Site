@extends('admin.master')
@section('body')
    <br/>
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-body">
                <!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <title>A simple, clean, and responsive HTML invoice template</title>
    
    <style>
    .invoice-box {
        max-width: 800px;
        margin: auto;
        padding: 30px;
        border: 1px solid #eee;
        box-shadow: 0 0 10px rgba(0, 0, 0, .15);
        font-size: 16px;
        line-height: 24px;
        font-family: 'Helvetica Neue', 'Helvetica', Helvetica, Arial, sans-serif;
        color: #555;
    }
    
    .invoice-box table {
        width: 100%;
        line-height: inherit;
        text-align: left;
    }
    
    .invoice-box table td {
        padding: 5px;
        vertical-align: top;
    }
    
    .invoice-box table tr td:nth-child(2) {
        text-align: right;
    }
    
    .invoice-box table tr.top table td {
        padding-bottom: 20px;
    }
    
    .invoice-box table tr.top table td.title {
        font-size: 45px;
        line-height: 45px;
        color: #333;
    }
    
    .invoice-box table tr.information table td {
        padding-bottom: 40px;
    }
    
    .invoice-box table tr.heading td {
        background: #eee;
        border-bottom: 1px solid #ddd;
        font-weight: bold;
    }
    
    .invoice-box table tr.details td {
        padding-bottom: 20px;
    }
    
    .invoice-box table tr.item td{
        border-bottom: 1px solid #eee;
    }
    
    .invoice-box table tr.item.last td {
        border-bottom: none;
    }
    
    .invoice-box table tr.total td:nth-child(2) {
        border-top: 2px solid #eee;
        font-weight: bold;
    }
    
    @media only screen and (max-width: 600px) {
        .invoice-box table tr.top table td {
            width: 100%;
            display: block;
            text-align: center;
        }
        
        .invoice-box table tr.information table td {
            width: 100%;
            display: block;
            text-align: center;
        }
    }
    
    /** RTL **/
    .rtl {
        direction: rtl;
        font-family: Tahoma, 'Helvetica Neue', 'Helvetica', Helvetica, Arial, sans-serif;
    }
    
    .rtl table {
        text-align: right;
    }
    
    .rtl table tr td:nth-child(2) {
        text-align: left;
    }
    </style>
</head>

<body>
    <div class="invoice-box">
        <table cellpadding="0" cellspacing="0">
            <tr class="top">
                <td colspan="2">
                    <table>
                        <tr>
                            <td class="title">
                                <img src="https://www.sparksuite.com/images/logo.png" style="width:100%; max-width:300px;">
                            </td>
                            
                            <td>
                                Invoice #: 0000{{ $order->id }}<br>
                                Date:{{ $order->created_at }} <br>
                                Amount Due: {{ $order->order_total }}
                            </td>
                        </tr>
                    </table>
                </td>
            </tr>
            
            <tr class="information">
                <td colspan="2">
                    
                    <table >
                        <tr>
                            <td>
                            <h4>Shipping Info </h4>
                                {{ $shipping->full_name }}<br>
                                {{ $shipping->address }}<br>
                                {{ $shipping->phone_number }}
                            </td>
                            
          



                            <td>
                            <h4>Billing Info </h4>
                            {{ $customer->first_name.' '.$customer->last_name }}  <br>
                               {{ $customer->address }}<br>
                               {{ $customer->phone_number }}
                            </td>
                        </tr>
                    </table>
                </td>
            </tr>
            
           
<thead>
<table class="table table-bordered">
<tr>
<th><span> Item </th></span>

<th><span> Rate </th></span>
<th><span> Quantity </th></span>
<th><span> Price </th></span>

</tr>
<thead>
<tbody>


@php($sum=0)
@foreach($orderDetails as $orderDetail)
<tr>  
<td><span> {{ $orderDetail->product_name }}</span></td>
<td><span data-prefix>Tk </span> <span> {{ $orderDetail->product_price }} </span></td>
<td><span> {{ $orderDetail->product_quantity }}</span><td>
<td><span data-prefix> TK</span><span> {{ $total = $orderDetail->product_price*$orderDetail->product_quantity }} </span></td>
</tr>
</table>
@php($sum=$sum+$total)

@endforeach
</tbody>

<table class="table table-bordered">      

<tr>
<th><span> Total </span></th>
<td><span data-prefix>TK</span><span>{{ $sum }}</span></td>

</tr>
</table>


    </div>
</body>
</html>

                </div>
            </div>
        </div>
    </div>
    
@endsection 