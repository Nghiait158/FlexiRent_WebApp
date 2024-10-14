@extends('admin.admin_layout')
@section('admin_content')

<div class="row">
    <div class="col-lg-12">
            <section class="panel">
                <header class="panel-heading">
                   add-amenity-into-DB
                </header>
                 <?php
                    $message = Session::get('message');
                    if($message){
                        echo '<span class="text-alert">'.$message.'</span>';
                        Session::put('message',null);
                    }
                    ?>
                <div class="panel-body">

                    <div class="position-center">
                        <form role="form" action="{{URL::to('/saveAmenity')}}" method="post">
                            {{ csrf_field() }}
                         <div class="form-group">
                                <label for="amenity_id">amenity_id</label>
                                <input type="text" class="form-control" name="amenity_id"  id="amenity_id">
                        </div>
                        <div class="form-group">
                            <label for="amenity_name">amenity_name</label>
                            <input type="text" class="form-control" name="amenity_name"  id="amenity_name"  >
                        </div>
                        <div class="form-group">
                            <label for="icon">icon</label>
                            <input type="text" class="form-control" name="icon"  id="icon" >
                        </div>

                        <button type="submit" name="addAmenity" class="btn btn-info">Add amenity</button>
                        </form>
                    </div>

                </div>
            </section>
</div>    
@endsection