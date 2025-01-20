<x-app-layout>
    <div class="card">
            <div class="card-header d-flex justify-content-between">
                <h5>Company Details</h5>
                <a href="{{route('company.create')}}" class="btn btn-primary">Create Company</a>
            </div>
            <div class="card-body">
                <table class="table">
                    <thead>
                        <tr>
                            <th>SN</th>
                            <th>Logo</th>
                            <th>Company</th>
                            <th>Address</th>
                            <th>Email</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>{{$bhada->id}}</td>
                            <td>
                                <img src="{{asset($bhada->logo)}}" width="100" alt="">
                            </td>
                            <td>{{$bhada->name}}</td>
                            <td>{{$bhada->address}}</td>
                            <td>{{$bhada->email}}</td>
                            <td>
                                <a href="{{route('company.edit', $bhada->id)}}" class="btn btn-primary">Edit</a>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</x-app-layout>
