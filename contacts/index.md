---
layout: page
title: Contact Us
---

{% capture section1 %}
<h1 class="heading mb-3">CONTACT US</h1>
<h2>Opening Hours:</h2>
<p>Sat-Thu: 8:00AM-10:00PM<br/>Fri: Closed</p>
<h2>Our Location:</h2>
<p>No. 222,<br/>Tingkat Bawah,<br/>Lorong 8 Taman Tanjung Puteri,<br/>09300 Kuala Ketil.</p>
<p>For general inquiries, feel free to contact us.<br/>We’d love to hear from you!</p>
<a href="tel:04-4160428">Tel: 04-4160428</a><br/>
<a href="https://wa.link/27sifm">WhatsApp: 011-25454521</a><br/>
<a href="mailto:example@gmail.com">Email: example@gmail.com</a>
{% endcapture %}

{% capture section2 %}
<section class="h-100 w-100">
  <div class="container w-100 h-100 p-0">
    <iframe class="fade-on-view round mx-auto w-100 h-100 p-0" title="Google Map" src="https://www.google.com/maps?q=Uniklinik%20kuala%20ketil&amp;output=embed&amp;hl=en-US&amp;z=12" frameborder="0"></iframe>
  </div>
</section>
{% endcapture %}

<main class="content container">
  {% include splitpane.html
    content_1=section1
    content_2=section2
  %}
</main>