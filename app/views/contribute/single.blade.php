@extends('../layouts/default')

@section('head')
      <meta name="description" content="Easily contribute to the UBresources website">
@stop

@section('header')
           <h1>Contribute</h1>
           <p>
            	@unless($tab == 'errors')
             		Help our database of {{$tab}} grow by submitting yours here
             	@else
             		Join us in making this website more enriching and error free
             	@endif
             	<br />
             	Its amazing how others can benefit from your contribution.
           </p>
@stop

@section('content')
    <div>
      <ul class="nav nav-tabs nav-justified">
       <li <?php if($tab == 'past questions') echo "class='active'" ?>>
       		{{HTML::link('contribute/past-questions', 'Past Questions')}}
       	</li>
       <li <?php if($tab == 'timetables') echo "class='active'" ?>>
       		{{HTML::link('contribute/timetables', 'Timetables' )}}
       	</li>
       <li <?php if($tab == 'course outlines') echo "class='active'" ?>>
       		{{HTML::link('contribute/course-outlines', 'Course Outline')}}
       	</li>
       <li <?php if($tab == 'errors') echo "class='active'" ?>>
       		{{HTML::link('contribute/errors', 'Errors and Suggestions')}}
       	</li>
      </ul>
    </div>

  @unless($tab == 'errors')
		<h3>Instructions</h3>
		  <ul>
		    <li>To ensure that you don't submit a file which has already been submitted check the list of submitted {{{$tab}}} {{HTML::link($link,'here')}}</li>
		    <li>Please submit your question papers in <strong>odf, doc, or docx</strong> format so that it can easily be edited if need be <em>(Please  Please do not submit files in pdf format!)</em></li>
		    <li>Any document submitted is bounded by the <a href="http://www.gnu.org/copyleft/fdl.html">GNU Free Documentation License version 1.3 or later</a></li>
		  </ul>
		  <h3>How to submit</h3>
		  <ul>
		  <li>You can submit question papers by sending it as an email attachment to <a href="support@ubresources.com" target="_blank">support@ubresources.com</a> or</li>
		  <li>You can also use our <a data-toggle="modal" href="#basicUploadModal"> Basic Uploader</a></li>
		</ul>
		
  @else
  		<form class="error_form" method="post" action="../cgi/error.php">
        <div class="form-group">
          <label>Email address <small>(Optional)</small></label>
          <input type="email"  name="Your_Email"  for="Your_Email" class="form-control"   placeholder="Enter email">
        </div>
        <div class="form-group">
          <label>Description</label>
          <textarea class="form-control"  for="Your_Message" name="Your_Message" rows="7" required placeholder="Enter your message here" required></textarea>
        </div>
        <button type="sumit" class="btn col-md-3 col-md-offset-3 btn-success"> Sumit message</button>
      </form>
  @endif

  @unless($tab == 'errors')
      <div class="modal fade" id="basicUploadModal" tabindex="-1" role="dialog" aria-labelledby="basicUploadModal" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
              <h4 class="modal-title">Please submit your file here</h4>
            </div>
            <div class="modal-body">
              <form role="form" onsubmit="validate()" name="upload_form">
                <div class="form-group">
                  <label for="exampleInputEmail1">Full Name <small>*</small></label>
                  <input type="name" class="form-control" placeholder="Your name here">
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">Email address <small><em>(optional)</em></small></label>
                  <input type="email" class="form-control" placeholder="Enter email">
                </div>
                <div class="form-group">
                  <label for="exampleInputFile">Select File to Upload</label>
                  <input type="file" required>
                  <p class="help-block"><em>Chose the file you wish to submit to us</em></p>
                </div>
                <div class="checkbox">
                  <label>
                    <input type="checkbox"  checked required> I agree to the <a href="http://www.gnu.org/copyleft/fdl.html">terms and conditions</a>
                  </label>
                </div>
                <button type="submit" class="btn btn-success">Upload</button>
              </form>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>
            </div>
          </div><!-- /.modal-content -->
        </div><!-- /.modal-dialog -->
      </div><!-- /.modal -->
	@endif
@stop