<div class="modal fade" id="deleteModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h5 class="modal-title glyphicon glyphicon-bell" id="myModalLabel"> Delete Alarm!</h5>
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
                <h5 class="modal-title glyphicon glyphicon-warning-sign" id="myModalLabel"> Alarm was disabled!</h5>
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


<div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">

        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header_log" style="padding:35px 50px;">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4><span class="glyphicon glyphicon-lock"></span> Login</h4>
            </div>
            <div class="modal-body" style="padding:40px 50px;">
                <form role="form">
                    <div class="form-group">
                        <label for="usrname"><span class="glyphicon glyphicon-user"></span> User Email</label>
                        <input type="text" class="form-control" id="usrname" placeholder="Enter email" required=" "><p id="ErrorEmail" hidden="true" style="color:red;">The User Email Not True</p>
                    </div>
                    <div class="form-group">
                        <label for="psw"><span class="glyphicon glyphicon-eye-open"></span> Password</label>
                        <input type="password" class="form-control" id="psw" placeholder="Enter password" required=" "><p id="ErrorPassword" hidden="true" style="color:red;">The Password Not True</p>
                    </div>
                    <div class="checkbox">
                        <label><input type="checkbox" value="" checked>Remember me</label>
                    </div>
                    <button type="submit" class="btn btn-success btn-block" id="btn-signin" disabled><span class="glyphicon glyphicon-off" ></span> Login</button>
                </form>
            </div>
            <div class="modal-footer_log">
                <button type="submit" class="btn btn-danger btn-default" data-dismiss="modal"  ><span class="glyphicon glyphicon-remove"></span> Cancel</button>
                <div class="pull-right">
                <p>Not a member? <a href="#">Sign Up</a></p>
                <p>Forgot <a href="#">Password?</a></p>
                </div>
            </div>
        </div>

    </div>
</div>

<div class="modal fade" id="mailModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h5 class="modal-title glyphicon glyphicon-warning-sign" id="myModalLabel">Email Not Valid!</h5>
            </div>
            <div class="modal-body">
This Email is used before blease chose another one!!
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>

<?php
