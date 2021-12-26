<div>
    <div class="panel panel-default">
        <div class="panel-heading">
            List Product Category Model Option
        </div>
        <div class="panel-body">
            <div class="table-responsive">
                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                    <thead>
                        <tr>
                            <th>Option Name</th>
                            <th>Brand </th>
                            <th>Model </th>
                            <th>Year </th>
                            <th>Created at(s)</th>
                            <th>Updated at</th>
                            <th>Edit</th>
                            <th>Delete</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($listmodeloptions as $modeloption)

                        <tr class="odd gradeX">
                            <td>
                                {{ $modeloption->optionM}}
                            </td>
                            <td>
                                {{ $modeloption->brand}}
                            </td>
                            <td>
                                {{ $modeloption->year}}
                            </td>
                            <td>{{ $modeloption->model}}</td>
                            <td> {{ $modeloption->created_at}}</td>
                            <td class="center">{{ $model->updated_at}}</td>
                            <td class="center"> <a href="{{ $modeloption->id}}" class="btn btn-primary"> Edit</a> </td>
                            <td class="center"> <a href="{{ $modeloption->id}}" class="btn btn-danger"> delete</a> </td>
                        </tr>
                        @endforeach

                    </tbody>
                </table>
            </div>

        </div>
    </div>

</div>