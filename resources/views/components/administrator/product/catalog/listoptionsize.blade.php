<div>
    <div class="panel panel-default">
        <div class="panel-heading">
            List Product Category Model Option Size
        </div>
        <div class="panel-body">
            <div class="table-responsive">
                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                    <thead>
                        <tr>
                            <th>Size</th>
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
                        @foreach ($listmodeloptionsize as $modeloptionsize)

                        <tr class="odd gradeX">
                        <td>
                                {{ $modeloptionsize->size}}
                            </td>  
                        <td>
                                {{ $modeloptionsize->optionM}}
                            </td>
                            <td>
                                {{ $modeloptionsize->brand}}
                            </td>
                            <td>
                                {{ $modeloptionsize->year}}
                            </td>
                            <td>{{ $modeloptionsize->model}}</td>
                            <td> {{ $modeloptionsize->created_at}}</td>
                            <td class="center">{{ $modeloptionsize->updated_at}}</td>
                            <td class="center"> <a href="{{ $modeloptionsize->id}}" class="btn btn-primary"> Edit</a> </td>
                            <td class="center"> <a href="{{ $modeloptionsize->id}}" class="btn btn-danger"> delete</a> </td>
                        </tr>
                        @endforeach

                    </tbody>
                </table>
            </div>

        </div>
    </div>

</div>