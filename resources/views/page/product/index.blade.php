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
                                <button
                                    id="btn-product"
                                    class="btn btn-success float-right mt-4 d-flex justify-content-between align-items-center"
                                    style="width: 200px"
                                >
                                    <i class="fa fa-plus"></i>Add New Product
                                </button>
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
                                            <td style="width: 250px">Action</td>
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
                                                class="d-flex flex-row gap-2 align-items-center justify-content-center"
                                                style="height: 100%"
                                            >
                                                <a
                                                    id="btn-add"
                                                    class="btn btn-sm rounded-3 btn-success btn-block text-white"
                                                    ><i
                                                        class="fa fa-plus"
                                                        aria-hidden="true"
                                                    >
                                                    </i
                                                    >Add</a
                                                >
                                                <a
                                                    href="{{route('pro.edit', $p->id) }}"
                                                    class="btn btn-sm rounded-3 btn-warning btn-block text-white"
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
                                                        class="btn btn-sm rounded-3 btn-danger btn-block text-white"
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
        <!-- add product -->
        <div
            class="custom-modal d-none center-block"
            style="
                position: absolute;
                top: 50%;
                left: 50%;
                transform: translate(-50%, -30%);
            "
        >
            <div class="container-fluid" style="width: 1000px">
                <div class="app-content m-5">
                    <div class="card card-info card-outline mb-4">
                        <div class="card-header">
                            <div class="card-title">Add New Employee</div>
                        </div>
                        <form
                            action="{{ route('pro.store') }}"
                            class="needs-validation"
                            novalidate
                            method="POST"
                            enctype="multipart/form-data"
                        >
                            @csrf
                            <div class="card-body">
                                <div class="row g-3">
                                    <div class="col-md-6">
                                        <label
                                            for="validationCustom01"
                                            class="form-label"
                                            >Product Name</label
                                        >
                                        <input
                                            type="text"
                                            class="form-control"
                                            id="validationCustom01"
                                            value=""
                                            name="name"
                                            required
                                        />
                                        <div class="valid-feedback">
                                            Looks good!
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <label
                                            for="validationCustom04"
                                            class="form-label"
                                            >Category</label
                                        >
                                        <select
                                            class="form-select"
                                            id="validationCustom04"
                                            value=""
                                            name="category"
                                            required
                                        >
                                            @foreach($cate as $c)
                                            <option value="{{$c->id}}">
                                                {{$c->name}}
                                            </option>
                                            @endforeach
                                        </select>
                                        <div class="invalid-feedback">
                                            Please select a valid gender.
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <label
                                            for="validationCustom02"
                                            class="form-label"
                                            >Price</label
                                        >
                                        <input
                                            type="text"
                                            class="form-control"
                                            id="validationCustom02"
                                            value=""
                                            name="price"
                                            required
                                        />
                                        <div class="valid-feedback">
                                            Looks good!
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <label
                                            for="validationCustom05"
                                            class="form-label"
                                            >Photo</label
                                        >
                                        <input
                                            type="file"
                                            class="form-control custom-file-input"
                                            id="image"
                                            name="photo"
                                            accept=".jpg, .jpeg, .png"
                                        />
                                        <div class="invalid-feedback">
                                            Please provide a valid image.
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <img
                                            src=""
                                            class="rounded-3 float-start"
                                            alt=""
                                        />
                                    </div>
                                </div>
                            </div>
                            <div class="card-footer">
                                <button class="btn btn-info" type="submit">
                                    Submit form
                                </button>
                                <a id="btn-pro-close" class="btn btn-danger">
                                    Back to Employee Page
                                </a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- add qty -->
        <div
            id="custom-modal-add"
            class="d-none center-block"
            style="
                position: absolute;
                top: 50%;
                left: 50%;
                transform: translate(-50%, -30%);
            "
        >
            <div class="container-fluid" style="width: 1000px">
                <div class="app-content m-5">
                    <div class="card card-info card-outline mb-4">
                        <div class="card-header">
                            <div class="card-title">Add New Employee</div>
                        </div>
                        <form
                            action="{{ route('pro.store') }}"
                            class="needs-validation"
                            novalidate
                            method="POST"
                            enctype="multipart/form-data"
                        >
                            @csrf
                            <div class="card-body">
                                <div class="row g-3">
                                    <div class="col-md-6">
                                        <label
                                            for="validationCustom01"
                                            class="form-label"
                                            >Add Quantity</label
                                        >
                                        <input
                                            type="text"
                                            class="form-control"
                                            id="validationCustom01"
                                            value=""
                                            name="qty"
                                            required
                                        />
                                        <div class="valid-feedback">
                                            Looks good!
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <label
                                            for="validationCustom02"
                                            class="form-label"
                                            >Add Price</label
                                        >
                                        <input
                                            type="text"
                                            class="form-control"
                                            id="validationCustom02"
                                            value=""
                                            name="aprice"
                                            required
                                        />
                                        <div class="valid-feedback">
                                            Looks good!
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <img
                                            src=""
                                            class="rounded-3 float-start"
                                            alt=""
                                        />
                                    </div>
                                </div>
                            </div>
                            <div class="card-footer">
                                <button class="btn btn-info" type="submit">
                                    Submit form
                                </button>
                                <a id="btn-add-close" class="btn btn-danger">
                                    Back to Employee Page
                                </a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-layout>
