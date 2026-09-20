@extends('layouts.front')
@section('content')

<!-- Storybook Wonder Subpage Banner -->
<section class="subpage-wonder-banner">
    <!-- Floating Background Doodles -->
    <div class="doodle-element doodle-star" style="top: 15%; left: 8%; opacity: 0.6;" aria-hidden="true">
        <i class="fas fa-star" style="color: var(--honey-light); font-size: 1.5rem;"></i>
    </div>
    <div class="doodle-element doodle-star" style="bottom: 20%; right: 10%; opacity: 0.6;" aria-hidden="true">
        <i class="fas fa-star" style="color: var(--saffron-light); font-size: 1.25rem;"></i>
    </div>

    <div class="container">
        <div class="reveal-pop">
            <h1>Managing Director</h1>
            <div class="breadcrumb-pill-trail">
                <a href="{{ url('/') }}"><i class="fas fa-home"></i> Home</a> <i class="fas fa-angle-right" style="font-size: 0.75rem; opacity: 0.6;"></i>
                <a href="{{ route('aboutUs') }}">About Us</a> <i class="fas fa-angle-right" style="font-size: 0.75rem; opacity: 0.6;"></i> <span>Managing Director</span>
            </div>
        </div>
    </div>
</section>

<!-- Storybook Wave Divider -->
<div class="storybook-wave wave-cream" aria-hidden="true">
    <svg viewBox="0 0 1200 48" preserveAspectRatio="none">
        <path d="M0,0 C150,40 350,-10 500,25 C650,60 900,5 1200,20 L1200,48 L0,48 Z"></path>
    </svg>
</div>


<section class="section-py bg-white">
    <div class="container">
        <div class="mentor-profile-card reveal-pop">
            <div class="mentor-profile-grid">
                <!-- Left: Arch Framed Portrait -->
                <div class="mentor-arch-portrait">
                    <div class="arch-portrait-frame">
                        <img src="/assets/img/managing_director.jpg" alt="Mr. Sanjaybhai Baldaniya - Managing Director">
                    </div>
                    <div class="mentor-name-tag">
                        <h3>Mr. Sanjaybhai Baldaniya</h3>
                        <p>Managing Director - Sunrise Group</p>
                    </div>
                    <!-- Official Stamp Seal -->
                    <div class="stamp-seal" style="bottom: 40px; right: 10px;">
                        <i class="fas fa-award"></i>
                        <span>SUNRISE<br>LEADER</span>
                    </div>
                </div>

                <!-- Right: Quote Deck & Narrative -->
                <div class="mentor-quote-deck">
                    <span class="section-tag"><i class="fas fa-quote-left"></i> Leadership Perspective</span>
                    <span class="giant-quote-mark">“</span>
                    <blockquote>
                        Welcome to the new academic year at Seven Steps Pre-School and a special welcome to our students. We are confident that our students will enhance the Seven Steps Pre-School tradition and share in the pride and commitment to study at our institution.
                    </blockquote>

                    <div class="mentor-body-text">
                        <p>
                            We want you to excel as students, make success of your careers, be responsible citizens and above all, be good human beings. We look forward to working with you this academic year. Let's make this year the best year ever.
                        </p>

                        <h4 style="font-family: var(--font-display); font-size: 1.2rem; color: var(--navy); margin: 1.5rem 0 0.75rem;">Our Legacy:</h4>
                        <ul class="wonder-list-items">
                            <li>
                                <i class="fas fa-check"></i>
                                <span><strong>Our institute here in Surat is one among the best.</strong> The education and academic expertise provided by our institute is widely admired, achieving a depth of accomplishment in early learning that is unrivalled.</span>
                            </li>
                            <li>
                                <i class="fas fa-check"></i>
                                <span><strong>Getting success is all about perseverance, endurance, and learning ability.</strong> Managing time and stress with zeal to model the path of success drawn by education experts ensures lifelong knowledge and acumen.</span>
                            </li>
                            <li>
                                <i class="fas fa-check"></i>
                                <span><strong>Dedicated and devoted team of experienced educators.</strong> Our staff members are devoted individuals of higher caliber with genuine concern for building your child's future.</span>
                            </li>
                            <li>
                                <i class="fas fa-check"></i>
                                <span><strong>An atmosphere of achievement we foster.</strong> Teachers and students set ambitious goals, develop good work habits, and strive to succeed together.</span>
                            </li>
                        </ul>

                        <div style="background: var(--bg-pill-saffron); border-radius: 14px; padding: 1rem 1.5rem; margin-top: 1.5rem; border-left: 4px solid var(--saffron);">
                            <p style="margin: 0; font-weight: 700; color: var(--saffron); font-family: var(--font-display); font-size: 1.05rem;">
                                Planning and promoting your child's success.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection