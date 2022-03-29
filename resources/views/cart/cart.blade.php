@extends('layouts.app')

@section('content')

<div>
    <h1 class="cart-title">Shopping Cart</h1>

</div>
<div class="table-container">
    <table border="1">
        <thead>
            <tr>
                <th scope="col">Name</th>
                <th scope="col">Details</th>
                <th scope="col">Price</th>
                <th scope="col">Quantity</th>
                <th scope="col">Total</th>
                <th scope="col">Delete</th>
            </tr>
        </thead>
        @if (session('cartItems'))
            @foreach (session('cartItems') as $key=>$value)
                <tbody>
                    <tr>
                        <td>
                            <div class="cart-img-box">
                                <img class="cart-img" src="{{ asset($value['image_path']) }}" alt="{{ $value['name'] }}">
                            </div>
                            <div>{{ $value['name'] }}</div>
                        </td>
                        <td><div>
                        {{ $value['details'] }}    
                        </div></td>
                        <td><span>{{ $value['price'] }}</span></td>
                        <td>
                                <form action="{{route('update.from.cart',$key)}}" method="POST">
                                @csrf
                                <select name="quantity" id="quantity" value="{{$value['quantity']}}" onChange="this.form.submit()">
                                    @for ($i = 1; $i <= 10; $i++)
                                        <option value="{{ $i }}" {{ $value['quantity'] == $i ? 'selected' : ''}}>
                                            {{ $i }}
                                        </option>
                                    @endfor
                                </select>
                                </form>

 
                        </td>
                        <td><div>$ {{$value['quantity'] * $value['price']}}</div></td>
                        <td><a href="{{ route('delete.from.cart', $key) }}" role="button">Delete</a></td>
                    </tr>
                </tbody>
            @endforeach
            @else
            <td class="empty-cart" colspan="6">
                <p>Shopping Cart is empty!</p>
            </td>
        @endif
    </table>
</div>

@endsection