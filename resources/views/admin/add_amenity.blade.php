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
                        
                        {{-- <div class="form-group">
                            <label for="icon">icon</label>
                            <input type="text" class="form-control" name="icon"  id="icon" >
                        </div>
                        <div class="form-group">
                            <label for="icon">icon</label>
                            <textarea class="form-control tiny" name="icon" id="icon" cols="30" rows="10"></textarea>
                        </div> --}}
                        <div class="form-group">
                            <label>Choose Icon Type</label>
                            <div>
                                <label>
                                    <input type="radio" name="iconType" value="svg" checked>
                                    SVG
                                </label>
                                <br>
                                <label>
                                    <input type="radio" name="iconType" value="more">
                                    More
                                </label>
                            </div>
                        </div>
                        
                        <div class="form-group" id="svgIconGroup">
                            <label for="svgIcon">SVG Icon</label>
                            <input type="text" class="form-control" name="svgIcon" id="svgIcon">
                        </div>
                        
                        <div class="form-group" id="moreIconGroup" style="display: none;">
                            <label for="moreIcon">More Icon</label>
                            <textarea class="form-control tiny" name="moreIcon" id="moreIcon" cols="30" rows="10"></textarea>
                        </div>
                        
                        <button type="submit" name="addAmenity" class="btn btn-info">Add amenity</button>
                        </form>
                    </div>

                </div>
            </section>
            <script>
                document.addEventListener("DOMContentLoaded", function () {
                    const iconTypeRadios = document.querySelectorAll('input[name="iconType"]');
                    const svgIconGroup = document.getElementById("svgIconGroup");
                    const moreIconGroup = document.getElementById("moreIconGroup");

                    iconTypeRadios.forEach((radio) => {
                        radio.addEventListener("change", function () {
                            if (this.value === "svg") {
                                svgIconGroup.style.display = "block";
                                moreIconGroup.style.display = "none";
                            } else if (this.value === "more") {
                                svgIconGroup.style.display = "none";
                                moreIconGroup.style.display = "block";
                            }
                        });
                    });
                });


            </script>
            
</div>    
@endsection