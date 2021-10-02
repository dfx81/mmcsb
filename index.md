---
layout: default
title: MMCSB
---

{% capture image1 %}
<img src="/res/doctor.jpeg" class="img-fluid fade-on-view my-5">
{% endcapture %}

{% capture image2 %}
<img src="/res/about.jpg" class="img-fluid fade-on-view my-5">
{% endcapture %}

{% capture section1 %}
<h1 class="heading">HISTORY</h1>
<p class="justify">Since 2019, Murshida Medical Care has been proud to serve the nation.
  With our top-of-the-line services and technologies, we ensure that all
  patients receive the exceptional care they deserve. We’re dedicated to
  not only making you feel better, but helping you stay healthy in the long
run.</p>
{% endcapture %}

{% capture section2 %}
<h1 class="heading">ABOUT US</h1>
<p class="justify">Murshida Medical Care Sdn Bhd is a young and aggressive company
  dedicated to becoming a market leader in the implementation of the
  latest technologies and treatments in medicine.
  Founded in 2018, we have grown by more than 50% each year. We are
  constantly expanding our portfolio of healthcare including clinics,
  manufacturers and areas of activity.
  We manage our logistics and inventories with a fully computerized
  system, and deliver our service with a high reliability, sound business
  ethics, and the highest level of performance.
  We believe that our first responsibility is to the patients, doctors and
nurses.</p>
<a class="btn btn-secondary w-100" href="/teams">Our Team</a>
{% endcapture %}

{% capture section3 %}
<div class="container justify">
  <h1 class="heading">MISSION</h1>
  <p>Our mission is to provide comprehensive and compassionate     
    healthcare  service. We honor individuality, empower people  
    through open and honest  communication and strive to earn  
    the loyalty of every person we serve. A  community in which all 
    people achieve their full potential for health and well‐ being 
    across the lifespan.  We work to be trusted by patients, a valued 
  partner  in the community, and creators of positive change.</p>
</div>
{% endcapture %}

{% capture section4 %}
<div class="bg round position-relative overflow-hidden p-3 p-md-5 m-md-3 text-center">
  <div class="fade-on-view col-md-9 p-lg-5 mx-auto my-5">
    <p class="display-5">Let's build something beautiful together!</p>
    <a class="btn btn-secondary btn-lg" href="/contacts">Contact Us</a>
  </div>
</div>
{% endcapture %}

<main class="content">
  {% include header.html
    logo="/res/logo-full.png"
    title="MURSHIDA MEDICAL CARE SDN. BHD."
    subtitle="Always There For You"
    link="/services"
    button="View Services"
  %}

  {% include splitview.html
    content_1=image1
    content_2=section1
  %}

  {% include splitview_alt.html
    content_1=section2
    content_2=image2
  %}

  {% include fillview.html
    content=section3
  %}

  {% include fillview.html
    content=section4
  %}
</main>