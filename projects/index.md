---
layout: page
title: Projects
---

{% capture section1 %}
<h1 class="heading text-center mb-3">PROJECTS</h1>
<ul class="list-group round">
  <li class="list-group-item">Private Clinic
    <ol class="list-group">
      <li class="list-group-item">U.n.i Klinik Kuala Ketil</li>
      <li class="list-group-item">U.n.i Klinik Kupang</li>
    </ol>
  </li>
  <li class="list-group-item">Certified Centre for Covid-19 Test</li>
  <li class="list-group-item">Training Centre
    <ol class="list-group">
      <li class="list-group-item">Food Handling Course under KKM/JKN</li>
      <li class="list-group-item">Typhoid Injection Provider</li>
    </ol>
  </li>
  <li class="list-group-item">Manufacturer
    <ol class="list-group">
      <li class="list-group-item">Import and market healthcare & medical consumables for hospitals and clinics.</li>
    </ol>
  </li>
</ul>
{% endcapture %}

{% capture slides %}
  {% include slides.html
    image="/res/bg2.jpeg"
    alt=""
    active="active"
    caption=""
  %}
  {% include slides.html
    image="/res/doctor.jpeg"
    alt=""
    active=""
    caption=""
  %}
{% endcapture %}

{% capture section2 %}
  {% include carousel.html
    content=slides
  %}
{% endcapture %}

<main class="content container fade-on-view">
  {% include splitpane.html
    content_1=section1
    content_2=section2
  %}
</main>