<div>
    <div class="panel panel-default">
        <div class="panel-heading">
        List Product Category Brand
         </div>
        <div class="panel-body">
            <div class="table-responsive">
                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                    <thead>
                        <tr>
                            <th>Years </th>
                            <th>Brand </th>
                            <th>Created at(s)</th>
                            <th>Updated at</th>
                            <th>Edit</th>
                            <th>Delete</th>
                        </tr>
                    </thead>
                    <tbody>
                    @foreach ($listbrands as $brand)

                        <tr class="odd gradeX">
                            <td>
                                {{ $brand->year}}
                            </td>
                            <td>{{ $brand->brand}}</td>
                            <td> {{ $brand->created_at}}</td>
                            <td class="center">{{ $brand->updated_at}}</td>
                            <td class="center"> <a href="{{ $brand->id}}" class="btn btn-primary"> Edit</a> </td>
                            <td class="center"> <a href="{{ $brand->id}}" class="btn btn-danger"> delete</a> </td>
                        </tr>
                       @endforeach
                 
                    </tbody>
                </table>
            </div>

        </div>
    </div>

</div>
