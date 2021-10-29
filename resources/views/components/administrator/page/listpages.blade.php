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
                            <th>Page  </th>
                            <th>Description</th>
                            <th>Keywords </th>
                            <th>Category</th>
                            <th>Thumbnail  </th>
                            <th>Created at(s)</th>
                            <th>Updated at</th>
                            <th>Edit</th>
                            <th>Delete</th>
                        </tr>
                    </thead>
                    <tbody>
                    @foreach ($listPages as $page)

                        <tr class="odd gradeX">
                            <td> <a href="/View/{{ $page->pageName}}"> {{ $page->title}} </a></td>
                            <td>{{ $page->description}}</td>
                            <td>{{ $page->keywords}}</td>
                            <td>{{ $page->page_category}}</td>
                            <td> <img src="/ArticleImages/{{ $page->thumbnail}}" class="img-responsive" style="height:70px;" /> </td>
                            <td> {{ $page->created_at}}</td>
                            <td class="center">{{ $page->updated_at}}</td>
                            <td class="center"> <a href="/Pages/EditPage/{{ $page->id}}" class="btn btn-primary"> Edit</a> </td>
                            <td class="center"> <a href="/Pages/DeletePage/{{ $page->id}}" class="btn btn-danger"> delete</a> </td>
                        </tr>
                       @endforeach
                 
                    </tbody>
                </table>
            </div>

        </div>
    </div>

</div>