@extends('layouts.app')
@section('Title','Cart')
{{-- <h1>Shopping Cart</h1> --}}

@section('content')
<div class="container mt-lg-5">
    <table class="table table-hover table-condensed">
        <tbody>
        <thead>
            <th>Product</th>
            <th>Price</th>
            <th>Quantity</th>
            <th>Subtotal</th>
            <th></th>
        </thead>
        </tbody>
            <?php $total=0 ?>
            @if(session('cart'))
                @foreach(session('cart') as $id => $details)
                    <?php $total += $details['price'] * $details['quantity']?>

                    <tr>
                        <td>
                            <div class="row">
                                <div class="col-sm-3 hidden-xs">
                                    <img src="{{$details['image']}}" width="100" height="100" class="img-responsive"/>
                                </div>
                                <div class="col-sm-9 "> 
                                    <h5 >{{$details['name']}}</h5>
                                </div>
                                <td data-th="Price">Ksh {{ $details['price'] }}</td>
                                <td data-th="Quantity">
                                    <input type="number" value="{{ $details['quantity'] }}" class="form-control quantity" />
                                </td>
                                <td data-th="Subtotal" class="text-center">Ksh {{ $details['price'] * $details['quantity'] }}</td>
                                 <td class="actions" data-th="">
                                    <button class="btn btn-info btn-sm update-cart" data-id="{{ $id }}"><i class="fa fa-refresh"></i> Update Quantity</button>
                                    <button class="btn btn-danger btn-sm remove-from-cart" data-id="{{ $id }}"><i class="fa fa-trash-o"></i> Delete</button>
                                    
                                </td>
                        </td>
                    </tr>
                @endforeach
            @endif
        </tbody>
        <tfoot>
            {{-- <tr class="visible-xs">
                <td class="text-center"><strong>Total: Ksh{{ $total }}</strong></td>
            </tr> --}}
            <tr>
                
                <td colspan="3" class="hidden-xs"></td>
                <td class="hidden-xs text-right"><strong>Total: Ksh{{ $total }}</strong></td>
            </tr>
        </tfoot>
    </table>
    <a href="{{ url('/products') }}" class="btn btn-primary"><i class="fa fa-angle-left"></i> Continue Shopping</a>
<a href="{{ url('/checkout') }}" class="btn btn-primary float-right">Checkout <i class="fa fa-angle-right"></i> </a>
</div>
@endsection

@section('scripts')
 
 
    <script type="text/javascript">
 
        $(".update-cart").click(function (e) {
           e.preventDefault();
 
           var ele = $(this);
 
            $.ajax({
               url: '{{ url('update-cart') }}',
               method: "patch",
               data: {_token: '{{ csrf_token() }}', id: ele.attr("data-id"), quantity: ele.parents("tr").find(".quantity").val()},
               success: function (response) {
                   window.location.reload();
               }
            });
        });
 
        $(".remove-from-cart").click(function (e) {
            e.preventDefault();
            var ele = $(this);
 
            if(confirm("Are you sure you want to delete this product?")) {
                $.ajax({
                    url: '{{ url('remove-from-cart') }}',
                    method: "DELETE",
                    data: {_token: '{{ csrf_token() }}', id: ele.attr("data-id")},
                    success: function (response) {
                        window.location.reload();
                    }
                });
            }
        });
 
    </script>
 
@endsection

