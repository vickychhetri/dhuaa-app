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
                            <th>Category of the product </th>
                            <th>Description</th>
                            <th>Created at</th>
                            <th>Updated at</th>
                            <th>Edit</th>
                            <th>Delete</th>
                        </tr>
                    </thead>
                    <tbody>
                    @foreach ($listCategory as $cateType)

                        <tr class="odd gradeX">
                            <td>{{ $cateType->category}}</td>
                            <td>{{ $cateType->description}}</td>
                            <td> {{ $cateType->created_at}}</td>
                            <td class="center">{{ $cateType->updated_at}}</td>
                            <td class="center"> <a href="/Admin/Edit-ProductCategory/{{ $cateType->id}}" class="btn btn-primary"> Edit</a> </td>
                            <td class="center"> <a href="/Admin/delete-ProductCategory/{{ $cateType->id}}" class="btn btn-danger"> delete</a> </td>
                        </tr>
                       @endforeach
                 
                    </tbody>
                </table>
            </div>

        </div>
    </div>

</div>