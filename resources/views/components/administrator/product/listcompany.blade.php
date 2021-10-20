<div>
    <div class="panel panel-default">
        <div class="panel-heading">
        List Product Category
        </div>
        <div class="panel-body">
            <div class="table-responsive">
                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                    <thead>
                        <tr>
                            <th>Company  </th>
                            <th>Description</th>
                            <th>Company Type </th>
                            <th>Country</th>
                            <th>Logo  </th>
                            <th>Created at(s)</th>
                            <th>Updated at</th>
                            <th>Edit</th>
                            <th>Delete</th>
                        </tr>
                    </thead>
                    <tbody>
                    @foreach ($listCompany as $company)

                        <tr class="odd gradeX">
                            <td>{{ $company->companyName}}</td>
                            <td>{{ $company->description}}</td>
                            <td>{{ $company->typeCompany}}</td>
                            <td>{{ $company->country}}</td>
                            <td> <img src="/companyImages/{{ $company->logo}}" class="img-responsive" style="height:70px;" /> </td>
                            <td> {{ $company->created_at}}</td>
                            <td class="center">{{ $company->updated_at}}</td>
                            <td class="center"> <a href="/Products/EditCompany/{{ $company->id}}" class="btn btn-primary"> Edit</a> </td>
                            <td class="center"> <a href="/Products/DeleteCompany/{{ $company->id}}" class="btn btn-danger"> delete</a> </td>
                        </tr>
                       @endforeach
                 
                    </tbody>
                </table>
            </div>

        </div>
    </div>

</div>