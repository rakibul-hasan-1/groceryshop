<div>
    <main>
        <div class="container-fluid px-4">
            <h1 class="mt-4">Categories</h1>
            <ol class="breadcrumb mb-4">
                <li class="breadcrumb-item"><a href="{{route('admin.dashboard')}}">Dashboard</a></li>
                <li class="breadcrumb-item active">Categories</li>
            </ol>
            <div class="card mb-4">
                <div class="card-header">

                </div>
                <div class="card-body">
                    <table id="datatablesSimple">
                        <thead>
                            <tr>
                                <th>Serial No.</th>
                                <th>Name</th>
                                <th>Slug</th>
                            </tr>
                        </thead>
                        <tfoot>
                            <tr>
                                <th>Serial No.</th>
                                <th>Name</th>
                                <th>Slug</th>
                            </tr>
                        </tfoot>
                        <tbody>
                            @foreach ($category as $category)
                            <tr>
                                <td>{{$category->id}}</td>
                                <td>{{$category->name}}</td>
                                <td>{{$category->slug}}</td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </main>
</div>
