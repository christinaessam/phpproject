<div class="modal fade" id="deleteModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title glyphicon glyphicon-bell" id="myModalLabel"> Delete Alarm!</h4>
            </div>
            <div class="modal-body">
                You are going to delete an alarm !
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-danger" data-dismiss="modal" id="modal_del_but">Delete Alarm</button>
            </div>
        </div>
    </div>
</div>
<div class="modal fade" id="disableModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title glyphicon glyphicon-warning-sign" id="myModalLabel"> Alarm was disabled!</h4>
            </div>
            <div class="modal-body">
                this alarm is not active right now and you won't receive any mail about it !!
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>
<?php
