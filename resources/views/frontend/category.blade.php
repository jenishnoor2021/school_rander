@extends('layouts.front')
@section('content')
@php
$sectionTitle = $type === 'achievement' ? 'Achievements' : ($type === 'activity' ? 'Activities' : 'Events');
$sectionRoute = $type === 'achievement' ? 'achievements' : ($type === 'activity' ? 'academic_activities' : 'event');
$categoryRoute = $type === 'achievement' ? 'achievements.category' : ($type === 'activity' ? 'activities.category' : 'events.category');
$sectionIcon = $type === 'achievement' ? 'fa-award' : ($type === 'activity' ? 'fa-palette' : 'fa-calendar-star');
@endphp

<section class="subpage-wonder-banner">
  <div class="doodle-element doodle-star" style="top: 16%; left: 8%; opacity: 0.6;" aria-hidden="true">
    <i class="fas fa-star" style="color: var(--honey-light); font-size: 1.5rem;"></i>
  </div>
  <div class="doodle-element doodle-star" style="bottom: 20%; right: 10%; opacity: 0.6;" aria-hidden="true">
    <i class="fas fa-star" style="color: var(--saffron-light); font-size: 1.25rem;"></i>
  </div>
  <div class="container">
    <div class="reveal-pop">
      <h1>{{ $category->name }}</h1>
      <div class="breadcrumb-pill-trail">
        <a href="{{ url('/') }}"><i class="fas fa-home"></i> Home</a>
        <i class="fas fa-angle-right" aria-hidden="true"></i>
        <a href="{{ route($sectionRoute) }}">{{ $sectionTitle }}</a>
        <i class="fas fa-angle-right" aria-hidden="true"></i>
        <span>{{ $category->name }}</span>
      </div>
    </div>
  </div>
</section>

<div class="storybook-wave wave-cream" aria-hidden="true">
  <svg viewBox="0 0 1200 48" preserveAspectRatio="none">
    <path d="M0,0 C150,40 350,-10 500,25 C650,60 900,5 1200,20 L1200,48 L0,48 Z"></path>
  </svg>
</div>

<section class="section-py bg-white">
  <div class="container">
    <div class="section-header reveal-pop">
      <span class="section-tag"><i class="fas {{ $sectionIcon }}"></i> {{ $sectionTitle }}</span>
      <h2>{{ $category->name }}</h2>
      <p>Explore the latest {{ strtolower($sectionTitle) }} from our school community.</p>
    </div>

    <nav class="category-pill-nav" aria-label="{{ $sectionTitle }} categories">
      @foreach($categories as $otherCategory)
      <a href="{{ route($categoryRoute, $otherCategory->slug) }}" class="{{ $otherCategory->id === $category->id ? 'is-active' : '' }}">{{ $otherCategory->name }}</a>
      @endforeach
    </nav>

    <div class="facilities-mosaic-grid dynamic-content-grid">
      @forelse($items as $item)
      <article class="facility-explorer-card reveal-pop">
        <div class="facility-card-media">
          <img src="{{ $item->file }}" alt="{{ $item->text }}" loading="lazy">
        </div>
        <h3>{{ $item->text }}</h3>
        <a href="{{ $item->file }}" class="handwritten-badge" data-lightbox-src="{{ $item->file }}" data-lightbox-caption="{{ $item->text }}">
          <i class="fas fa-search-plus"></i> View image
        </a>
      </article>
      @empty
      <div class="empty-state"><i class="fas {{ $sectionIcon }}"></i>
        <h3>No items yet</h3>
        <p>No {{ strtolower($sectionTitle) }} have been added to this category yet.</p>
      </div>
      @endforelse
    </div>
  </div>
</section>
@endsection

<style>
  .category-pill-nav {
    display: flex;
    flex-wrap: wrap;
    justify-content: center;
    gap: 0.65rem;
    margin: 0 auto 2.5rem;
  }

  .category-pill-nav a {
    display: inline-flex;
    align-items: center;
    min-height: 2.6rem;
    padding: 0.55rem 1rem;
    border: 2px solid var(--border-paper);
    border-radius: 999px;
    background: var(--bg-card);
    color: var(--navy);
    font-family: var(--font-display);
    text-decoration: none;
    transition: var(--spring-bounce);
  }

  .category-pill-nav a:hover,
  .category-pill-nav a.is-active {
    border-color: var(--saffron);
    background: var(--bg-pill-saffron);
    color: var(--saffron-dark);
    transform: translateY(-2px);
  }

  .dynamic-content-grid .facility-explorer-card {
    min-width: 0;
  }

  .dynamic-content-grid .handwritten-badge {
    align-self: flex-start;
    text-decoration: none;
  }

  .empty-state {
    grid-column: 1 / -1;
    padding: 4rem 1.5rem;
    border: 2px dashed var(--border-subtle);
    border-radius: 24px;
    background: var(--bg-canvas-subtle);
    color: var(--text-muted);
    text-align: center;
  }

  .empty-state i {
    color: var(--saffron);
    font-size: 2rem;
  }

  .empty-state h3 {
    margin: 0.75rem 0 0.35rem;
    color: var(--navy);
    font-family: var(--font-display);
  }

  .empty-state p {
    margin: 0;
  }
</style>