@props(['id','form_id'])

{{--        MODEL SECTION --}}
<!-- Modal -->
<div class="modal fade" id="{{$id}}" tabindex="-1" role="dialog" aria-labelledby="{{$id}}Label" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title font-weight-normal" id="{{$id}}Label">{{__('global.sure_title')}}</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                {{__('global.sure_delete_p')}}
            </div>
            <div class="modal-footer">
                <button type="button" class="btn bg-gradient-secondary" data-bs-dismiss="modal">{{__('global.close')}}</button>
                <button type="submit" form="{{$form_id}}" class="btn bg-gradient-primary">{{__('global.sure')}}</button>
            </div>
        </div>
    </div>
</div>

{{--    END  MODEL SECTION --}}
