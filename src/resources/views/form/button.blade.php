
<div class="{{$buildView->class['form-group']}}">
    @if($buildView->enableSubmit == true)
    <button type="submit" class="btn btn-label btn-info">
        <label><i class="mdi mdi-checkbox-marked-circle-outline"></i></label>
        {{__('form.submit')}}
    </button>
    @endif

    @if($buildView->enableSubmit == true)
    <button class="btn btn-label btn-warning" type="button" onclick="javascript:history.back(1);">
        <label><i class="mdi mdi-page-first"></i></label> {{__('form.return')}}
    </button>
    @endif
</div>

<div class="{{$buildClass['form-group']}}">

    <label class="{{$buildClass['label']}}"></label>
    <div class="{{$buildClass['field']}}">
        <input type='button' value='{{$label}}' class="btn {{ $class }}" {!! $attributes !!} />
    </div>

</div>