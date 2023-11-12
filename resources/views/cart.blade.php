{{-- <x-master :categories='$categories'> --}}
    <x-master>
        <x-slot:title>
            Camera World | Cart List
            </x-slot>

            <form action="{{route('orders.store')}}" method="POST">
                @csrf
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>SL#</th>
                            <th>Product</th>
                            <th>Qty</th>
                            <th>Unit Price</th>
                            <th class="text-center">Price</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach (auth()->user()->cartProducts as $key=>$cartProduct)
                        <tr>
                            <td>
                                <input type="hidden" name="products[{{$key}}][cart_product_id]"
                                    value="{{$cartProduct->id}}" />
                            <td>{{$loop->iteration}}</td>
                            <td>{{$cartProduct->product->title}}{{$cartProduct->color ? ' - '
                                .$cartProduct->color->name:null}}</td>

                            <td>
                                <div class="input-group flex-nowrap">
                                    <div class="input-group-text minus-btn">-</div>
                                    <input type="number" class="qty" value="{{$cartProduct->qty}}"
                                        name="products[{{$key}}][qty]">
                                    <div class="input-group-text plus-btn">+</div>
                                </div>
                            </td>
                            <td class="text-middle unit-price">{{$cartProduct->product->price}}</td>
                            <td class="price text-end">{{$cartProduct->qty*$cartProduct->product->price}}</td>
                            <td class="btn btn-sm btn-outline-danger mb-2 mt-1 remove-btn"
                                data-id="{{$cartProduct->id}}">
                                Remove</td>
                            </td>
                        </tr>
                        @endforeach
                        <tr>
                            <td colspan="4"></td>
                            <td>Total: <span id="totalPrice">0</span></td>
                        </tr>
                    </tbody>
                </table>

                <div class="py-3 py-md-4 checkout">
                    <div class="container">
                        <h4>Checkout</h4>
                        <hr>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="shadow bg-white p-3">
                                    <h4 class="text-primary">
                                        Basic Information
                                    </h4>
                                    <hr>
                                    <form action="{{route('checkout')}}" method="">
                                        <div class="row">
                                            <div class="col-md-6 mb-3">
                                                <label>Full Name</label>
                                                <input type="text" name="full_name" class="form-control"
                                                    placeholder="Enter Full Name" required />
                                            </div>
                                            <div class="col-md-6 mb-3">
                                                <label>Phone Number</label>
                                                <input type="number" name="contact_number" class="form-control"
                                                    placeholder="Enter Phone Number" required />
                                            </div>
                                            <div class="col-md-12 mb-3">
                                                <label>Full Address</label>
                                                <textarea name="shipping_address" class="form-control" rows="2"
                                                    required></textarea>
                                            </div>
                                            <div class="col-md-6 mb-3">
                                                <button class="btn btn-primary btn-block" name="">Place
                                                    Order</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </form>

            @push('script')
            <script>
                const removeBtn = document.querySelectorAll('.remove-btn');
                removeBtn.forEach(function(btn){
                    btn.addEventListener('click',function(){
                        const id = btn.getAttribute('data-id');

                        fetch('http://pondit-laravel.test/public/cart-products/'+id, {
                        method: 'DELETE',
                        headers: {
                            'X-CSRF-TOKEN': '{{csrf_token()}}'
                        }
                        })
                        .then(res => res.json())
                        .then(data => {
                            if(data.success == true){
                                btn.parentElement.remove();
                                updateTotalPrice();
                                alert(data.message)
                            }else {
                                alert('Somethings went wrong')
                            }
                        })
                        .catch(err => console.log(err));

                        

                    })
                })

                updateTotalPrice()

                function updateTotalPrice(){
                    const priceElement = document.querySelectorAll('.price');
                    let totalPrice = 0;
                    priceElement.forEach(function(element){
                        totalPrice += parseFloat(element.innerText);
                        document.getElementById('totalPrice').innerText = totalPrice
                        // console.log(totalPrice)
                })
                }
                
                const plusBtn = document.querySelectorAll('.plus-btn');

                plusBtn.forEach(function(btn){
                    btn.addEventListener('click', function(){

                        const qtyInput = this.previousElementSibling;

                        const updateQty = parseInt(qtyInput.value)+1;
                        
                        qtyInput.value = updateQty;
                        
                        const unitPriceElement = qtyInput.parentElement.parentElement.nextElementSibling;

                        const updatePrice = parseFloat(unitPriceElement.innerText) * updateQty;

                        unitPriceElement.nextElementSibling.innerText = updatePrice;

                        // console.log(updatePrice);
                        updateTotalPrice();
                    })
                })
                
                const minusBtn = document.querySelectorAll('.minus-btn');

                minusBtn.forEach(function(btn){
                    btn.addEventListener('click', function(){
                        const qtyInput = this.nextElementSibling;
                        if(qtyInput.value == 1){
                            alert('Minimum Quantity must be 1');
                            return;
                        }

                        const updateQty = parseInt(qtyInput.value)-1;
                        qtyInput.value = updateQty;

                        const unitPriceElement = qtyInput.parentElement.parentElement.nextElementSibling;

                        const updatePrice = parseFloat(unitPriceElement.innerText) * updateQty;

                        unitPriceElement.nextElementSibling.innerText = updatePrice;
                        updateTotalPrice();
                    })
                })
                
            </script>
            @endpush

    </x-master>