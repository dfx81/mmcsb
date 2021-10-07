---
layout: page
title: NEWGENE Self Test Kit
---

{% capture slides %}
  {% include slides.html
    image="res/newgene1.jpeg"
    alt=""
    active="active"
    caption=""
  %}
  {% include slides.html
    image="res/newgene2.jpeg"
    alt=""
    active=""
    caption=""
  %}
  {% include slides.html
    image="res/newgene3.jpeg"
    alt=""
    caption=""
  %}
{% endcapture %}

<main class="content container">
  <h1 class="heading text-center mt-3">Saliva Self-Test Kit: NEWGENE Bioengineering</h1>

  <h2 class="text-center my-3">Introduction</h2>
  <p class="justify">
    <ol>
      <li>True COVID-19 antigen test capable of <b>detecting the presence of viral antigens in nasal, nasopharyngeal or sputum samples within 15 minutes.</b></li>
      <li>Based on the results, the belgian Federal Agency for Medicines and Health Products has decided to <b>authorize the distribution of the NEWGENE COVID-19 antigen detection kit.</b></li>
      <li>Thanks to the <b>NEWGENE COVID-19 antigen detection kit</b>, which has excellent specificity, it is therefore possible to obtain a sample in a non-invasive manner and, therefore, save precious time, allowing rapid treatment of the patients detected positively.</li>
    </ol>
  </p>

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
            <video class="fade-on-view" controls src="{{ 'res/product-vid.mp4' | relative_url }}"></video>
          </div>
        </div>
      </div>
    </section>
  </div>

  <h2 class="text-center my-3">Features</h2>
  <p class="justify">
    <ul>
      <li><b>Easy to Use:</b> all reagents are ready to use (sputum collection material included)</li>
      <li><b>Clinical Sensitivity:</b> 96.5%</li>
      <li><b>Clinical Specificity:</b> 99.0%</li>
      <li><b>Fast:</b> results available after 15 minutes</li>
      <li><b>Packaging:</b> 25 tests / kit</li>
      <li><b>Shelf Life:</b> 12 months</li>
      <li><b>Storage of The Kit:</b> between 2°C and 30°C</li>
      <li><b>CE marking</b></li>
    </ul>
  </p>

  <h2 class="text-center my-3">About New Gene (Hangzhou) Bioengineering Co., Ltd.</h2>
  <p class="justify">
   New Gene (Hangzhou) Bioengineering Co., Ltd. is located in Hangzhou Tianhe High-tech Industrial Park. It is a high-tech company engaged in the research, development, manufacture and distribution of biological products. It is committed to creating biological materials such as antigens and antibodies, in vitro diagnostic reagents and related devices, and also the entire industrial chain layout of artificial intelligence assisted diagnosis system.<br/>
   The company’s product line covers a full range of in vitro diagnostic products such as immuno diagnosis, molecular diagnosis, and microbiological testing. It has profound technical accumulation and unique technological advantages in the areas of early cancer screening, rapid detection of infectious diseases, and rapid screening of geriatric diseases.
  </p>

  <h2 class="text-center mt-3">Additional Info</h2>
  <div class="fade-on-view row h-100 my-3">
    <div class="col-md-3 my-3">
      <a href="{{ 'res/info1.jpeg' | relative_url }}">
        <img src="{{ 'res/info1.jpeg' | relative_url }}" class="img-fluid">
      </a>
    </div>
    <div class="col-md-3 my-3">
      <a href="{{ 'res/info2.jpeg' | relative_url }}">
        <img src="{{ 'res/info2.jpeg' | relative_url }}" class="img-fluid">
      </a>
    </div>
    <div class="col-md-3 my-3">
      <a href="{{ 'res/info3.jpeg' | relative_url }}">
        <img src="{{ 'res/info3.jpeg' | relative_url }}" class="img-fluid">
      </a>
    </div>
    <div class="col-md-3 my-3">
      <a href="{{ 'res/info4.jpeg' | relative_url }}">
        <img src="{{ 'res/info4.jpeg' | relative_url }}" class="img-fluid">
      </a>
    </div>
  </div>

  <h2 class="text-center mt-3">Approval Documents</h2>
  <p class="justify">
    New Gene (Hangzhou) Bioengineering Co., Ltd. has approved MMCSB as the authorized distributor.
  </p>
  <ul class="fade-on-view list-group my-3">
    <li class="list-group-item">
      <a href="{{ 'res/newgeneletter.pdf' | relative_url }}">
        NEWGENE Approval Letter for MMCSB as Authorized Distributor
      </a>
    </li>
    <li class="list-group-item">
      <a href="{{ 'res/kkmapproval1.pdf' | relative_url }}">
        KKM Approval Document
      </a>
    </li>
    <li class="list-group-item">
      <a href="{{ 'res/kkmapproval2.pdf' | relative_url }}">
        KKM Approval Letter
      </a>
    </li>
  </ul>

  <sub class="small text-muted mt-3">
    Contact us for more details about the product.
  </sub>
</main>