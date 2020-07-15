<div class="jumbotron">
    @if(!empty($content_data['content-image']))
    <img src="{{ url(array_get($content_data,'content-image','')) }}" class="jumbo-img"/>
    @else
    <img src="{{ url('assets/images/jumbo-image.jpeg') }}" class="jumbo-img"/>
    @endif
</div>
<div class="editable-form">
    <div class="row">
        <div class="col-md-12 col-lg-12">
            <form>
                <div class="row">
                    <div class="col-12 text-center">
                        <p id="form-intro-text">Please fill up this form!</p>
                    </div>
                </div>
                <br/>
                <div class="row">
                    @if(!empty($content_data['input-details']))
                    @foreach($content_data['input-details'] as $key => $val)
                    <div class="col-6 input-{{ $key }}">
                        <div class="form-group">
                            <label for="{{ array_get($val,'name','') }}">{{ array_get($val,'name','') }}</label>
                            <input type="{{ array_get($val,'type','') }}" class="form-control" id="{{ array_get($val,'name','') }}" name="{{ array_get($val,'name','') }}" disabled>
                        </div>
                    </div>
                    @endforeach
                    @else
                    <div class="col-6 input-1">
                        <div class="form-group">
                            <label for="input-1">Input Label 1</label>
                            <input type="text" class="form-control" id="input-1" name="input-1" disabled>
                        </div>
                    </div>
                    <div class="col-6 input-2">
                        <div class="form-group">
                            <label for="input-2">Input Label 2</label>
                            <input type="text" class="form-control" id="input-2" name="input-2" disabled>
                        </div>
                    </div>
                    <div class="col-6 input-3">
                        <div class="form-group">
                            <label for="input-3">Input Label 3</label>
                            <input type="text" class="form-control" id="input-3" name="input-3" disabled>
                        </div>
                    </div>
                    <div class="col-6 input-4">
                        <div class="form-group">
                            <label for="input-4">Input Label 4</label>
                            <input type="text" class="form-control" id="input-4" name="input-4" disabled>
                        </div>
                    </div>
                    @endif
                </div>
                <br/>
                <div class="row">
                    <div class="col-12 text-center">
                        <button type="button" class="btn" id="submit-form-button" disabled>Submit Form</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
    </br>
    <div class="row">
        <div class="col-12 text-center">
            <button type="button" class="btn edit" data-edit-object="content" id="edit-form-button">Edit Main Content</button>
        </div>
    </div>
</div>