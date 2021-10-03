---
layout: page
title: Services
---

{% capture slides %}
  {% include slides.html
    image="/mmcsb/res/ecg.png"
    alt="ECG"
    active="active"
    caption="ECG"
  %}
  {% include slides.html
    image="/mmcsb/res/ultrasound.jpg"
    alt="Ultrasound"
    active=""
    caption="Ultrasound"
  %}
  {% include slides.html
    image="/mmcsb/res/dressing.jpg"
    alt="Dressing"
    caption="Dressing"
  %}
  {% include slides.html
    image="/mmcsb/res/iv.jpg"
    alt="IV Drip"
    active=""
    caption="IV Drip"
  %}
  {% include slides.html
    image="/mmcsb/res/suction.jpg"
    alt="Suction"
    active=""
    caption="Suction"
  %}
  {% include slides.html
    image="/mmcsb/res/irrigation.jpg"
    alt="Irrigation"
    active=""
    caption="Irrigation"
  %}
  {% include slides.html
    image="/mmcsb/res/nebulizer.jpg"
    alt="Nebulizer"
    caption="Nebulizer"
  %}
  {% include slides.html
    image="/mmcsb/res/circumcision.jpg"
    alt="Circumcision"
    active=""
    caption="Circumcision"
  %}
  {% include slides.html
    image="/mmcsb/res/skintreat.jpg"
    alt="Skin Treatment"
    caption="Skin Treatment"
  %}
  {% include slides.html
    image="/mmcsb/res/physio.jpg"
    alt="Physiotheraphy Service"
    active=""
    caption="Physiotheraphy Service"
  %}
  {% include slides.html
    image="/mmcsb/res/knee.jpg"
    alt="Knee Treatment"
    active=""
    caption="Knee Treatment"
  %}
  {% include slides.html
    image="/mmcsb/res/injection.png"
    alt="Vaccine Injection"
    active=""
    caption="Vaccine Injection"
  %}
  {% include slides.html
    image="/mmcsb/res/typhoid.jpg"
    alt="Typhoid Injection"
    active=""
    caption="Typhoid Injection"
  %}
  {% include slides.html
    image="/mmcsb/res/bloodtest.jpg"
    alt="Blood Test"
    active=""
    caption="Blood Test"
  %}
  {% include slides.html
    image="/mmcsb/res/upt.jpg"
    alt="Urine Test / UPT"
    active=""
    caption="Urine Test / UPT"
  %}
  {% include slides.html
    image="/mmcsb/res/familyplan.jpg"
    alt="Family Planning"
    active=""
    caption="Family Planning"
  %}
  {% include slides.html
    image="/mmcsb/res/homevisit.jpg"
    alt="Home Visit"
    active=""
    caption="Home Visit"
  %}
{% endcapture %}

{% capture section1 %}
  {% include carousel_control.html
    content=slides
  %}
{% endcapture %}

{% capture section2 %}
<section class="fade-on-view justify center">
  <div>
    <h1 class="heading">SERVICES</h1>
    <p>At Murshida Medical Care, we’re dedicated to providing high-quality,
      personalized medical care with the most cutting edge technologies available.
      By continuously evaluating and upgrading our services, we ensure that all
    patients receive the best treatment for their needs.</p>
  </div>
</section>
{% endcapture %}

<main class="fade-on-view content container">
  {% include splitpane.html
    content_1=section1
    content_2=section2
  %}
</main>