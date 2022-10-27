@extends('admin.app')
@section('admin')
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

    <div class="content-body">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">About Multi Image Page</h4>
                        </div>
                        <div class="card-body">
                            <div class="basic-form">
                                <form method="POST" action="{{ route('store.multi.image') }}" enctype="multipart/form-data"
                                    class="form-valide-with-icon needs-validation" >
                                    @csrf

                                    <input type="hidden" name="id"">

                                    <div class="mb-4" style="display :flex">
                                        <label class="form-control" for="validationCustomUsername"
                                            style="width: 150px ;padding:10px ;background-color:#ccc; font-size:15px;">
                                            About Multi Image
                                            <div class="input-group" style="margin-top: 15px;">                                   
                                                <input name="multi-image[]" id="image" type="file"
                                                    class="" style="margin-left: 30px;width:200px" multiple=""/>
                                            </div>
                                        </label>

                                        <div class="col-lg-4">
                                            <div class="card">
                                                <div class="card-body">
                                                    <img id="ProfileImage"
                                                        src="{{ url('upload/no_image.jpg') }}"
                                                        class="rounded-circle img-fluid" alt="profile_image">
                                                </div>
                                            </div>
                                        </div>
                                    </div>


                                    <button type="submit" class="mt-5 btn me-2 btn-primary">
                                        Submit
                                    </button>
                                    <button type="submit" class="mt-5 btn btn-light">
                                        Cancel
                                    </button>

                                </form>
                            </div>
                        </div>
                    </div>
                </div>

            </div>


        </div>
    </div>

    <script type="text/javascript">
        $(document).ready(function() {
            $('#image').change(function(e) {
                var reader = new FileReader();
                reader.onload = function(e) {
                    $('#ProfileImage').attr('src', e.target.result);
                }
                reader.readAsDataURL(e.target.files['0']);
            });
        });
    </script>
@endsection
