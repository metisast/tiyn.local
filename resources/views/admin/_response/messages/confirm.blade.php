<div class="col-md-6" id="modal-dialog">
    <div class="modal-content">
        <div class="modal-header">
            <button type="button" class="close modal-close"><span aria-hidden="true">×</span></button>
            <h4 class="modal-title">{{ $message['title'] }}</h4>
        </div>
        <div class="modal-body">
            <p>{{ $message['text'] }}</p>
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-default pull-left modal-close">{{ trans('interface.adminMessageTextButtonClose') }}</button>
            <button type="button" class="btn btn-danger modal-send">{{ $message['deleteButton'] }}</button>
        </div>
    </div>
</div>