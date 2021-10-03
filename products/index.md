---
layout: page
title: Products
---

{% capture slides %}
  {% include slides.html
    image="/mmcsb/res/newgene1.jpeg"
    alt=""
    active="active"
    caption=""
  %}
  {% include slides.html
    image="/mmcsb/res/newgene2.jpeg"
    alt=""
    active=""
    caption=""
  %}
  {% include slides.html
    image="/mmcsb/res/newgene3.jpeg"
    alt=""
    caption=""
  %}
{% endcapture %}

<main class="content container">
  <h1 class="heading text-center mt-3">Saliva Self-Test Kit: NEWGENE Bioengineering</h1>
  <div class="d-md-flex flex-md-equal w-100">
    <section class="my-3">
      <div class="px-3 px-md-5 overflow-hidden">
        <div class="center fade-on-view">
          {% include carousel_control.html
            content=slides
          %}
        </div>
      </div>
    </section>
    <section class="my-3">
      <div class="px-3 px-md-5 overflow-hidden">
        <div class="center">
          <div>
            <h2 class="heading text-center mb-3">Use Instruction</h2>
            <video class="fade-on-view" controls src="/mmcsb/res/product-vid.mp4"></video>
          </div>
        </div>
      </div>
    </section>
  </div>

  <h2 class="heading text-center mt-3">Additional Info</h2>
  <div class="fade-on-view row h-100 my-3">
    <div class="col-md-3 my-3">
      <a href="/mmcsb/res/info1.jpeg">
        <img src="/mmcsb/res/info1.jpeg" class="img-fluid">
      </a>
    </div>
    <div class="col-md-3 my-3">
      <a href="/mmcsb/res/info2.jpeg">
        <img src="/mmcsb/res/info2.jpeg" class="img-fluid">
      </a>
    </div>
    <div class="col-md-3 my-3">
      <a href="/mmcsb/res/info3.jpeg">
        <img src="/mmcsb/res/info3.jpeg" class="img-fluid">
      </a>
    </div>
    <div class="col-md-3 my-3">
      <a href="/mmcsb/res/info4.jpeg">
        <img src="/mmcsb/res/info4.jpeg" class="img-fluid">
      </a>
    </div>
  </div>

  <h2 class="heading text-center mt-3">Approval Documents</h2>
  <ul class="fade-on-view list-group my-3">
    <li class="list-group-item">
      <a href="/mmcsb/res/kkmapproval1.pdf">
        KKM Approval Document
      </a>
    </li>
    <li class="list-group-item">
      <a href="/mmcsb/res/kkmapproval2.pdf">
        KKM Approval Letter
      </a>
    </li>
    <li class="list-group-item">
      <a href="/mmcsb/res/newgeneletter.pdf">
        Letter from NEWGENE
      </a>
    </li>
  </ul>
</main>