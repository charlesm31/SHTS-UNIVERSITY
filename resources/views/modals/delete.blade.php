<div class="modal fade" id="confirm-delete" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">        
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title" id="myModalLabel">Confirm Delete</h4>
            </div>
        
            <div class="modal-body">
                <h3>
                    You sure you want to delete this user?
                    deleted records wont be retrieved anymore.
                </h3>
            </div>
            
            <div class="modal-footer">
                 <form method="post" action="{{ url('user/delete') }}">
                    <input type="hidden" id="user_id" name="user_id" val="">
                    {{ csrf_field() }}

                    <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
                    <button type="submit" class="btn btn-danger btn-ok">Delete</a>
                </form>
            </div>
        </div>
    </div>
</div>