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
                            <th>Product Type </th>
                            <th>Description</th>
                            <th>Created at(s)</th>
                            <th>Updated at</th>
                            <th>Edit</th>
                            <th>Delete</th>
                        </tr>
                    </thead>
                    <tbody>
                    @foreach ($listValidProdcutType as $productType)

                        <tr class="odd gradeX">
                            <td>{{ $productType->typeName}}</td>
                            <td>{{ $productType->description}}</td>
                            <td> {{ $productType->created_at}}</td>
                            <td class="center">{{ $productType->updated_at}}</td>
                            <td class="center"> <a href="/Products/EditProductType/{{ $productType->id}}" class="btn btn-primary"> Edit</a> </td>
                            <td class="center"> <a href="/Products/DeleteProductType/{{ $productType->id}}" class="btn btn-danger"> delete</a> </td>
                        </tr>
                       @endforeach
                 
                    </tbody>
                </table>
            </div>

        </div>
    </div>

</div>