<div class="modal fade" id="confirm-delete" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-sm">
        <div class="modal-content">        
            <div class="modal-header modal-warning">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title" id="myModalLabel"><i class="fa fa-exclamation-circle"></i> Warning!</h4>
            </div>
        
            <div class="modal-body">
                <h5>Do you really want to delete this record?</h5>
            </div>
            
            <div class="modal-footer">
                 <form method="post" action="{{ url('user/delete') }}">
                    <input type="hidden" id="user_id" name="user_id">
                    {{ csrf_field() }}

                    <button type="submit" class="btn btn-danger btn-ok">Delete</a>
                    <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
                </form>
            </div>
        </div>
    </div>
</div>