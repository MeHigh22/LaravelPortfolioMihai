@extends("layouts.index")

@section("content")
@include("partials.pagesections.navbar")

<main id="main">
@include("partials.pagesections.hero")
@include("partials.pagesections.about")
@include("partials.pagesections.facts")
@include("partials.pagesections.skills")
@include("partials.pagesections.portfolio")
@include("partials.pagesections.skills")
@include("partials.pagesections.portfolio")
@include("partials.pagesections.services")
@include("partials.pagesections.contact")
@include("partials.pagesections.footer")
</main>


@endsection
