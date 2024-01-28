@extends('layout.header')

@section('css')

<link rel="stylesheet" type="text/css" href="{{asset('/app-assets/css/plugins/forms/form-validation.css')}}">

<link rel="stylesheet" type="text/css" href="{{asset('/app-assets/vendors/css/editors/quill/quill.snow.css')}}">

@endsection

@section('breadcrumb')

    <h2 class="content-header-title float-left mb-0">Terms</h2>

    <div class="breadcrumb-wrapper">

        <ol class="breadcrumb">

            <li class="breadcrumb-item"><a href="{{url('admin/descriptions')}}">Terms</a>

            </li>

            <li class="breadcrumb-item"><a href="#">{{$data['page_title']}}</a>

            </li>

        </ol>

    </div>

@endsection

@section('content')

<div class="content-body">

    <section id="basic-input">

        <div class="card">

            <div class="card-body">

                <form action="{{ url('admin/savedescription') }}" class="" id="form_submit" method="post">

                    {{ csrf_field() }}
                    <div class="row">
                        <div class="col-md-12 col-12">
                            <div class="form-group" id="full-container">
                                <label for="exampleFormControlTextarea1">Description</label>
                                <div id="full-container">
                                    <div class="editor">
                                        <?=(isset($data['results']->description) ? $data['results']->description : '')?>
                                    </div>
                                </div>
                                <textarea class="form-control d-none" name="description">
                                    {{(isset($data['results']->description) ? $data['results']->description : '')}}
                                </textarea>
                            </div>
                        </div>
                    </div>

                    <input class="form-control" name="id" type="hidden" value="{{(isset($data['results']->id) ? $data['results']->id : '')}}">

                    <button type="submit" class="btn btn-primary mb-1 mb-sm-0 mr-0 mr-sm-1 savedescription">Save Changes</button>

                    <a href="{{url('admin/descriptions')}}" class="btn btn-outline-secondary">Back</a>
                </form>
            </div>
        </div>
 </section>

</div>

@endsection

@section('js')


<script src="{{asset('/app-assets/vendors/js/editors/quill/katex.min.js')}}"></script>
 <script src="{{asset('/app-assets/vendors/js/editors/quill/highlight.min.js')}}"></script>
<script src="{{asset('/app-assets/vendors/js/editors/quill/quill.min.js')}}"></script>
<script src="{{asset('/app-assets/js/scripts/forms/form-quill-editor.js')}}"></script>

    <script src="{{asset('/app-assets/vendors/js/forms/validation/jquery.validate.min.js')}}"></script>

    <script type="text/javascript">

        $('.usermgt').addClass('sidebar-group-active');

        $('.roles').addClass('active');
        $('#form_submit').validate({

            rules: {

                'role_title': {

                    required: true

                },

            }

        });
        $(document).on('click','.savedescription',function(e) {
            e.preventDefault();
            $('textarea[name=description]').val($('.ql-editor').html());
            $('#form_submit').submit();
        });
    </script>

    @endsection

