@extends('layouts.admin')
@section('admin_content')
    <div class="container">
        <div class="row">
            <div class="col-md-12 p-5">
            <div class="panel panel-primary">
                        <div class="panel-heading">
                            <div class="col-md-9 heading_title">
                                Order Information
                             </div>
                            <div class="clearfix"></div>
                        </div>
                      <div class="panel-body">
                          <div class="col-md-1">
                          </div>
                          <div class="col-md-9">
                          	<table class="table">

                            	<tr>
                                    <td>Order ID</td>
                                    <td>:</td>
                                    <td>{{ $order_id }}</td>
                                </tr>

                                <tr>
                                    <td>Order By</td>
                                    <td>:</td>
                                    <td>{{ $shipping_data->full_name }}</td>
                                </tr>

                                <tr>
                                    <td>Order Status</td>
                                    <td>:</td>
                                    <td>{{ $shipping_data->order_status == 0 ? 'Pending' : 'Completed' }}</td>
                                </tr>

                                <tr>
                                    <td>Order Date</td>
                                    <td>:</td>
                                    <td>{{ $shipping_data->created_at = date('M d, Y') }}</td>
                                </tr>

                                <tr>
                                    <td>Order Time</td>
                                    <td>:</td>
                                    <td>{{ $shipping_data->updated_at->format('h:i:s A') }}</td>
                                </tr>


                                

                            </table>



                            <div class="container">
                                <div class="row">
                                    <div class="col-md-8">
                                        <table class="table text-center table-hover table-striped table-responsive ">

                                        <tr>
                                                <td colspan="3" style="text-align:center">Product Details</td>
                                        </tr>

                                        <tr>
                                            <td>Product Name</td>
                                            <td>Product Quantity</td>
                                            <td>Product Price</td>
                                            <td>Total Price</td>
                                        </tr>


                                        @foreach($order_all_details as $order_single_details)

                                        <tr>
                                            <td>{{ $order_single_details['product_name'] }}</td>
                                            <td>{{ $order_single_details['quantity'] }}</td>
                                            <td>&#x9f3;{{ $order_single_details['price'] }}</td>
                                            <td>&#x9f3;{{ $order_single_details['price']*$order_single_details['quantity'] }}</td>
                                            
                                        </tr>

                                        


                                        @endforeach

                                        <tr>
                                            <td colspan="4" style="text-align:right"> Total: &#x9f3;{{ $shipping_data['total_amount'] }}/= Taka Only</td>
                                        </tr>





                                        </table>
                                    </div>
                                </div>
                            </div>
                          </div>
                          <div class="col-md-2">
                          </div>
                      </div>

            </div>
        </div>
    </div>
@endsection