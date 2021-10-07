---
layout: default
title: About Us
---

{% capture image1 %}
<img src=" {{ 'res/about.jpg' | relative_url }}" class="img-fluid fade-on-view my-5">
{% endcapture %}

{% capture image2 %}
<img src="{{ 'res/doctor.jpeg' | relative_url }}" class="img-fluid fade-on-view my-5">
{% endcapture %}

{% capture section1 %}
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
<a class="btn btn-light w-100" href=" {{ 'teams' | relative_url }}">Our Team</a>
{% endcapture %}

{% capture section2 %}
<h1 class="heading">HISTORY</h1>
<p class="justify">Since 2019, Murshida Medical Care has been proud to serve the nation.
  With our top-of-the-line services and technologies, we ensure that all
  patients receive the exceptional care they deserve. We’re dedicated to
  not only making you feel better, but helping you stay healthy in the long
run.</p>
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
<div class="container text-center">
  <h1 class="heading">VISION</h1>
  <p>
    <ol>
      <li>To provide comfort in term of service from front door person until dispensary</li>
      <li>Healthy working environment: supporting each other (staffs), helping person in need</li>
      <li>Practicing integrity among colleagues, clients: pricing, medicine</li>
      <li>To provide comfort to clients and healthy working environment among colleagues.</li>
    </ol>
  </p>
</div>
{% endcapture %}

<main class="content mt-5 py-2">
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

  {% include fillview_alt.html
    content=section4
  %}
</main>