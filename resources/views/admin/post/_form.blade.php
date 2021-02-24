<div class="row">
    <div class="col-md-8">
        <div class="form-group row">
            <label for="title" class="col-md-2 col-form-label">
                标题
            </label>
            <div class="col-md-10">
                <input type="text" class="form-control" name="title" autofocus id="title" value="{{ $title }}">
            </div>
        </div>
        <div class="form-group row">
            <label for="subtitle" class="col-md-2 col-form-label">
                副标题
            </label>
            <div class="col-md-10">
                <input type="text" class="form-control" name="subtitle" id="subtitle" value="{{ $subtitle }}">
            </div>
        </div>
        <div class="form-group row">
            <label for="content" class="col-md-2 col-form-label">
                内容
            </label>
            <div class="col-md-10">
                <textarea class="form-control" name="content" rows="14" id="content">{{ $content }}</textarea>
            </div>
        </div>
    </div>
    <div class="col-md-4">
        
        <div class="form-group row">
            <label for="layout" class="col-md-3 col-form-label">
                布局
            </label>
            <div class="col-md-8">
                <input type="text" class="form-control" name="layout" id="layout" value="{{ $layout }}">
            </div>
        </div>
        <div class="form-group row">
            <label for="meta_description" class="col-md-3 col-form-label">
                摘要
            </label>
            <div class="col-md-8">
                <textarea class="form-control" name="meta_description" id="meta_description" rows="6">
                    {{ $meta_description }}
                </textarea>
            </div>
        </div>

    </div>
</div>