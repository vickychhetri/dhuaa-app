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
                            <th>Diameter</th>
                            <th>Max Inflation</th>
                            <th>Rim Width</th>
                            <th>Created at(s)</th>
                            <th>Updated at</th>
                          
                            <th>Delete</th>
                        </tr>
                    </thead>
                    <tbody>
                    @foreach ($listSpecification as $specification)

                        <tr class="odd gradeX">
                            <td>{{ $specification->diameter}}</td>
                            <td>{{ $specification->maxInflation}}</td>
                            <td> {{ $specification->rimWidth}} </td>
                            <td> {{ $specification->created_at}}</td>
                            <td class="center">{{ $specification->updated_at}}</td>
                            <td class="center"> <a href="/Admin/Product/Delete-Addtional-Specification/{{$specification->id}}" class="btn btn-danger"> delete</a> </td>
                        </tr>
                       @endforeach
                 
                    </tbody>
                </table>
            </div>

        </div>
    </div>

</div>