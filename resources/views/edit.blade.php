@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header">Data Edit</div>

                <form style="padding: 20px;" action="{{ route('edit_save', $crud->id) }}" method="post">
                    @csrf
                  <div class="form-group">
                    <label for="exampleInputEmail1">Name</label>
                    <input type="text" name="name" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="<?php echo $crud->name ?>">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Address</label>
                    <input type="text" name="address" class="form-control" id="exampleInputPassword1" value="<?php echo $crud->address ?>">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Phone</label>
                    <input type="text" name="phone" class="form-control" id="exampleInputPassword1" value="<?php echo $crud->phone ?>">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Photo</label>
                    <input type="file" name="image" class="form-control" id="exampleInputPassword1" value="<?php echo $crud->image ?>">
                  </div>
                  <button type="submit" class="btn btn-primary">Submit</button>
                </form>
             </div>
        </div>
    </div>
</div>
@endsection
