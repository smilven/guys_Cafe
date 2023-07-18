<!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-mdb-toggle="modal" data-mdb-target="#exampleModal">
  Launch demo modal
</button>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Profile</h5>
        <button type="button" class="btn-close" data-mdb-dismiss="modal" aria-label="Close"></button>
      </div>
      <center>
        <div class="modal-body"><img src="https://www.pngmart.com/files/21/Account-Avatar-Profile-PNG-Photo.png" height="80px" width="80px"></div>
      </center>
      <table class="table table-striped table-hover">
        <center>
          <p style="margin-top :10px; margin-bottom: 0px;">ID : 001</p>
        </center>
        <center>
          <p>Points : 0</p>
        </center>
      </table>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-mdb-dismiss="modal" style="width: 100%;">Close</button>
      </div>
    </div>
  </div>
</div>


<style>
  img,
  svg {
    vertical-align: super;
    align-items: center;
    align-content: center;
  }

  p {
    margin-top: 0;
    margin-bottom: 1rem;

  }

  [type=button]:not(:disabled),
  [type=reset]:not(:disabled),
  [type=submit]:not(:disabled),
  button:not(:disabled) {
    cursor: pointer;
  }
</style>