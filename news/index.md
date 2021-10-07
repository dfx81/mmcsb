---
layout: page
title: News
---

<main class="content container w-50 mx-auto justify">
  <h1 class="heading">LATEST NEWS FROM MMCSB</h1>
  <hr/>
  <ul class="list-group">
    {% for post in site.posts %}
      <li class="list-group-item"><a href="{{ post.url }}" title="{{ post.title }}">{{ post.title }}</a>
        <span class="ml-3 text-muted">({{ post.date | date_to_string }})</span></li>
    {% endfor %}
  </ul>
</main>