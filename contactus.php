<?php include 'includes/header.php'; ?>

    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <div class="cont">
        <h1>Contact Us</h1>
       <span class="span"> <p>If you have any questions or need assistance, feel free to reach out to us.</p></span>

        <form action="/submit" method="POST" class="contact-form">
            <label for="name">Full Name</label>
            <input type="text" id="name" name="name" placeholder="Your Name" required>

            <label for="email">Email Address</label>
            <input type="email" id="email" name="email" placeholder="Your Email" required>

            <label for="subject">Subject</label>
            <select id="subject" name="subject" required>
                <option value="" disabled selected>Select Subject</option>
                <option value="General Inquiry">General Inquiry</option>
                <option value="Property Management">Property Management</option>
                <option value="Land Acquisition">Land Acquisition</option>
                <option value="Other">Other</option>
            </select>

            <label for="message">Message</label>
            <textarea id="message" name="message" rows="6" placeholder="Your Message" required></textarea>

            <button type="submit" class="btn-submit">Send Message</button>
        </form>
    </div>
   <div class="map">
    <div class="h1"><h1>Find Us Here</h1></div>
    <div class="location">
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3989.7638244114064!2d32.59410767413436!3d0.2994632996976072!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x177dbd7946a7f0c1%3A0x7a01682e4d58bad5!2sRazor%20Tech%20Company%20LTD!5e0!3m2!1sen!2sug!4v1731072807368!5m2!1sen!2sug" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div>
   </div>
<?php include 'includes/footer.php';?>