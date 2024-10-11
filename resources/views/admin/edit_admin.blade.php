@extends('admin.admin_layout')
@section('admin_content')

<div class="row">
    <div class="col-lg-12">
            <section class="panel">
                <header class="panel-heading">
                    Update admin into database
                </header>
                 <?php
                    $message = Session::get('message');
                    if($message){
                        echo '<span class="text-alert">'.$message.'</span>';
                        Session::put('message',null);
                    }
                    ?>
                <div class="panel-body">
                    {{-- @foreach($allArea as $key => $area) --}}

                    <div class="position-center">
                        <form role="form" action="{{URL::to('/updateAdmin/'.$editAdmin-> admin_id)}}" method="post">
                            {{ csrf_field() }}

                        <div class="form-group">
                            <label for="admin_id">admin_id</label>
                            <input type="text" value="{{ $editAdmin->admin_id }}" class="form-control" name="admin_id" id="admin_id">
                        </div>

                        <div class="form-group">
                            <label for="name">Tên khu vưc(name)</label>
                            <input type="text" value="{{ $editArea->areaName }}" class="form-control" name="areaName" id="areaName">
                        </div>
                       
                        <button type="submit" name="updateArea" class="btn btn-info">cập nhật khu vực </button>
                        </form>
                    </div>
                    {{-- @endforeach --}}
                </div>
            </section>
</div>    
@endsection
