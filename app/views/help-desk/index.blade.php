@extends('../layouts/default')
   
@section('head')
	<meta name="description" content="Submit your enquiries/problems to the UBresources dev team">
@stop
@section('header')
   <h1>Help Desk</h1>
   <p>Our goal is to provide friendly and responsive support. Please submit your request and we will get back to you as soon as possible!</p>
@stop

@section('content')
	<div class="panel panel-success">
              <div class="panel-heading"><h2>Talk To us</h2></div>
              <div class="panel-body">
                <form class="error_form" name="freecontactform" method="post" action="../cgi/freecontactformprocess.php">
                  <div class="form-group">
                    <label for="Full_Name">Full Name<span class="required_star" > * </span></label>
                    <input type="text"  class="form-control" name="Full_Name" id="Full_Name" maxlength="80" required placeholder="(required)" pattern="[a-zA-Z]+">
                  </div>
                  <div class="form-group">
                    <label for="Email_Address">Email Address<span class="required_star"> * </span>
                    </label>
                    <input type="email" class="form-control"
			   name="Email_Address" id="Email_Address"
			   maxlength="100" placeholder="(required)" required>
                  </div>
                  <div class="form-group">
                    <label for="Telephone_Number">Telephone Number</label>
                    <input type="tel" class="form-control" name="Telephone_Number" id="Telephone_Number" maxlength="100" placeholder="(optional)">
                  </div>
                  <div class="form-group">
                    <label for="Your_Message">Enquiry<span class="required_star"> * </span>
                    </label>
                    <textarea  class="form-control" rows="7" name="Your_Message" id="Your_Message" placeholder="Leave your message here" required></textarea>
                  </div>
                  <button type="submit" class="btn btn-success">Submit Message</button>	
                </form>
              </div>
            </div>
          </div>
@stop