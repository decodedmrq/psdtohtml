<div class="modal fade" id="feedbackShowModal" tabindex="-1" role="dialog" aria-labelledby="feedbackShowModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">{{trans('string.detail')}}</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form id="detail-feedback">
                    <div class="form-group">
                        <label for="recipient-name" class="form-control-label">{{trans('string.name')}}</label>
                        <input type="text" class="form-control" id="author" disabled>
                    </div>
                    <div class="form-group">
                        <label for="recipient-name" class="form-control-label">{{trans('string.email')}}</label>
                        <input type="text" class="form-control" id="email" disabled>
                    </div>

                    <div class="form-group">
                        <label for="message-text" class="form-control-label">{{trans('string.content')}}</label>
                        <textarea class="form-control" id="content" rows="10" disabled></textarea>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">{{trans('buttons.close')}}</button>
            </div>
        </div>
    </div>
</div>