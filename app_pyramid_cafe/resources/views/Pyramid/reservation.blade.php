@extends('layouts.pyramid')

@section('container')
	
<header id="fh5co-header" class="fh5co-cover js-fullheight" role="banner" style="background-image: url(https://images.unsplash.com/photo-1453614512568-c4024d13c247?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8Mnx8Y29mZmVlJTIwc2hvcHxlbnwwfHwwfHx8MA%3D%3D&w=1000&q=80);" data-stellar-background-ratio="0.5">
	<div class="overlay"></div>
	<div class="container">
		<div class="row">
			<div class="col-md-12 text-center">
				<div class="display-t js-fullheight">
					<div class="display-tc js-fullheight animate-box" data-animate-effect="fadeIn">
						<h1>Reserve a Table Today!</h1>
					</div>
				</div>
			</div>
		</div>
	</div>
</header>
<style>
input::-webkit-outer-spin-button,
input::-webkit-inner-spin-button {
  -webkit-appearance: none;
  margin: 0;
}

input[type="date"]::-webkit-calendar-picker-indicator{
background-color:rgb(255, 255, 255);
cursor: pointer;
border-radius: 3px;
padding: 5px;
}

	input[type="time"]::-webkit-calendar-picker-indicator{
background-color:rgb(255, 255, 255);
cursor: pointer;
border-radius: 3px;
padding: 5px;
}
</style>

<div id="fh5co-reservation-form" class="fh5co-section">
	<div class="container">
		<div class="row">
			<div class="col-md-12 fh5co-heading animate-box">
				<h2>Reservation</h2>
				<div class="row">
					<div class="col-md-6">
						<p>Hai bestie, weekend mau nongkrong dimana nih? Sudah ada tempat nongkrong yang ingin dikunjungi? Kalau belum mendingan datang ke Pramid Coffee yang enak banget buat nongkrong, apalagi nongkrongnya rame-rame. Kalau nggak percaya bisa langsung dipesan aja tempat duduknya.</p>
					</div>
				</div>
			</div>
			<div class="col-md-6 col-md-push-6 col-sm-6 col-sm-push-6">
			<form method="post" action="#" id="form-wrap">
        <div class="row form-group">
            <div class="col-md-12">
                <label for="name">Your Name</label>
                <input type="text" class="form-control" id="name" name="name" required>
                
            </div>
        </div>
        <div class="row form-group">
            <div class="col-md-12">
                <label for="many">How Many People</label>
                <input type="number" class="form-control" id="many" name="many" onkeypress="if(this.value.length==2) return false;" required>
            </div>
        </div>
        <div class="row form-group">
            <div class="col-md-12">
                <label for="taskdatetime">When</label>
                <input type="date" name="taskdatetime" id="taskdatetime" class="form-control" required/>
            </div>
            </div>
			<div class="row form-group">
            <div class="col-md-12">
                <label for="tasktime">Time</label>
                <input type="time" name="tasktime" id="tasktime" class="form-control"/>
            </div>
            </div>
        <div class="row form-group">
            <div class="col-md-12">
                <label for="phone">Phone Number</label>
                <input type="number" class="form-control" id="phone" name="phone" onkeypress="if(this.value.length==12) return false;" required>
            </div>
        </div>
        <div class="row form-group">
            <div class="col-md-12">
                <input type="submit" class="btn btn-primary btn-outline btn-lg" value="Submit Form">
            </div>
        </div>
        </div>
    </form>
        </div></div><br><br><br><br>
	<script>
        document.getElementById("form-wrap").addEventListener("submit", function(event) {
            event.preventDefault(); // Prevent the form from submitting

            // Get values from form fields
            const name = document.getElementById("name").value;
            const many = document.getElementById("many").value;
            const taskdatetime = document.getElementById("taskdatetime").value;
            const tasktime = document.getElementById("tasktime").value;
            const phone = document.getElementById("phone").value;

            // Convert the selected date into a more human-readable format
            const dateObject = new Date(taskdatetime);
            const options = { year: 'numeric', month: 'long', day: 'numeric' };
            const formattedDate = dateObject.toLocaleDateString('en-US', options);

            // Construct the WhatsApp message
            const whatsappMessage = `Halo saya, ${name} ingin reservasi untuk ${many} orang, pada tanggal ${formattedDate} pukul ${tasktime}, nomor hp: ${phone}`;

            // Create the WhatsApp link
            const whatsappLink = `https://wa.me/+6282122305033?text=${encodeURIComponent(whatsappMessage)}`;

            // Redirect the user to WhatsApp
            window.location.href = whatsappLink;
        });
    </script>
@endsection