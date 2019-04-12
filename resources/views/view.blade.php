@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header">View</div>
                <table class="table">
                  <thead>
                    <tr>
                      <th scope="col">#</th>
                      <th scope="col">Name</th>
                      <th scope="col">Address</th>
                      <th scope="col">Phone</th>
                      <th scope="col">Image</th>
                      <th scope="col">Edit</th>
                      <th scope="col">Delete</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php 
                        foreach ($cruds as $crud) {
                    ?>
                    <tr>
                      <th scope="row"><?php echo $crud->id ?></th>
                      <td><?php echo $crud->name ?></td>
                      <td><?php echo $crud->address ?></td>
                      <td><?php echo $crud->phone ?></td>
                      <td><?php echo $crud->image ?></td>
                      <td><a class="btn btn-primary" href="{{route('edit',$crud->id)}}">Edit</a></td>
                      <td>
                        <form method="POST" action="{{route('delete',$crud->id)}}">
                            @csrf
                            {{ method_field('DELETE') }}<button type="submit" class="btn btn-xs btn-block btn-danger">Delete</button>
                        </form>
                     </td>
                    </tr>

                    <?php } ?>

                  </tbody>
                </table>
             </div>
        </div>
    </div>
</div>
@endsection
