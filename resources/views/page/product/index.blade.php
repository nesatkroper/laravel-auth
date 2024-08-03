<x-layout>
    <div class="parent" style="position: relative">
        <div id="product-page" class="container-fluid">
            <div class="app-content mt-4">
                <div class="container-fluid">
                    <div class="row">
                        <div class="card mb-4">
                            <div
                                class="card-header d-flex flex-column justify-content-between"
                            >
                                <h3 class="card-title fw-bold">Product</h3>
                                <a
                                    href="{{ route('pro.create') }}"
                                    class="btn btn-success float-right mt-4 d-flex justify-content-between align-items-center"
                                    style="width: 200px"
                                    ><i class="fa fa-plus"></i>Add New
                                    Product</a
                                >
                            </div>
                            <div class="card-body p-0">
                                <table class="table table-striped">
                                    <thead>
                                        <tr class="text-center fw-bold">
                                            <th style="width: 10px">#</th>
                                            <th>Photo</th>
                                            <th>Name</th>
                                            <th>Category</th>
                                            <td>Price</td>
                                            <td>Quantity</td>
                                            <td class="" style="width: 250px">
                                                Action
                                            </td>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($pro as $p)
                                        <tr class="align-middle text-center">
                                            <td>{{ $loop->iteration }}</td>
                                            @if ($p->photo)
                                            <td>
                                                <img
                                                    class="rounded-3"
                                                    style="height: 60px"
                                                    src="{{ url('uploads/product/'.$p->photo) }}"
                                                    alt=""
                                                />
                                            </td>
                                            @else
                                            <td>
                                                <img
                                                    class="rounded-3"
                                                    style="
                                                        height: 50px !important;
                                                    "
                                                    src="{{
                                                        url('image/profile.jpg')
                                                    }}"
                                                    alt=""
                                                />
                                            </td>
                                            @endif
                                            <!-- <td>{{$p->photo}}</td> -->
                                            <td>{{$p->name}}</td>
                                            <td>{{$p->cate}}</td>
                                            <td>$ {{$p->price}}</td>
                                            <td>{{$p->qty}}.00 pcs</td>
                                            <td
                                                class="d-flex flex-row justify-content-between"
                                            >
                                                <a
                                                    id="btn-add"
                                                    class="btn btn-sm rounded-3 btn-success text-white"
                                                    ><i
                                                        class="fa fa-plus"
                                                        aria-hidden="true"
                                                    >
                                                    </i
                                                    >Add</a
                                                >
                                                <a
                                                    href="{{route('pro.edit', $p->id) }}"
                                                    class="btn btn-sm rounded-3 btn-warning text-white"
                                                    ><i
                                                        class="fa fa-pencil"
                                                        aria-hidden="true"
                                                    >
                                                    </i
                                                    >Edit</a
                                                >
                                                <form
                                                    action="{{route('pro.destroy',$p->id)}}"
                                                    method="POST"
                                                >
                                                    @csrf @method('DELETE')

                                                    <button
                                                        onclick="return confirm('Are you sure you want to delete this record?')"
                                                        type="submit"
                                                        href="#"
                                                        class="btn btn-sm rounded-3 btn-danger text-white"
                                                    >
                                                        <i
                                                            class="fa fa-trash"
                                                            aria-hidden="true"
                                                        ></i
                                                        >Delete
                                                    </button>
                                                </form>
                                            </td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-layout>
