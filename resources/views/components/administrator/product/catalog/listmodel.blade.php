<div>
    <div class="panel panel-default">
        <div class="panel-heading">
        List Product Category Model
         </div>
        <div class="panel-body">
            <div class="table-responsive">
                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                    <thead>
                        <tr>
                            <th>Brand </th>
                            <th>Model </th>
                            <th>Created at(s)</th>
                            <th>Updated at</th>
                            <th>Edit</th>
                            <th>Delete</th>
                        </tr>
                    </thead>
                    <tbody>
                    @foreach ($listmodels as $model)

                        <tr class="odd gradeX">
                            <td>
                                {{ $model->brand}}
                            </td>
                            <td>{{ $model->model}}</td>
                            <td> {{ $model->created_at}}</td>
                            <td class="center">{{ $model->updated_at}}</td>
                            <td class="center"> <a href="{{ $model->id}}" class="btn btn-primary"> Edit</a> </td>
                            <td class="center"> <a href="{{ $model->id}}" class="btn btn-danger"> delete</a> </td>
                        </tr>
                       @endforeach
                 
                    </tbody>
                </table>
            </div>

        </div>
    </div>

</div>
