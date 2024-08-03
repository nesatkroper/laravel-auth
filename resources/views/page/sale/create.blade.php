<x-layout>
    <div
        class="custom-modal d-none center-block"
        style="
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -30%);
            transition: all 5s;
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
</x-layout>
