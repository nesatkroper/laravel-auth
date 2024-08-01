<x-layout>
    <div class="container-fluid">
        <div class="app-content mt-4">
            <div class="container-fluid">
                <div class="row">
                    <div class="card mb-4">
                        <div
                            class="card-header d-flex flex-column justify-content-between"
                        >
                            <h3 class="card-title fw-bold">Employee</h3>
                            <a
                                href="{{ route('emp.create') }}"
                                class="btn btn-success float-right mt-4 d-flex justify-content-between align-items-center"
                                style="width: 200px"
                                ><i class="fa fa-plus"></i>Add New Employee</a
                            >
                        </div>
                        <div class="card-body p-0">
                            <table class="table table-striped">
                                <thead>
                                    <tr class="text-center fw-bold">
                                        <th style="width: 10px">#</th>
                                        <th>Photo</th>
                                        <th>Name</th>
                                        <th>Gender</th>
                                        <td>Email</td>
                                        <td>Mobile</td>
                                        <td>Address</td>
                                        <td>POB</td>
                                        <td>DOB</td>
                                        <td>Status</td>
                                        <td style="width: 170px">Action</td>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($emp as $e)
                                    <tr class="align-middle text-center">
                                        <td>{{ $loop->iteration }}</td>
                                        @if ($e->photo)
                                        <td>
                                            <img
                                                class="rounded-3"
                                                style="height: 60px"
                                                src="{{ url('uploads/employee/'.$e->photo) }}"
                                                alt=""
                                            />
                                        </td>
                                        @else
                                        <td>
                                            <img
                                                class="rounded-3"
                                                style="height: 50px !important"
                                                src="{{
                                                    url('image/profile.jpg')
                                                }}"
                                                alt=""
                                            />
                                        </td>
                                        @endif
                                        <td>{{($e->fname.' '.$e->lname)}}</td>
                                        <td>{{$e->gender}}</td>
                                        <td>{{$e->email}}</td>
                                        <td>{{$e->mobile}}</td>
                                        <td>{{$e->address}}</td>
                                        <td>{{$e->pob}}</td>
                                        <td>{{$e->dob}}</td>
                                        <td class="status">{{$e->status}}</td>
                                        <td
                                            class="d-flex flex-row gap-2 align-items-center justify-content-center"
                                            style="height: 100%"
                                        >
                                            <a
                                                href="{{route('emp.edit', $e->id) }}"
                                                class="btn btn-sm rounded-3 btn-warning btn-block text-white"
                                                ><i
                                                    class="fa fa-pencil"
                                                    aria-hidden="true"
                                                >
                                                </i
                                                >Edit</a
                                            >
                                            <form
                                                action="{{route('emp.destroy',$e->id)}}"
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
</x-layout>
