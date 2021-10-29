<div>
    <style>
        .control-label{
            text-align: end;
    font-weight: 600;
    font-size: 21px;
        }

    </style>
    <main>
        <div class="container-fluid px-4">
            <h1 class="mt-4">Add New Categories</h1>
            <ol class="breadcrumb mb-4">
                <li class="breadcrumb-item"><a href="{{route('admin.dashboard')}}">Dashboard</a></li>
                <li class="breadcrumb-item active">Add Categories</li>
            </ol>
            <div class="card mb-4">
                <div class="card-header">

                </div>
                <div class="card-body">
                    @if(Session::has('message'))
                    <div class="alert alert-success">{{Session::get('message')}}</div>
                    @endif
                    <form action="" class="form-inline" wire:submit.prevent="storeCategory">
                        <div class="row form-group">
                            <label for="name" class="col-md-4 control-label">Name:</label>
                            <div class="col-md-4">
                                <input type="text" name="name" class="form-control input-md" placeholder="Category Name" wire:model="name" wire:keyup="generateSlug">
                                @error('name')
                                    <p class="alert alert-danger" role="text">{{$message}}</p>
                                @enderror
                            </div>
                        </div>
                        <br>
                        <div class="row form-group">
                            <label for="slug" class="col-md-4 control-label">Slug:</label>
                            <div class="col-md-4">
                                <input type="text" name="slug" class="form-control input-md" placeholder="Category Slug" wire:model="slug">
                                @error('slug')
                                    <p class="alert alert-danger" role="text">{{$message}}</p>
                                @enderror
                            </div>
                        </div>
                        <br>
                        <div class="row form-group">
                            <label for="" class="col-md-4 control-label"></label>
                            <div class="col-md-4">
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </main>
</div>
