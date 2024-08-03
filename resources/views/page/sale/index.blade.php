<x-layout>
    <div
        class="product p-3"
        style="background-color: rgb(235, 234, 234); height: 100vh"
    >
        <div class="row">
            <div class="col-md-9">
                <div class="row">
                    @foreach($sale as $s)
                    <!-- product items -->
                    <a
                        class="col-md-3 text-decoration-none text-black hover-grow"
                        href="{{ route('sale.increase') }}"
                    >
                        <div
                            class="ml-1 mt-3 p-2 rounded-4 shadow bg-white d-flex flex-row justify-content-between"
                            style="height: 120px"
                        >
                            <div
                                class="pro-img rounded-3 d-flex justify-content-center"
                                style="background-color: rgb(226, 225, 225)"
                            >
                                <img
                                    src="{{ url('uploads/product/'.$s->photo) }}"
                                    class="img rounded-3"
                                    style="width: 100px"
                                    alt="true"
                                />
                            </div>
                            <div
                                class="detail d-flex flex-column align-items-center p-2 mx-auto"
                            >
                                <div class="title fw-bold fs-5">
                                    {{$s->name}}
                                </div>
                                <div class="amunt fs-6 text-danger fw-bold">
                                    $ {{$s->price}}
                                </div>
                                <div class="amunt fs-6">
                                    QTY: {{$s->qty}} pcs
                                </div>
                            </div>
                        </div>
                    </a>
                    @endforeach
                </div>
            </div>
            <div class="col-md-3" style="height: 90vh">
                <div
                    class="row card shadow h-100 w-100 rounded-4 bg-white text-gray-50"
                >
                    <div class="card-header">
                        <span class="fs-4 fw-bold">Order Items</span>
                    </div>
                    <div class="card-body">
                        <div
                            class="shadow pro-item card d-flex flex-row p-1 justify-content-between"
                        >
                            <div class="pro-content">
                                <img
                                    style="width: 50px"
                                    class="rounded-3"
                                    src="{{ url('uploads/product/'.$s->photo) }}"
                                    alt="true"
                                />
                                <span class="title fw-bold">{{$s->name}}</span>
                            </div>
                            <div
                                class="pro-price d-flex flex-column justify-content-center align-items-center"
                                style="width: 100px"
                            >
                                <span class="fw-bold fs-6 text-danger"
                                    >$ {{$s->price}}</span
                                >
                                <div class="qty">
                                    <i class="fa fa-minus"></i>
                                    <span class="fs-6 fw-bold"> 2 </span>
                                    <i id="plus" class="fa fa-plus"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-layout>
