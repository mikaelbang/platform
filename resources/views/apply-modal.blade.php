<div id="apply-job-modal" class="modal fade" tabindex="-1" role="dialog">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title">Apply for job</h4>
      </div>
      <div class="modal-body">
        <form id="apply-job-form" action="{{ route('apply-job', ['ad' => $job->id, 'recruiter' => $recruiter->user_id ]) }}" method="POST">
          <div class="form-group">
            <label for="apply-name" class="control-label">Name</label>
            <input type="text" class="form-control" name="apply_name" id="apply-name">
          </div>
          <div class="form-group">
            <label for="apply-name" class="control-label">Email</label>
            <input type="email" class="form-control" name="apply_email" id="apply-email">
          </div>
          <div class="form-group">
            <label for="apply-phone" class="control-label">Phone</label>
            <input type="text" class="form-control" id="apply-phone" name="apply_phone" placeholder="+46739746728">
          </div>
          <div class="form-group">
            <label for="message-text" class="control-label">Message:</label>
            <textarea class="form-control" name="apply_message" id="message-text"></textarea>
          </div>
          <div class="form-group">
            <label for="apply-cv" class="control-label">CV?</label>
            <input type="file" name="apply_cv" id="apply-cv">
          </div>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary send-apply-button">Apply</button>
      </div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->