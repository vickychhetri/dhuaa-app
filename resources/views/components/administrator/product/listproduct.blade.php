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
                            <th>Product Name  </th>
                            <th>Size</th>
                            <th>Serv. Desc </th>
                            <th>UTQG</th>
                            <th>Image  </th>
                            <th>Created at(s)</th>
                            <th>Updated at</th>
                            <th>Edit</th>
                            <th>Delete</th>
                        </tr>
                    </thead>
                    <tbody>
                    @foreach ($listproductbase as $product)

                        <tr class="odd gradeX">
                            <td>{{ $product->productName}}</td>
                            <td>{{ $product->tireSize}}</td>
                            <td>{{ $product->servDesc}}</td>
                            <td>{{ $product->utqg}}</td>
                            <td> <img src="/productImages/{{ $product->productImage}}" class="img-responsive" style="height:70px;" /> </td>
                            <td> {{ $product->created_at}}</td>
                            <td class="center">{{ $product->updated_at}}</td>
                            <td class="center"> <a href="/Products/EditCompany/{{ $product->id}}" class="btn btn-primary"> Edit</a> </td>
                            <td class="center"> <a href="/Products/DeleteCompany/{{ $product->id}}" class="btn btn-danger"> delete</a> </td>
                        </tr>
                       @endforeach
                 
                    </tbody>
                </table>
            </div>

        </div>
    </div>

</div>