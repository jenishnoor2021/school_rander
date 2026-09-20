<?php

use App\Models\Video;

$videos = Video::where('is_show', 1)->paginate(12);
?>
@extends('layouts.front')
@section('content')
<style>
    .gallery-pagination {
    display: flex;
    justify-content: center;
    align-items: center;
    margin-top: 3rem;
    width: 100%;
}

.gallery-pagination nav {
    display: flex;
    justify-content: center;
    width: 100%;
}

.gallery-pagination .pagination {
    display: flex !important;
    flex-direction: row !important;
    flex-wrap: wrap;
    justify-content: center;
    align-items: center;
    list-style: none;
    padding-left: 0;
    margin-bottom: 0;
    gap: 5px;
}

.gallery-pagination .page-item {
    display: inline-block;
}

.gallery-pagination .page-link {
    display: block;
    padding: 8px 14px;
    text-decoration: none;
    border: 1px solid #dee2e6;
    border-radius: 5px;
    color: #17365d;
    background-color: #fff;
}

.gallery-pagination .page-item.active .page-link {
    background-color: #17365d;
    border-color: #17365d;
    color: #fff;
}

.gallery-pagination .page-item.disabled .page-link {
    color: #999;
    pointer-events: none;
}

.gallery-pagination .page-link:hover {
    background-color: #f0f4f8;
    color: #17365d;
}
</style>
<!-- Storybook Wonder Subpage Banner -->
<section class="subpage-wonder-banner">
    <!-- Floating Background Doodles -->
    <div class="doodle-element doodle-star" style="top: 15%; left: 8%; opacity: 0.6;" aria-hidden="true">
        <i class="fas fa-star" style="color: var(--honey-light); font-size: 1.5rem;">
        </i>
    </div>
    <div class="doodle-element doodle-star" style="bottom: 20%; right: 10%; opacity: 0.6;" aria-hidden="true">
        <i class="fas fa-star" style="color: var(--saffron-light); font-size: 1.25rem;">
        </i>
    </div>
    <div class="container">
        <div class="reveal-pop">
            <h1>
                Video Gallery
            </h1>
            <div class="breadcrumb-pill-trail">
                <a href="{{ url('/') }}">
                    <i class="fas fa-home">
                    </i>
                    Home
                </a>
                <i class="fas fa-angle-right" style="font-size: 0.75rem; opacity: 0.6;">
                </i>
                <a href="{{ route('gallery') }}">
                    Gallery
                </a>
                <i class="fas fa-angle-right" style="font-size: 0.75rem; opacity: 0.6;">
                </i>
                <span>
                    Video Gallery
                </span>
            </div>
        </div>
    </div>
</section>
<!-- Storybook Wave Divider -->
<div class="storybook-wave wave-cream" aria-hidden="true">
    <svg viewBox="0 0 1200 48" preserveAspectRatio="none">
        <path d="M0,0 C150,40 350,-10 500,25 C650,60 900,5 1200,20 L1200,48 L0,48 Z">
        </path>
    </svg>
</div>
<section class="section-py bg-white">
    <div class="container">
        <div class="section-header reveal-pop">
            <span class="section-tag">
                <i class="fas fa-play-circle">
                </i>
                Watch & Relive
            </span>
            <h2>
                Video Gallery
            </h2>
            <p>
                Watch full stage telecasts, musical performances, sports day races, and classroom walkthroughs of Seven Steps Pre-School.
            </p>
        </div>
        <div class="gallery-mosaic-layout">
            @forelse($videos as $video)
            <div class="mosaic-photo-card reveal-pop">
                <div class="mosaic-photo-inner">
                    @if($video->link)

                    @php
                        $youtubeId = null;

                        $url = $video->link;

                        if (str_contains($url, 'youtube.com/watch')) {
                            parse_str(parse_url($url, PHP_URL_QUERY), $query);
                            $youtubeId = $query['v'] ?? null;
                        } elseif (str_contains($url, 'youtu.be/')) {
                            $youtubeId = basename(parse_url($url, PHP_URL_PATH));
                        } elseif (str_contains($url, 'youtube.com/embed/')) {
                            $youtubeId = basename(parse_url($url, PHP_URL_PATH));
                        }
                    @endphp

                    @if($youtubeId)
                    <iframe
                            width="100%"
                            height="200"
                            src="https://www.youtube.com/embed/{{ $youtubeId }}"
                            title="YouTube video player"
                            frameborder="0"
                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                            allowfullscreen>
                    </iframe>
                    @else
                    <video width="100%" height="200" controls>
                        <source src="{{ $video->
                        link }}" type="video/mp4">
                            Your browser does not support the video tag.
                    </video>
                    @endif

                @else
                    <img
                        src="https://eitrawmaterials.eu/wp-content/uploads/2016/09/person-icon.png"
                        alt="Video not available"
                        width="100%"
                        height="200"
                        loading="lazy"
                    >
                    @endif
                </div>
            </div>
            @empty
            <div class="col-12 text-center">
                <p>
                    No videos available.
                </p>
            </div>
            @endforelse
        </div>
        @if(isset($videos) && method_exists($videos, 'hasPages') && $videos->hasPages())
        <div class="row mt-4">
            <div class="gallery-pagination">
                {{ $videos->links('pagination::bootstrap-4') }}
            </div>
        </div>
        @endif
    </div>
</div>
</section>
@endsection