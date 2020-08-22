
@extends("layouts.app")
@section("page-content")
<link rel="stylesheet" type="text/css" href="../css/contact.css">
<div class="contact" style="background-image:url('../images/contactus.jpg'); background-repeat: no-repeat;background-size: 100% 100%;" width="100%" height="100%">
<div class="container">
  <div style="text-align:center">
    <h2>Contact Us</h2>
     
  </div>
  <div class="row">
    <div class="column">
      <!-- <img src="/w3images/map.jpg" style="width:100%"> -->
    </div>
     
    
    <div class="column">
      <form action="{{ route('contact.store')}}" method="POST">
      @csrf
        <label for="fname">First Name</label>
        <input type="text" id="fname" name="firstname" placeholder="Your name..">
        <label for="lname">Last Name</label>
        <input type="text" id="lname" name="lastname" placeholder="Your last name..">
        <label for="country">Country</label>
        <select id="country" name="country">
          <option value="australia">Australia</option>
          <option value="canada">Canada</option>
          <option value="usa">USA</option>
        </select>
        <label for="subject">Subject</label>
        <textarea id="subject" name="subject" placeholder="Write something.." style="height:170px"></textarea>
        <input type="submit" value="Submit">
      </form>
    </div>
  </div>
</div>
</div>
@endsection
