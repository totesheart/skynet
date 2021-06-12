@extends('front.layout')

@section('content')

@includeif('front.partials.section-partials.home')

@includeif('front.partials.section-partials.about')

@includeif('front.partials.section-partials.funfact')

@includeif('front.partials.section-partials.portfolio')

@includeif('front.partials.section-partials.testimonials')

@includeif('front.partials.section-partials.faq')

@includeif('front.partials.section-partials.contact')

@endsection
