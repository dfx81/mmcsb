---
layout: page
title: Our Team
---

{% capture management1 %}
<h2 class="heading text-start">Dr. Hazwan Bin Marinamarican</h2>
<p class="text-muted">Chairman</p>
<b>Mansora University, Egypt – Bachelor of Medicine and Surgery 2013</b>
<p>Experiences:</p>
<ul>
  <li>Head of Health Inspectorate, Pej Kesihatan Daerah Baling</li>
  <li>Pegawai Epidemiologi, Pej Daerah Kesihatan Baling</li>
  <li>Pegawai Kesihatan Daerah II, Pej Daerah Kesihatan Baling</li>
  <li>Medical Officer in Klinik Kesihatan Bakar Arang, Sungai Petani</li>
  <li>Hospital Raja Perempuan Zainab II, Kota Bharu (Medical Officer of Medical Department)</li>
  <li>Hospital Abdul Halim, Sungai Petani (House Officer)</li>
</ul>
{% endcapture %}

{% capture management2 %}
<h2 class="heading text-start">Dr. Murshida Binti Mustafa Kamil</h2>
<p class="text-muted">Managing Director</p>
<b>Mansora University, Egypt – Bachelor of Medicine and Surgery 2013</b>
<p>Experiences:</p>
<ul>
  <li>Sultan Abdul Halim, Sungai Petani (House Officer)</li>
  <li>Hospital Raja Perempuan Zainab II, Kota Bharu (Medical Officer of the emergency and Trauma Department)</li>
  <li>Clinic Head (Management & Administration) Maternal & Child Health Care – Outpatient Department</li>
  <li>Maternal And Child Heath Clinic (KKIA) Baling</li>
  <li>Kg. Lalang Health Clinic, Mukim Siong (Medical Officer)</li>
  <li>Orang Asli Health</li>
</ul>
{% endcapture %}

{% capture staff1 %}
<h2 class="heading">En. Mohamad Shariff</h2>
<p class="text-muted">Business Development Manager</p>
{% endcapture %}

{% capture staff2 %}
<h2 class="heading">Cik Nur Nasha</h2>
<p class="text-muted">Product Development Manager</p>
{% endcapture %}

{% capture staff3 %}
<h2 class="heading">En. Musyrif</h2>
<p class="text-muted">Sales & Marketing Manager</p>
{% endcapture %}

{% capture staff4 %}
<h2 class="heading">En. Shazzuan</h2>
<p class="text-muted">Operation Manager</p>
{% endcapture %}

<main class="content container">
  <section>
    <div class="container">
      <h1 class="heading text-center mt-5">OUR TEAM</h1>
      <h2 class="heading text-center mt-5">Management Team</h2>
      <div class="row hoz-center">
        {% include profile.html
          image="/res/chairman.jpeg"
          content=management1
        %}
        {% include profile.html
          image="/res/managing_director.jpeg"
          content=management2
        %}
      </div>
      <h2 class="heading text-center mt-5">Staff</h2>
      <div class="row">
        {% include profile_mini.html
          image="/res/biz_dev.jpeg"
          content=staff1
        %}
        {% include profile_mini.html
          image="/res/product_dev.jpeg"
          content=staff2
        %}
        {% include profile_mini.html
          image="/res/marketing.jpeg"
          content=staff3
        %}
        {% include profile_mini.html
          image="/res/ops.jpeg"
          content=staff4
        %}
      </div>
    </div>
  </section>
</main>