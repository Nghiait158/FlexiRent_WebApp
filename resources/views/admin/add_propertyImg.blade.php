@extends('admin.admin_layout')
@section('admin_content')

<div class="row">
    <div class="col-lg-12">
        <section class="panel">
            <header class="panel-heading">
                Add img of --{{ $property ? $property->property_name : 'N/A' }}-- into database
            </header>
            <?php
                $message = Session::get('message');
                if($message){
                    echo '<span class="text-alert">'.$message.'</span>';
                    Session::put('message', null);
                }
            ?>
            <div class="panel-body">
                <div class="position-center">
                    <form role="form" action="{{ URL::to('/savePropertyImg/' . $property->property_id) }}" method="post">
                        {{ csrf_field() }}
                        <div class="form-group">
                            <label for="propertyImg_name">propertyImg_name</label>
                            <input type="text" class="form-control" name="propertyImg_name" id="propertyImg_name" required>
                        </div>
                        <div class="form-group">
                            <label for="property_id">(property_id)</label>
                            <input type="text" class="form-control" name="property_id" id="property_id" value="{{ $property->property_id }}" readonly>
                        </div>
                        {{-- <div class="form-group">
                            <label for="path">path</label>
                            <input type="text" class="form-control" name="path" id="path" required>
                        </div> --}}
                        <div class="form-group">
                            <label for="imageChoice">Select how to import images:</label><br>
                            <input type="radio" id="fileOption" name="imageChoice" value="file" checked>
                            <label for="fileOption">Upload from computer</label><br>
                            <input type="radio" id="textOption" name="imageChoice" value="text">
                            <label for="textOption">Enter image URL</label>
                        </div>
                        
                        <div class="form-group" id="fileInput">
                            <label for="PropertyImgPath">Select Image</label>
                            <input type="file" class="form-control" name="PropertyImgPath" id="PropertyImgPath">
                        </div>
                        
                        <div class="form-group" id="textInput" style="display: none;">
                            <label for="PropertyImgUrl">Enter image URL</label>
                            <input type="text" class="form-control" name="PropertyImgUrl" id="PropertyImgUrl">
                        </div>
                        
                        <button type="submit" name="addPropertyImg" class="btn btn-info">Add Img</button>
                    </form>
                </div>
                <script>
                    document.addEventListener('DOMContentLoaded', function () {
                        const fileOption = document.getElementById('fileOption');
                        const textOption = document.getElementById('textOption');
                        const fileInput = document.getElementById('fileInput');
                        const textInput = document.getElementById('textInput');

                        fileOption.addEventListener('change', function () {
                            fileInput.style.display = 'block';
                            textInput.style.display = 'none';
                        });

                        textOption.addEventListener('change', function () {
                            fileInput.style.display = 'none';
                            textInput.style.display = 'block';
                        });
                    });

                </script>
            </div>
        </section>
    </div>    
</div>

@endsection
