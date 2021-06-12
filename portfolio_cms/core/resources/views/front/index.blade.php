@extends('front.layout')

@section('content')

@includeif('front.partials.section-partials.home')

@includeif('front.partials.section-partials.about')

@includeif('front.partials.section-partials.funfact')

@includeif('front.partials.section-partials.service')

@includeif('front.partials.section-partials.resume')

@includeif('front.partials.section-partials.portfolio')

@includeif('front.partials.section-partials.pricingplan')

@includeif('front.partials.section-partials.testimonials')


@includeif('front.partials.section-partials.blog')

@includeif('front.partials.section-partials.contact')

@includeif('front.partials.section-partials.client')

@endsection

